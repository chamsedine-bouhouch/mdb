<?php

namespace App\Http\Controllers;

use App\demande;
use App\facture;
use App\produit;
use App\service;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Mockery\Matcher\Not;

class DemandeController extends Controller
{
    public function ajoutDemandeSteep1()
    {
        return view('DemandeManagement.addDemandeStep1');
    }
    public function ajoutDemandeSteep2($id)
    {
       $a= demande::where('id',$id)->get();
        $services=service::get();
        return view('DemandeManagement.passerDemande',compact('services','a'));
    }
    
    public function ajoutDemandeSteep3($id)
    {
       $a= demande::where('id',$id)->get();
        $produits=produit::get();
        return view('DemandeManagement.trois',compact('produits','a'));
    }
    
    public function step1(Request $request)
    {
        $a=$request->input('iduser');
        if($a==0)
        {

            $demande = new demande();
        $demande->nomPrenom = $request->input('nomPrenom');
        $demande->phone = $request->input('phone');
        $demande->localisation = $request->input('localisation');
        $demande->horaire = $request->input('horaire');
        $demande->date_intervention = $request->input('date');
        $demande->type = $request->input('type');
        $demande->statue = "en cours";
        $demande->facture_id = null;
        $demande->user_id=null;
        $demande->technicien_id=null;
        $demande->prix_initial = 0;
        $demande->prix_deplacement = 0;
        $demande->prix_service = 0;
        $demande->total = 0;
        $demande->prix_totale_produit= 0;

        $demande->save();
        return redirect()->route('stepa'.$demande->id)->with('success','demande ajouter');
        }
        else
        {
            $demande = new demande();
            $demande->nomPrenom = null;
            $demande->phone = null;
            $demande->localisation = $request->input('localisation');
            $demande->horaire = $request->input('horaire');
            $demande->date_intervention = $request->input('date');
            $demande->type = $request->input('type');
            $demande->statue = "en cours";
            $demande->facture_id = null;
            $demande->user_id=Auth::user()->id;
            $demande->technicien_id=null;
            $demande->prix_initial = 0;
            $demande->prix_deplacement = 0;
            $demande->prix_service = 0;
            $demande->total = 0;
            $demande->prix_totale_produit= 0;
         
            $demande->save();
            return redirect('stepa'.$demande->id)->with('success','demande ajouter');

        }

       
    }

     public function step2(Request $request,$id)
    {
       
     $servicesId= $request->input('servicesId');
     $c= preg_replace("/[^0-9\.]/", '', $servicesId);
     for($i=0;$i<strlen($c);$i++){
       
      $a= (int) preg_replace("/[^0-9\.]/", '', $servicesId)[$i];
    
      DB::insert('insert into  services_demande  (service_id, demande_id) values (?, ?)', [$a,(int) $id]);

       }
      
       return redirect('trois'.$id)->with('success','demande ajouter');

       



    }
    public function step3(Request $request,$id)
    {
        $a= demande::where('id',$id)->get();
     $servicesId= $request->input('servicesId');
     $c= preg_replace("/[^0-9\.]/", '', $servicesId);
     for($i=0;$i<strlen($c);$i++){
       
      $a= (int) preg_replace("/[^0-9\.]/", '', $servicesId)[$i];
    
      DB::insert('insert into  produit_demande  (produit_id, demande_id) values (?, ?)', [$a,(int) $id]);

       }
     
       return redirect('/facture'.$id)->with('success','demande ajouter');

       



    }

    public function supprimer($id)
    {   demande::delete($id); 
        

        return redirect()->route('')->withStatus(__(''));
    }
   

    
    


       public function afficherDemandes_user(){
        $demandes=demande::where('user_id',Auth::user()->id)->get();
        return view('Technicien.MesDemandes',compact('demandes'));
        
   
       }
      
    
       public function addtech(Request $request)
    {
        $tech = $request->input('tech'); 
        demande::where('id',$request->input('id_demande') )
        ->update(array('technicien_id' => $tech));
        demande::where('id',$request->input('id_demande') )
        ->update(array('statue' => 'attendez le technicien'));
        return redirect('affectertech')->withStatus(__('success'));
    }

  
    public function liste_demande_sansTech()
       {
           $techniciens=User::where('role','technicien')->get();
           $demandes=demande::where('statue','en attente du technicien')->where('technicien_id',null)->get();
           return view('DemandeManagement.affecterTechnicien',compact('demandes','techniciens'));
       }
       public function Demandes_suggestion()
       {
          
           $demandes=demande::where('statue','attendez le technicien')->where('technicien_id',Auth::user()->id)->get();
           return view('DemandeManagement.accepterDemande',compact('demandes'));
       }
       public function accepterDemande(Request $request)
    {
        demande::where('id',$request->input('id_demande') )->update(array('statue' => "Demande accepter par"));
        return redirect('/techDem')->withStatus(__('Demandeaccepter'));
    }
    public function refusDemande(Request $request)
    {   demande::where('id',$request->input('id_de') )
        ->update(array('technicien_id' => null));
        demande::where('id',$request->input('id_de') )
        ->update(array('statue' => 'en attente du technicien'));
    
        return redirect('/techDem')->withStatus(__('Demandeaccepter'));
    }
    public function liste_demande_sans_user()
    {
       
        $demandes=demande::whereNull('user_id')->get();
        return view('DemandeManagement.SansUser',compact('demandes'));
    }
    public function liste_demande_avec_User()
    {
       
        $demandes=demande::whereNotNull('user_id')->get();
        return view('DemandeManagement.AvecUser',compact('demandes'));
    }
    public function Demandes_payer()
    {
       
        $demandes=demande::where('statue','Demande accepter par')->where('technicien_id',Auth::user()->id)->get();
        return view('DemandeManagement.paymentDemande',compact('demandes'));
    }
    public function Demandes_finished($id)
    {    
      
        demande::where('id',$id)->update(array('statue'=>'payer'));
               
        
        return redirect('/payed')->withStatus(__('Payer'));
    }
    public function Demandes_payed()
    {
       
        $demandes=demande::where('statue','payer')->where('technicien_id',Auth::user()->id)->get();
        return view('DemandeManagement.payed',compact('demandes'));
    }
    public function mesDemandes_payed()
    {
       
        $demandes=demande::where('statue','payer')->where('user_id',Auth::user()->id)->get();
        return view('DemandeManagement.mesDemandePasser',compact('demandes'));
    }
    public function mesDemandes()
    {
       
        $demandes=demande::where('user_id',Auth::user()->id)->get();
        return view('DemandeManagement.mesdemande',compact('demandes'));
    }
    public function mesDemandestech()
    {
       
        $demandes=demande::where('technicien_id',Auth::user()->id)->get();
        return view('DemandeManagement.mesdemande',compact('demandes'));
    }


}
