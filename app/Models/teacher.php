<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class teacher extends Model
{
    use HasFactory;

        public function subject()
        {
            return $this->belongsToMany(subject::class,'subject_teachers');
        }


        public function student()
        {
            return $this->hasManyThrough(student::class,subject::class);
        }





}
