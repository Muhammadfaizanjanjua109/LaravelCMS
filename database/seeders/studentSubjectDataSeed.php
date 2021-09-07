<?php

namespace Database\Seeders;

use App\Models\CourceOfContent;
use App\Models\student;
use App\Models\subject;
use App\Models\SubjectTeacher;
use App\Models\teacher;
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
        $f->clasec_id='1';
        $f->save();

        $d = new Student();
        $f->name = 'danial';
        $f->father_name = 'Yasir Ahmed';
        $f->Adress = 'Po Box Dandot Tehsil Choa';
        $f->CNIC = '3456';
        $f->clasec_id='2';
        $f->section_id = '2';
        $f->save();


        $f = new subject();
        $f->name='islamiat';
        $f->clasec_id='1';
        $f->save();

        $f = new subject();
        $f->name='Urdu';
        $f->clasec_id='2';
        $f->save();



        $f = new teacher();
        $f->name='asma';
        $f->scale='jnr';
        $f->pay=20000;
        $f->save();

        $f = new teacher();
        $f->name='yasir';
        $f->scale='snr';
        $f->pay=40000;
        $f->save();




       //// /studentSubject ki data entry


        $f = new SubjectTeacher();
        $f->subject_id='1';
        $f->teacher_id='1';
        $f->save();


        $f = new SubjectTeacher();
        $f->subject_id='1';
        $f->teacher_id='2';
        $f->save();

        $f = new SubjectTeacher();
        $f->subject_id='2';
        $f->teacher_id='1';
        $f->save();

        $f = new CourceOfContent();
        $f->topic='chapter 1';
        $f->description='loream ipsum ......';
        $f->subject_id='1';

        $f->save();

    }
}
