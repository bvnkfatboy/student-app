<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    // use Collection;

    protected $fillable = [
        'student_id',
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


    public static function insertDB($request){
        return self::create($request);
    }
    public static function deleteDB($student_id){
        return self::where('student_id', $student_id)->delete();
    }
}