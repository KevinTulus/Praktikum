<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('teachers')->truncate();
        $teachers = [];
        $date = date("Y-m-d H:i:s");

        for($i = 1; $i <= 14; $i++)
        {
            $k = 1 + $i;

            $teachers[] = [
                'user_id' => $k,
                'created_at' => $date,
                'updated_at' => $date,
            ];
        }

        \DB::table('teachers')->insert($teachers);
    }
}
