<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subject extends Model
{
    use HasFactory;



    public function clasec()
    {
        return $this->belongsTo(clasec::class)->withDefault();
    }


    public function section()
    {
        return $this->hasManyThrough(section::class,clasec::class);
    }



    public function student()
    {
        return $this->hasManyThrough(student::class,section::class);
    }
}
