<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('students')->truncate();
        $students = [];
        $date = date("Y-m-d H:i:s");

        for($i = 1; $i <= 30; $i++)
        {
            $k = 15 + $i;
            if($i <= 10) {$j = 1;}
            elseif ($i >= 11 && $i <=20) {$j = 2;}
            else {$j = 3;}

            $students[] = [
                'user_id' => $k,
                'kelas' => $j,
                'created_at' => $date,
                'updated_at' => $date,
            ];
        }

        \DB::table('students')->insert($students);
    }
}
