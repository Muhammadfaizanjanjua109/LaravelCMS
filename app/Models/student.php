<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;
    public $filable=[
        'name',
        'adress',
        'cnic',
        'father_name',
        'section_id',
    ];

    public function section()
    {
        return $this->belongsTo(section::class);
    }


    public function clasec()
    {
        return $this->belongsTo(clasec::class)->withDefault();
    }


}
