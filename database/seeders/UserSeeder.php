<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::statement('SET FOREIGN_KEY_CHECKS=0');
        \DB::table('users')->truncate();
        $users = [];
        $faker = Factory::create();
        $date = date("Y-m-d H:i:s");

        \DB::table('users')->insert([
            [
                'ni' => 001,
                'name' => "admin",
                'email' => "admin@gmail.com",
                'password' => bcrypt("adminpass"),
                'role' => 1,
                'created_at' => $date,
                'updated_at' => $date,

            ],
        ]);

        for($i = 1; $i <= 14; $i++)
        {
            $users[] = 
            [
                'ni' => "2000201000" + $i,
                'name' => "teacher".$i,
                'password' => bcrypt("gurupass"),
                'role' => 2,
                'created_at' => $date,
                'updated_at' => $date,
            ];
        }

        for($i = 1; $i <= 30; $i++)
        {
            if($i <= 10) {$j = 201800;}
            elseif ($i >= 11 && $i <=20) {$j = 201900;}
            else {$j = 202000;}
            
            $users[] = 
            [
                'ni' => $j + $i,
                'name' => "student".$i,
                'password' => bcrypt("siswapass"),
                'role' => 3,
                'created_at' => $date,
                'updated_at' => $date,
            ];
        }

        \DB::table('users')->insert($users);
    }
}
