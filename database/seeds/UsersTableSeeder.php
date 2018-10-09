<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('users')->insert([
             'role_id'=>'1',
             'name'=>'alex',
             'username'=>'alex',
             'password'=>bcrypt('fannya'),
             'email'=>'alex@gmail.com',
         ]);
        DB::table('users')->insert([
            'role_id'=>'1',
            'name'=>'josy',
            'username'=>'josy',
            'password'=>bcrypt('fannya'),
            'email'=>'josy@gmail.com',
        ]);

        DB::table('users')->insert([
            'role_id'=>'2',
            'name'=>'alemu',
            'username'=>'alemu',
            'password'=>bcrypt('fannya'),
            'email'=>'alemu@gmail.com',
        ]);
    }
}
