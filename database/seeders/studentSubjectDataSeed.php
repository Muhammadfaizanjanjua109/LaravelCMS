<?php

namespace Database\Seeders;
use App\Models\student;
use App\Models\subject;
use App\Models\StudentSubject;
use Illuminate\Database\Seeder;

class studentSubjectDataSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $f = new Student();
        $f->name = 'Faizan';
        $f->father_name = 'Ishtiaq Ahmed';
        $f->Adress = 'Po Box Dandot Tehsil Choa';
        $f->CNIC = '34456';
        $f->section_id = '2';
        $f->save();

        $d = new Student();
        $f->name = 'danial';
        $f->father_name = 'Yasir Ahmed';
        $f->Adress = 'Po Box Dandot Tehsil Choa';
        $f->CNIC = '3456';
        $f->section_id = '2';
        $f->save();


        $f = new subject();
        $f->save();

        $f = new subject();
        $f->save();




       //// /studentSubject ki data entry

        $f = new StudentSubject();
        $f->Subject_id='1';
        $f->student_id='1';
        $f->save();


        $f = new StudentSubject();
        $f->Subject_id='2';
        $f->student_id='2';
        $f->save();

        $f = new StudentSubject();
        $f->Subject_id='1';
        $f->student_id='2';
        $f->save();


    }
}
