<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('jobs')->truncate();
        $jobs = [];
        $date = date("Y-m-d H:i:s");

        for($i = 1; $i <= 42; $i++)
        {
            if($i <= 14) {$j = $i;}
            elseif ($i >= 15 && $i <=28) {$j = $i-14;}
            else {$j = $i-28;}

            $jobs[] = [
                'course_id' => $i,
                'teacher_id' => $j,
                'created_at' => $date,
                'updated_at' => $date,
            ];
        }

        \DB::table('jobs')->insert($jobs);
    }
}
