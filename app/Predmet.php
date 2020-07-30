<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Predmet extends Model
{
    protected $table = 'predmet';

    public function profesor(){
        return $this->belongsTo(Profesor::class);
    }

    public function studenti(){
        return $this->belongsToMany(Student::class,'student_predmet')->withPivot('ispitni_rok')->withTimestamps();
    }

}
