<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;


class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        


        for($i = 0; $i < 10; $i++) {
            $student = new Student();
            $student->name = $faker->name();
            $student->email = $faker->email();
            $student->roll = $faker->randomNumber(); 
            $student->class = $faker->numberBetween(1, 10);

            
            $student->save();
        }
    }
}
