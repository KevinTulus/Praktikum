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

        for($i = 1; $i <= 14; $i++)
        {
            $k = 1 + $i;

            $jobs[] = [
                'course_id' => $i,
                'teacher_id' => $k,
                'created_at' => $date,
                'updated_at' => $date,
            ];
        }

        \DB::table('jobs')->insert($jobs);
    }
}
