<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table='students';

    protected $fillable=[
        'card',
        'names',
        'last_name',
        'birthdate',
        'father_name',
        'mother_name',
        'grade',
        'section',
        'date_admission',
    ];

}
