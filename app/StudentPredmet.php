<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class StudentPredmet extends Pivot
{
    protected $table ='student_predmet';
}
