@extends('Template.welcome',['titre'=>'Step 1'])
@section('contenu')
<table class="table">
   <thead>
     <td>nom</td>
     <td>adresse</td>
     <td>type</td>
     <td>statue</td>
   </thead>
    <tbody>
      @foreach($demandes as $de)
        <tr>
          <td>
            {{ $de->nomprenom }}
          </td>
          <td>
            {{ $de->adresse }}
          </td>
          <td>
            {{ $de->type}}
          </td>
          <td>
            {{ $de->statue }}
          </td>
        <td> 
             <form method="post" action="{{url('/techaded')}}" enctype="multipart/form-data">
          {{ csrf_field() }}
        
                      <label >Choose a technicien:</label>
                  
                      <select id="tech" name="tech">
                        @foreach ($techniciens as $tech)
                      <option value="{{$tech->id}}">{{$tech->nom}} {{$tech->prenom}}</option>
                      @endforeach
                      </select>  
                       
                <input type="text"  name="id_demande"  hidden value= "{{$de->id}}">

      <input type="submit" name="upload" class="btn btn-primary" value="Upload">
        
        </form>
        
      </td>
         
        </tr>
      @endforeach
    </tbody>
  </table>
@stop