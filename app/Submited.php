<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Submited extends Model
{
    protected $fillable = ['student_id', 'course_id', 'unit_id', 'status', 'marks', 'assign_path'];
}
