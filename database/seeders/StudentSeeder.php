<?php

namespace Database\Seeders;

use App\Models\Major;
use App\Models\Student;
use Faker\Factory;
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
        //Menghapus semua data yang ada di table students
        Student::truncate();
        $faker =Factory::create('id_ID');
        //panggil semua jurusan
        $majors =Major::get();
        for ($i = 0; $i <100; $i++){
        $gender =($i % 2) ? "male" : "female" ;
        Student::create([
            'name' => $faker->name,
            'date_birth' => '2002-02-01',
            'gender' =>  $gender,
            'address' => $faker->address,
            'major_id' => $majors->random()->id
        ]);
    }
    }
}
