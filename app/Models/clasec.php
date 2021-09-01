<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clasec extends Model
{
    use HasFactory;


    protected $fillable = [
        'Name',
        'Section',

    ];

    public function students()
    {
        return $this->hasMany(student::class);
    }


    public function section()
    {
        return $this->hasMany(section::class);
    }


    public function subject()
    {
        return $this->hasMany(subject::class);
    }
}
