<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class facture extends Model
{

    protected $fillable = ['total','demande_id'];
    
    public function demande()
    {
        return $this->hasOne('App\demande');
    }
}
