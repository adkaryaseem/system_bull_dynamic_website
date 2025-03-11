<?php

namespace App\Models\home_page;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentLife extends Model
{
    use HasFactory;

    protected $table = "tudent_lives";

    protected $fillable = [
        "iamge"
    ];
}
