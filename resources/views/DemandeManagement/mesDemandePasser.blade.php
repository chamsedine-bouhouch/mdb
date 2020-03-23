@extends('Template.welcome',['titre'=>'Step 1'])
@section('contenu')
<table class="table">
   
    <tbody>
      @foreach($demandes as $de)
        <tr>
        <td>
            <a href="fact{{$de->id}}">  {{ $de->localisation }}</a>              </td>
              <td>
                {{$de->date_intervention}} à {{ $de->horaire }}
              </td>
              <td>
                {{ $de->phone}}
              </td>
          
        <td> 
            
     
         
        </tr>
      @endforeach
    </tbody>
  </table>
@stop