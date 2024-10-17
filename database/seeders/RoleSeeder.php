<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Spatie\Permission\Models\Role;
// // use Laravel\Jetstream\Rules\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rols=['supper_admin','admin','writter','user'];
        foreach($rols as $role){
            $Role = new Role();
            $Role->name = $role;
            $Role->save();
        }
    }
}
