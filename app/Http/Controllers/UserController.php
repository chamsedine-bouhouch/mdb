<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{   
      
   
    public function bloquer_user(Request $request){
      
       $titrepage=$request->input('titrepage');
        $id = $request->input('enb');
        $user=User::where('id',$id)->get();
        
            $user=User::where('id',$id)->update(array('enable' => false));
            return redirect('/'.$titrepage)->withStatus(__('bloquer'));
      
      

       } 
       public function debloquer_user(Request $request){
      
        $titrepage=$request->input('titrepage');
        $id = $request->input('enb');
        $user=User::where('id',$id)->get();
        
            $user=User::where('id',$id)->update(array('enable' => true));
            return redirect('/'.$titrepage)->withStatus(__('bloquer'));
      
      

       } 

    public function accepter_technicien(Request $request){
      
        $statue = $request->input('statue');
        $id = $request->input('enb');
        $user=User::where('id',$id)->get();
        
        $user=User::where('id',$id)->update(array('statue' => $statue));
        return redirect()->route('ListUsers')->withStatus(__('bloquer'));
   
   
       } 

    
    public function profile($id){
        $user=User::where('id',$id)->get();
        return view('UserManagement.profile',compact('user'));
        
   
       }

    public function liste_des_utilisateurs(){
        $users=User::where('role','simple User')->get();
        return view('UserManagement.UserList',compact('users'));
        
   
       }

    public function liste_des_technicien(){
        $techniciens=User::where('role','technicien')->get();
        return view('UserManagement.TechnicienList',compact('techniciens'));
        
   
       }

    public function editImage(Request $request)
    {
        $image = $request->file('image');
  
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
   
        $image->move(public_path('asset/img'), $new_name);
       
      
        $user=User::where('id',Auth::user()->id )->update(array('image' => $new_name));
   
    

        return redirect()->route('Homy')->withStatus(__('photo uploadet'));
    }


}
