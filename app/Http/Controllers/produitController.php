<?php

namespace App\Http\Controllers;

use App\produit;
use Illuminate\Http\Request;

class produitController extends Controller
{
    public function ajouter_produit(Request $request)
    {
        $produit = new produit();
        $produit->nom=$request->input('nom');
        $produit->type=$request->input('type');
        $produit->marque=$request->input('marque');
        $produit->prix=$request->input('prix');
        $image = $request->file('image');
  
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
   
        $image->move(public_path('img'), $new_name);
        $produit->image=$new_name;
        $produit->save();
        return redirect()->route('addProduit')->with('success','produit ajouter avec succes');
    }

    public function ajoutProduit()
    {
        return view('produitsManagement.addproduit');
    }
    public function liste_produit()
    {
        $produits=produit::get();
        return view('',compact('produits'));
        
    }

    public function ListeProduits()
    {
        $services=produit::get();
        return view('ProduitsManagement.ListeDesProduits',compact('services'));
    }
    public function editProduits($id)
    {
        $services=produit::where('id',$id)->get();
        return view('ProduitsManagement.EditProduit',compact('services','id'));
    }
    // public function UpdateProduits(Request $request,$id)
    // {
      
    //     $ser=produit::where('id',$id)->update(
    //         array('nom' => $request->input('titre')),
    //         array('marque' => $request->input('marque')),
    //         );
    //         $ser=produit::where('id',$id)->update(
    //             array('Type' => $request->input('type')),
    //             );
             
    //                 $ser=produit::where('id',$id)->update(
    //                     array('prix' => $request->input('prix')),
    //                     );
      
    //     return redirect('/ListeDesProduits')->with('success','service ajouter');
    // }
   
}
