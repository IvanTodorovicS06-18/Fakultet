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
        return $this->belongsToMany(Student::class,'student_predmet')->withTimestamps();
    }

    public function student(){
        return $this->belongsToMany(Student::class,'Ispit')->withPivot('ispitni_rok')->withTimestamps();
    }

    public function kolokvijum(){
        return $this->hasMany(Kolokvijum::class);
    }

}
