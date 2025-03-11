<?php

namespace App\Models\home_page;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentLife extends Model
{
    use HasFactory;

    protected $table = "student_lives";

    protected $fillable = [
        "image"
    ];
}
