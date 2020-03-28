<?php

namespace App\Http\Controllers;

use App\service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class serviceController extends Controller
{
    public function create(Request  $request)
    {
     
        $service = new service();
        $service->titre = $request->input('titre');
        $service->categorie = $request->input('type');
        $service->type = $request->input('categorie');
        $service->prix = $request->input('prix');
        
    
         $image = $request->file('image');
    
         $new_name = rand() . '.' . $image->getClientOriginalExtension();
    
         $image->move(public_path('img'), $new_name);
        
       
       $service->image=$new_name;
    
      
       
        $service->save();
        
        return redirect()->route('addService')->with('success','service ajouter');
    }
    public function ajoutService()
    {
        return view('ServicesManagement.addServices');
    }

    public function ListeServices()
    {
        $services=service::get();
        return view('ServicesManagement.ListeDesServices',compact('services'));
    }
    public function editServices($id)
    {
        $services=service::where('id',$id)->get();
        return view('ServicesManagement.EditService',compact('services','id'));
    }
    // public function UpdateServices(Request $request,$id)
    // {
      
    //     $ser=service::where('id',$id)->update(
    //         array('titre' => $request->input('titre')),
    //         );
    //         $ser=service::where('id',$id)->update(
    //             array('Type' => $request->input('type')),
    //             );
    //             $ser=service::where('id',$id)->update(
    //                 array('categorie' => $request->input('categorie')),
    //                 );
    //                 $ser=service::where('id',$id)->update(
    //                     array('prix' => $request->input('prix')),
    //                     );
      
    //     return redirect('/ListeDesServices')->with('success','service ajouter');
    // }
   
    public function nosService()
    {
        $services=service::paginate(4);
        return view('ServicesManagement.NosServices',compact('services'));
    }
    function Search1(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $services = DB::table('services')
         ->where('categorie', 'like', '%'.$query.'%')
         ->orwhere('Type', 'like', '%'.$query.'%')
         
   
         ->orderBy('titre', 'desc')
         ->get();
         
      }
      else
      {
       $services = DB::table('services')
         ->orderBy('titre', 'desc')
         ->get();
      }
   
      $total_row = $services->count();
      if($total_row > 0)
      {
       foreach($services as $row)
       {
        $output .=   '<div class="col-sm-6 col-lg-4 text-center">
        <div class="card mb-4" style="height: 450px;width: 250px">
      
        <!--Card image-->
        <div class="view overlay">
        <img class="card-img-top" src="/img/'.$row->image.' " alt="Card image cap" style="height: 250px;width: 250px">
          <a href="/step1">
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>
    
        <!--Card content-->
        <div class="card-body">
    
          <!--Title-->
          <h4 class="card-title">'.$row->titre.'</h4>
          <!--Text-->
        <p class="card-text">'.$row->Type.'</p>
        <p class="card-text">'.$row->categorie.'</p>
        <h3 class="card-text">'.$row->prix.'</h3>
          <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
       
    
        </div>
    
      </div>
      </div>

     
       ' ;
 
       }



      }

      else
      {
       $output = '
       <ul>
        <li align="center" colspan="5"style="color:red;">Ces Services ne sont pas encore disponibles pour le moment </li>
       </ul>
       ';
      }
    

      $data = array(
       'table_data'  => $output,
    
      );


      echo json_encode($data);
     }


    }
}
