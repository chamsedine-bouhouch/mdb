<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produit extends Model
{
    public function listeDemande() {
        return $this->belongsToMany('App\demande');
        }
}
