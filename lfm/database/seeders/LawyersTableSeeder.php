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
                'password' => Hash::make('1111'),
                'role' => 'admin',
                'position' => 'admin',
                'salary' => '10000',
            
            ],

            //lawyer 1
            [
                'name' =>'lawyer',
                'username'=>'lawyer',
                'email' => 'lawyer@gmail.com',
                'password' => Hash::make('2222'),
                'role' => 'lawyer',
                'position' => 'partner',
                'salary' => '10000',
            
            ],

            //lawyer 2
            [
                'name' =>'Mike Ross',
                'username'=>'mikeross',
                'email' => 'mikeross@rys.c',
                'password' => 'mikeross',
                'role' => 'lawyer',
                'position' => 'junior associate',
                'salary' => '5000',
            
            ],


            //managing partner
            [
                'name' =>'managing partner',
                'username'=>'managing.partner',
                'email' => 'managing.partner@gmail.com',
                'password' => Hash::make('3333'),
                'role' => 'managing partner',
                'position' => 'partner',
                'salary' => '20000',
            
            ],

            [
                'name' =>'firmleader',
                'username'=>'firmleader',
                'email' => 'firmleader@gmail.com',
                'password' => Hash::make('3333'),
                'role' => 'firmleader',
                'position' => 'partner',
                'salary' => '20000',
            
            ],

            //Finance Team
            [
                'name' =>'finance',
                'username'=>'financer',
                'email' => 'finance@gmail.com',
                'password' => Hash::make('4444'),
                'role' => 'finance',
                'position' => 'payroll manager',
                'salary' => '7000',
            
            ],

        ]);

        //Cases

        //Case1
        DB::table('case_details')->insert([
            "Client_Name" => "Client One",
            "Assigned_Lawyer_1_ID" => "2",
            'Client_Email' =>'client1@rys.c',
            'Opposition'=> 'Opposition 1',
            "Total_Fees"=>10000,
        ]);


        //Case2
        DB::table('case_details')->insert([
            "Client_Name" => "Rachel Green",
            "Assigned_Lawyer_2_ID" => "3",
            'Client_Email' =>'rachel.green@friends',
            'Opposition'=> 'Ross Geller',
            'Witness' =>'Chandler Bing',
            "Total_Fees"=>20000,
            
        ]);


        //Case3
        DB::table('case_details')->insert([
            "Client_Name" => "Sheldon Cooper",
            'Client_Email' =>'sheldon.cooper@tbbt',
            'Opposition'=> 'Leslie Winkle',
            'Witness' =>'None',
            "Total_Fees"=>5000,
        ]);


        DB::table('case_lists')->insert([

            [
                 'id'=>'1',
                 'Client_Name'=> 'Client1',
                 'Assigned_Lawyer_1_ID'=>'NULL',
                 'Assigned_Lawyer_2_ID'=>'NULL',
                 'status' => 'unassigned',
            ],
 
            [
                 'id'=>'2',
                 'Client_Name'=> 'Client2',
                 'Assigned_Lawyer_1_ID'=>'NULL',
                 'Assigned_Lawyer_2_ID'=>'NULL',
                 'status' => 'unassigned',
            ],
 
            [
                 'id'=>'3',
                 'Client_Name'=> 'Client3',
                 'Assigned_Lawyer_1_ID'=>'NULL',
                 'Assigned_Lawyer_2_ID'=>'NULL',
                 'status' => 'unassigned',
            ],
 
            [
                 'id'=>'4',
                 'Client_Name'=> 'Client4',
                 'Assigned_Lawyer_1_ID'=>'NULL',
                 'Assigned_Lawyer_2_ID'=>'NULL',
                 'status' => 'unassigned',
            ]
 
         ]);
    }
}
