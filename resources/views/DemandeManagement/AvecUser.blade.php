@extends('Template.welcome',['titre'=>'Step 1'])
@section('contenu')
<table class="table">
   
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
            {{ $de->statue }}
          </td>
        <td> 

        </tr>
      @endforeach
    </tbody>
  </table>
@stop