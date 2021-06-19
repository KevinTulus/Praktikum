<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('courses')->truncate();

        $date = date("Y-m-d H:i:s");
        for($i = 1; $i <= 3; $i++)
        {
            \DB::table('courses')->insert(
                [
                    [
                        'course_name' => "b_inggris",
                        'kelas' => $i,
                        'created_at' => $date,
                        'updated_at' => $date,
                    ],
                    [
                        'course_name' => "b_indonesia",
                        'kelas' => $i,
                        'created_at' => $date,
                        'updated_at' => $date,
                    ],
                    [
                        'course_name' => "matematika",
                        'kelas' => $i,
                        'created_at' => $date,
                        'updated_at' => $date,
                    ],
                    [
                        'course_name' => "fisika",
                        'kelas' => $i,
                        'created_at' => $date,
                        'updated_at' => $date,
                    ],
                    [
                        'course_name' => "kimia",
                        'kelas' => $i,
                        'created_at' => $date,
                        'updated_at' => $date,
                    ],
                    [
                        'course_name' => "biologi",
                        'kelas' => $i,
                        'created_at' => $date,
                        'updated_at' => $date,
                    ],
                    [
                        'course_name' => "sejarah",
                        'kelas' => $i,
                        'created_at' => $date,
                        'updated_at' => $date,
                    ],
                    [
                        'course_name' => "ekonomi",
                        'kelas' => $i,
                        'created_at' => $date,
                        'updated_at' => $date,
                    ],
                    [
                        'course_name' => "sosiologi",
                        'kelas' => $i,
                        'created_at' => $date,
                        'updated_at' => $date,
                    ],
                    [
                        'course_name' => "geografi",
                        'kelas' => $i,
                        'created_at' => $date,
                        'updated_at' => $date,
                    ],
                    [
                        'course_name' => "pkn",
                        'kelas' => $i,
                        'created_at' => $date,
                        'updated_at' => $date,
                    ],
                    [
                        'course_name' => "agama",
                        'kelas' => $i,
                        'created_at' => $date,
                        'updated_at' => $date,
                    ],
                    [
                        'course_name' => "penjas",
                        'kelas' => $i,
                        'created_at' => $date,
                        'updated_at' => $date,
                    ],
                    [
                        'course_name' => "komputer",
                        'kelas' => $i,
                        'created_at' => $date,
                        'updated_at' => $date,
                    ],
                ]);
        }
    }
}
