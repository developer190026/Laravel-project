<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\models\student;
use Illuminate\Support\Facades\File;

class studentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Multiple students using collection


       

        $json = File::get(database_path('json\student.json'));
        $students = json_decode($json, true);

        foreach ($students as $student) {
            Student::create($student);
        }


        // $allStudents = collect([
        //     [
        //         'name' => 'Bindu',
        //         'email' => 'bindu1@gmail.com',
        //         'percentage' => 75.43,
        //         'age' => 21,
        //         'countryname' => 'India'
        //     ],
        //     [
        //         'name' => 'Ravi',
        //         'email' => 'ravi@gmail.com',
        //         'percentage' => 80.1234,
        //         'age' => 22,
        //         'countryname' => 'India'
        //     ],
        //     [
        //         'name' => 'Sneha',
        //         'email' => 'sneha@gmail.com',
        //         'percentage' => 67.5678,
        //         'age' => 20,
        //         'countryname' => 'India'
        //     ],
        //     [
        //         'name' => 'Ajay',
        //         'email' => 'ajay@gmail.com',
        //         'percentage' => 88.7890,
        //         'age' => 23,
        //         'countryname' => 'India'
        //     ],
        // ]);

        // $allStudents->each(function ($student) {
        //     //Student::create($student);

        //     Student::insert($student);
        // });

        // // Optional: Add a single student
        for($i=0;$i=5;$i++)
        {
        Student::create([
            'name' => fake()->name,
            'email' => fake()->unique()->email,
            'percentage' => 70.1234,
            'age' => 24,
            'countryname' => 'India'
        ]);
    }
    }
}
