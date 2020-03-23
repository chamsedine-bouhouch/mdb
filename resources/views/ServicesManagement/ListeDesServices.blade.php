@extends('Template.welcome',['titre'=>'Liste Services'])
@section('contenu')

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="row">image</th>
      <th>titre</th>
      <th>type</th>
      <th>categorie</th>
      <th>prix</th>
    </tr>
 
</thead>
<tbody>

 
 @forelse ($services as $service)
 <tr>
    <th scope="row"><img src="img/{{$service->image}}" alt="" height="50px" width="50px"></th>
 <td>{{$service->titre}}</td>
 <td>{{$service->Type}}</td>
 <td>{{$service->categorie}}</td>
 <td>{{$service->prix}} DT</td>
    <td><a href="/editServices{{$service->id}}"><i class="fas fa-edit"></i></a> </td>
 
  </tr> 
 @empty
 <tr>
  <h1>pas de services</h1>
  </tr>
 @endforelse
  
  
</tbody>
</table>
@stop