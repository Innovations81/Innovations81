<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $password = Hash::make(env('ADMIN_PASS'));
        $data = array(
                'email' => 'admin@goa247.com',
                'is_verified' => '1',
                'role_id' => 1,
                
           );
       
        User::updateOrCreate(
            ['email' =>  $data['email']],
            [
                'email' => $data['email'],
                'is_verified' =>  $data['is_verified'],
                'role_id' => $data['role_id'],
                'password' => $password
            ]
        );

        $roles = array( 
            array(
                'id' => 1,
                'name' => 'Admin',
            ),  
            array(
                'id' => 2,
                'name' => 'User',
            ), 
        );
        foreach ($roles as $role) {
            Role::updateOrCreate(
                ['id' =>  $role['id']],
                [
                    'id' => $role['id'],
                    'name' =>  $role['name'],
                   
                ]
            );
        }
    }
}
