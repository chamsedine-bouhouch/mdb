@extends('Template.welcome',['titre'=>'Step 1'])
@section('contenu')
<table class="table">
   
    <tbody>
      @foreach($demandes as $de)
        <tr>
            <td>
                {{ $de->localisation }}
              </td>
              <td>
                {{$de->date_intervention}}{{ $de->horaire }}
              </td>
              <td>
                {{ $de->phone}}
              </td>
         
             <td>
    
             <form method="post" action="{{url('/payer'.$de->id)}}" enctype="multipart/form-data">
          {{ csrf_field() }}
                       
               

      <input type="submit" name="upload" class="btn btn-warning" value="payer">
        
        </form>
        
      </td>
         
        </tr>
      @endforeach
    </tbody>
  </table>
@stop