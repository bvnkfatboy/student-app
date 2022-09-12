<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'firstname',
        'lastname',
        'birthdate',
        'faculty'
    ];
    protected $table = 'students';
    protected $primarykey = 'student_id';

    public static function getByFaculty($faculty_id) {
        return self::where('faculty',  $faculty_id)->get();
                    
    }
}