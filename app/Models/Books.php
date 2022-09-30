<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    protected $fillable = ['book_name','book_summary','author_name','s_author_name','print_date','book_price','cover_pic','back_pic'];
    use HasFactory;
}
