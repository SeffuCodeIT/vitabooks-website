<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable = ['album_name', 'cover_pic', 'cover_pica', 'cover_picb',
        'cover_picc', 'cover_picd', 'cover_pice', 'cover_picf', 'cover_picg',
        'cover_pich', 'cover_pici'];
    use HasFactory;
}
