<?php

namespace App\Http\Controllers;

use App\demande;
use App\facture;
use App\service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class factureController extends Controller
{
    public function passerDemande(Request $request,$id)
    {
   
        
            Demande::where('id',$id)->update(array('statue' => 'en attente du technicien'));
            $facture = new facture();
            $facture->total = $request->input('total');
            $facture->demande_id = $id;
            $facture->save();
         
            return redirect('facture'.$id)->withStatus(__('bloquer'));
      
      
        
    }
     public function mes_facture()
    {
        $demandes=demande::where('user_id',Auth::user()->id)->get();
        
        return view('',compact('demande'));
        
    }
    public function detail_facture($id)
    {
   
     $facture_produit = DB::table('produit_demande')
        ->join('produits', 'produit_demande.produit_id', '=', 'produits.id')
        ->join('demandes', 'produit_demande.demande_id', '=', 'demandes.id')
        ->where('demande_id',$id)
        
        ->get(array(
            'nom',
            'prix',
            'image',
        ));
        $sum_produit = DB::table('produit_demande')
        ->join('produits', 'produit_demande.produit_id', '=', 'produits.id')
        ->join('demandes', 'produit_demande.demande_id', '=', 'demandes.id')
        ->where('demande_id',$id)
        ->sum('prix');
        $facture = DB::table('services_demande')
        ->join('services', 'services_demande.service_id', '=', 'services.id')
        ->join('demandes', 'services_demande.demande_id', '=', 'demandes.id')
        ->where('demande_id',$id)
        
        ->get(array(
            'titre',
            'prix',
            'image',
        ));
        $sum = DB::table('services_demande')
        ->join('services', 'services_demande.service_id', '=', 'services.id')
        ->join('demandes', 'services_demande.demande_id', '=', 'demandes.id')
        ->where('demande_id',$id)
        ->sum('prix');
         
        return view('factureManagement.facture',compact('facture','sum','facture_produit','sum_produit','id'));
        
    }
    public function detail($id)
    {
   
        $produit = DB::table('produit_demande')
        ->join('produits', 'produit_demande.produit_id', '=', 'produits.id')
        ->join('demandes', 'produit_demande.demande_id', '=', 'demandes.id')
        ->where('demande_id',$id)
        
        ->get(array(
            'nom',
            'prix',
            'image',
        ));
        $sum_produit = DB::table('produit_demande')
        ->join('produits', 'produit_demande.produit_id', '=', 'produits.id')
        ->join('demandes', 'produit_demande.demande_id', '=', 'demandes.id')
        ->where('demande_id',$id)
        ->sum('prix');
        $service= DB::table('services_demande')
        ->join('services', 'services_demande.service_id', '=', 'services.id')
        ->join('demandes', 'services_demande.demande_id', '=', 'demandes.id')
        ->where('demande_id',$id)
        
        ->get(array(
            'titre',
            'prix',
            'image',
        ));
        $sum = DB::table('services_demande')
        ->join('services', 'services_demande.service_id', '=', 'services.id')
        ->join('demandes', 'services_demande.demande_id', '=', 'demandes.id')
        ->where('demande_id',$id)
        ->sum('prix');
         
        return view('factureManagement.factureDetail',compact('service','sum','produit','sum_produit','id'));
        
      
        
    }

    

}
