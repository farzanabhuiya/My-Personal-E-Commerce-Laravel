<?php

namespace App\Livewire\Dashboard;

use App\Models\User;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class AssenRollComponent extends Component
{

    public $id;

    public $Rolls=[];
    public $signRolls=[];
        public $userAllreadyHasRoll = [];


    public function mount($id)
    {

        $this->id = $id;

        // $this->signRolls = $user->roles->pluck('id')->toArray();
        
        $user = User::with("roles")->find($this->id);

        // dd($user);

       
        // if(!empty( $user)){
          

        //     foreach ($user as $us) {
             
        //         foreach ($us->roles as $userRolls) {

                     
        //             $this->userAllreadyHasRoll[] = $userRolls;
        //         }
        //     }
        // }



    }


     public function ässenRoll(){

        $this->validate([
            'Rolls' => 'required|array|min:1', 
            
        ]);
    





        $allrools=Role::whereIn('id',$this->Rolls)->pluck('name')->toArray();

        // ==============FOR SUPPER ADMIN

        $assenRollUser = User::select("id",'name')->find($this->id);
        if ($assenRollUser->getRoleNames()->isNotEmpty()) {
           
            $assenRollUser->syncRoles([]);
        }



        $assenRollUser->assignRole([$allrools]);
    //    $this->roles= Role::select("id", "name")->get();
    //  dd( $assenRollUser->getRoleNames());



    return redirect()->route('dashboard.assenroll',$this->id);
    // return back();

     }

    public function render()
    {


        $user = User::with("roles")->find($this->id);
        // dd($user);
        $users = User::select('id', 'name', 'profile_img')
            ->with('roles:id,name')

            ->get();

            $this->signRolls = $user->roles->pluck('id')->toArray();

           
     

        // if(!empty( $users->roles)){
        //     foreach ($users as $user) {
        //         foreach ($user->roles as $userRolls) {
        //             $this->userAllreadyHasRoll[] = $userRolls->id;
        //         }
        //     }
        // }
      
        // dd($this->userAllreadyHasRoll );


        $roles = Role::select("id", "name")->get();

        return view('livewire.dashboard.assen-roll-component', ['user' => $user, 'roles' => $roles]);
    }

}

