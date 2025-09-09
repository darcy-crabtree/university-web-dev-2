<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert(['name' => 'Amelia Taylor', 'email' => 'a.taylor@hudstudent.ac.uk', 'password' => Hash::make('imsohungry6'), 'role_id' => 2]);
        DB::table('users')->insert(['name' => 'Darcy Crabtree', 'email' => 'd.crabtree@hudstudent.ac.uk', 'password' => Hash::make('ihaveasandwich7'), 'role_id' => 1]);
        DB::table('users')->insert(['name' => 'John Doe', 'email' => 'j.doe@hudstudent.ac.uk', 'password' => Hash::make('janedoe123'), 'role_id' => 2]);
    }

}
