<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    public $fillable = [

        'name', 'email', 'phone', 'subject', 'message'

    ];
    use HasFactory;
}
