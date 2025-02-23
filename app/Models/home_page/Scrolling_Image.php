<?php

namespace App\Models\home_page;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scrolling_Image extends Model
{
    use HasFactory;

   protected $table = "scrolling_images";

   protected $fillable = [
    "images"
   ];
}
