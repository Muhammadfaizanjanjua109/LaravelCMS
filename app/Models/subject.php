<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subject extends Model
{
    use HasFactory;


    public function student()
    {
        return $this->belongsToMany(student::class,'student_subjects');
    }

    public function clasec()
    {
        return $this->belongsTo(clasec::class);
    }

}
