@extends('Template.welcome',['titre'=>'technicien List'])
@section('contenu')
    

<div class="table-responsive text-nowrap">

    <table class="table">
      <thead>
        <tr>
          <th scope="col">image</th>  
          <th scope="col">nom et prénom</th>
          <th scope="col">email</th>
          <th scope="col">phone</th>
          <th scope="col">solde</th>
          <th scope="col">revenue</th>
          <th scope="col">points</th>
          <th scope="col">enable</th>
          <th scope="col"> statue</th>
          
          
        </tr>
      </thead>
      <tbody>
          @forelse ($techniciens as $user)
          <tr>
         
            <td> <a href="profile{{$user->id}}">
                <img src="asset/img/{{$user->image}}" class="rounded-circle z-depth-0"
                alt="avatar image" height="50" width="50">
            </a>
            </td>
            <td>{{$user->nom}} {{$user->prenom}}</td>
            <td>{{$user->email}}</td>
            <td> +216{{$user->phone}}</td>
            <td>{{$user->solde}} DT</td>
            <td>{{$user->revenue}} DT</td>
            <td>{{$user->points}}</td>
        
            <td>@if ($user->enable==true)
                <form method="post" action="{{url('/bloc')}}" enctype="multipart/form-data">
           
               
                    {{ csrf_field() }}

                <input type="text" name="titrepage" hidden value="ListTech">
                <input type="text" name="enb" value="{{$user->id}}" hidden >
                    <input type="submit" class="primary" >
                <i class="fas fa-ban"></i> bloquer
              
               
                </form>
                @else
                <form method="post" action="{{url('/debloc')}}" enctype="multipart/form-data">
           
               
                    {{ csrf_field() }}
                    <input type="text" name="titrepage" hidden value="ListTech">
                <input type="text" name="enb" value="{{$user->id}}" hidden>
                    <input type="submit"  class="danger">
                    <i class="fas fa-check"></i> debloquer
              
               
                </form>
                @endif 
              </td>
              <td>
                  {{$user->statue}}
                <form method="post" action="{{url('/statue')}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="text" name="enb" value="{{$user->id}}" hidden>
                  <select class="custom-select custom-select-sm" name="statue" >
                <option value="en attente">mettre en attente</option>
                <option value="active">activer</option>
       
              </select>
              <br>
              <input type="submit"  class="danger">
                </form>
            </td>
            
            
            
           
          </tr>
          @empty
          <tr>
          
            <td>Pas d utilisateur !!!</td>
        
           
          </tr>
              
          @endforelse
        
       
      </tbody>
    </table>
  
  </div>
  @endsection