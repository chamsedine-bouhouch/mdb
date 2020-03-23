<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    public function listeDemande() {
        return $this->belongsToMany('App\demande');
        }
}
