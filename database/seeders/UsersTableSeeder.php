<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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
            'name'=>'paul',
            'prenom'=>'paul',
            'numero'=>234567,
            'fonction'=>'paul',
            'email'=>'paul@gmail.com',
            'password'=>Hash::make('1234')
        ]);

    }
}
