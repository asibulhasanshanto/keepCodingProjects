<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        //create 200 students
        \App\Models\Student::factory(200)->create();
        
        //create 10 classrooms with 10 students with many to many relationship
        \App\Models\Classroom::factory(10)->create()->each(function ($classroom) {
            //take random 10 students and assign them to the classroom
            $students = \App\Models\Student::inRandomOrder()->take(10)->get();
            $classroom->students()->attach($students);
        });
        

        //get all classrooms
        $classrooms = \App\Models\Classroom::all();
        //for each classroom create a teacher 
        foreach($classrooms as $classroom){
            \App\Models\Teacher::factory(1)->create(['classroom_id' => $classroom->id]);
        }
        //assignment factory 
        \App\Models\Assignment::factory(100)->create();

        




        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
