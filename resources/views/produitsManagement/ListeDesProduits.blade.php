@extends('Template.welcome',['titre'=>'Liste Services'])
@section('contenu')

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="row">image</th>
      <th>titre</th>
      <th>type</th>
      <th>marque</th>
      <th>prix</th>
    </tr>
 
</thead>
<tbody>

 
 @forelse ($services as $service)
 <tr>
    <th scope="row"><img src="img/{{$service->image}}" alt="" height="50px" width="50px"></th>
 <td>{{$service->nom}}</td>
 <td>{{$service->type}}</td>
 <td>{{$service->marque}}</td>
 <td>{{$service->prix}} DT</td>
    <td><a href="/editProduits{{$service->id}}"><i class="fas fa-edit"></i></a> </td>
 
  </tr> 
 @empty
 <tr>
  <h1>pas de services</h1>
  </tr>
 @endforelse
  
  
</tbody>
</table>
@stop