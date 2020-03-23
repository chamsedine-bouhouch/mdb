@extends('Template.welcome',['titre'=>'Step 1'])
@section('contenu')
<table class="table">
   <thead>
     <tr>
       <td>nom</td>
       <td>adresse</td>
       <td>service</td>
       <td>Type</td>
     </tr>
   </thead>
    <tbody>
      @foreach($demandes as $de)
        <tr>
          <td>
            {{ $de->name }}
          </td>
          <td>
            {{ $de->adresse }}
          </td>
          <td>
            {{ $de->service}}
          </td>
          <td>
            {{ $de->type }}
          </td>
        <td> 
             <form method="post" action="{{url('/techaccept')}}" enctype="multipart/form-data">
          {{ csrf_field() }}
        
                      
            
                       
                <input type="text"  name="id_demande"  hidden value= "{{$de->id}}">

      <input type="submit" name="accepter" class="btn btn-primary" value="Upload">
        
        </form>
        
      </td>
      <td> 
        <form method="post" action="{{url('/techrefus')}}" enctype="multipart/form-data">
     {{ csrf_field() }}
   
                 
       
                  
           <input type="text"  name="id_de"  hidden value= "{{$de->id}}">

 <input type="submit"  class="btn btn-danger" value="refus">
   
   </form>
   
 </td>
         
        </tr>
      @endforeach
    </tbody>
  </table>
@stop