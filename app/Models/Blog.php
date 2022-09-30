<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use BeyondCode\Comments\Traits\HasComments;

class Blog extends Model
{
    use HasFactory;
    use HasComments;

    protected $fillable = ['title', 'body', 'cover_pic', 'user_id'];

}
