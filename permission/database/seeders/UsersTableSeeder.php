<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
Use Illuminate\Support\Facades\Hash;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
                DB::table('users')->insert([

                    [
                    'name'=>'Admin',
                    'username'=>'admin',
                    'email'=>'admin@gmail.com',
                    'password'=> Hash::make('aaaaaa'),
                    'role'=>'admin',
                    'status'=>'active',

                ],
                //Agent
                [
                    'name'=>'Agent',
                    'username'=>'agent',
                    'email'=>'agent@gmail.com',
                    'password'=> Hash::make('aaaaaa'),
                    'role'=>'agent',
                    'status'=>'active',

                ],


                    //Users
                    [
                        'name'=>'User',
                        'username'=>'user',
                        'email'=>'user@gmail.com',
                        'password'=> Hash::make('aaaaaa'),
                        'role'=>'user',
                        'status'=>'active',
    
                    ],
                
                
                ]);

        
    }
}
