<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class taskModel extends Model
{
    use SoftDeletes;
    protected $table = 'tasks';

}
