<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kolokvijum extends Model
{
    protected $table = 'kolokvijum';

    public function predmeti(){
        return $this->belongsTo(Predmet::class);
    }
}
