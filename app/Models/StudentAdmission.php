<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentAdmission extends Model
{
    use HasFactory;

    protected $table = "student_admissions";

    protected $fillable = [
        "name",
       "course_id",
        "studylevel",
        "gender",
        "country_id",
        "email",
        "birthdate",
        "age",
        "address",
        "number",
        "father_name",
        "father_number",
        "father_occupation",
        "father_mail",
        "mother_name",
        "mother_number",
        "mother_occupation",
        "mother_mail",
        "local_name",
        "local_number",
        "local_occupation",
        "local_mail",
        "school_name",
        "school_address",
        "students_gpa"
    ];
}
