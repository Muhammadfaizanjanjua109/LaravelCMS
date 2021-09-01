<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class section extends Model
{
    use HasFactory;

     protected $filable=[
    'name',
    'clasec_id',
     ];

     public function clasec()
     {
         return $this->belongsTo(clasec::class)->withDefault();
     }

     public function student()
     {
         return $this->hasMany(student::class);
     }
}
