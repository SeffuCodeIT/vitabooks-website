<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    protected $fillable = ['project_name', 'project_body', 'project_short_desc', 'project_success', 'project_pillar', 'project_pillara', 'project_pillarb', 'project_pillarc', 'start_date', 'end_date', 'project_cost', 'cover_pic', 'back_pic'];

    use HasFactory;
}
