<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $fillable = ['media_name', 'media_desc', 'cover_pic',
        'media_link'
    ];
    use HasFactory;
}
