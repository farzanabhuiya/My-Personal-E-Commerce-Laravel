<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        
        $user = new User();

        $user->name = 'Md shovo';
        $user->email = 'shovom677@gmail.com';
        $user->password = Hash::make('password');
        $user->save();
        $user->assignRole('supper_admin');
        $user = new User();

        $user->name = 'farzana';
        $user->email = 'farzana677@gmail.com';
        $user->password = Hash::make('11111111');
        $user->save();
        $user->assignRole('admin');
        $user = new User();

        $user->name = 'Md Arif';
        $user->email = 'arif677@gmail.com';
        $user->password = Hash::make('password');
        $user->save();
        $user->assignRole('writter');

        
        


        User::factory(20)->create();



    }
}
