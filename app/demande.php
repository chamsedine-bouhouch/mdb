<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class demande extends Model
{

    protected $fillable = [
        'localisation',
        'horaire',
        'date_intervention',
        'nomPrenom',
        'phone',
        'type',
        'statue',
        'user_id',
        'total',
        'prix_services',
        'prix_totale_produit',
         'prix_deplacement',
          'prix_initial',

          'technicien_id',
         'facture_id',
         
    ];

    public function User()
    {
        return $this->belongsTo('App\User','foreign_key','nullable');
    }
    public function technicien()
    {
        return $this->belongsTo('App\User','foreign_key','nullable');
    }
    public function facture()
    {
        return $this->hasOne('App\facture');
    }
    
    public function listeService() {
         return $this->belongsToMany('App\service');
         }

         public function listeproduit() {
            return $this->belongsToMany('App\produit');
            }
}
