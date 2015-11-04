<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Database\Eloquent\SoftDeletes;

class Exam extends Eloquent
{
    use SoftDeletes;
    //
    protected $table = 'exams';
    public $timestamps = true;
    protected $dates = ['deleted_at'];


}
