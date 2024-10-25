<?php

namespace App\Livewire\Dashboard;

use Livewire\WithPagination;
use App\Models\User;
use Livewire\Component;

class AlluserComponent extends Component
{
    use WithPagination;
    public $showTotalUser = 10;

    public $searchTerm;



    public function render()
    {

        // ====================SELECT ALL USER WITH ROLL AND GET 10 USER DEFULT=====================//

        $users = User::select('id', 'name', 'profile_img')
            ->with('roles:id,name')
            ->where('name', 'like', '%' . $this->searchTerm . '%')
            ->paginate($this->showTotalUser);

        return view('livewire.dashboard.alluser-component', [
            'users' => $users,
        ]);
    }
}
