<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;

/**
 * Summary of LawyersTableSeeder
 */
class LawyersTableSeeder extends Seeder

{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            //admin
            [
                'name' =>'admin',
                'username'=>'admin',
                'email' => 'admin@g.com',
                'password' => Hash::make('11111'),
                'role' => 'admin',
                'position' => 'admin',
            
            ],

            //lawyer 1
            [
                'name' =>'lawyer',
                'username'=>'lawyer',
                'email' => 'lawyer@gmail.com',
                'password' => Hash::make('2222'),
                'role' => 'lawyer',
                'position' => 'partner',
            
            ],

            //lawyer 2
            [
                'name' =>'Mike Ross',
                'username'=>'mikeross',
                'email' => 'mikeross@rys.c',
                'password' => Hash::make('mikeross'),
                'role' => 'lawyer',
                'position' => 'partner',
            
            ],


            //managing partner
            [
                'name' =>'managing partner',
                'username'=>'managing.partner',
                'email' => 'managing.partner@gmail.com',
                'password' => Hash::make('3333'),
                'role' => 'managing partner',
                'position' => 'partner',
            
            ],

        ]);

        DB::table('case_details')->insert([
            "Client_Name" => "Client One",
            'Client_Email' =>'client1@rys.c',
            'Opposition'=> 'Opposition 1',
        ]);
    }
}
