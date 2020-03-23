@extends('Template.welcome',['titre'=>'User List'])
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
          
          
        </tr>
      </thead>
      <tbody>
          @forelse ($users as $user)
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
                    <input type="text" name="titrepage" hidden value="usersList">
                <input type="text" name="enb" value="{{$user->id}}" hidden >
                    <input type="submit" class="primary" >
                <i class="fas fa-ban"></i> bloquer
              
               
                </form>
                @else
                <form method="post" action="{{url('/debloc')}}" enctype="multipart/form-data">
           
               
                    {{ csrf_field() }}
                    <input type="text" name="titrepage" hidden value="usersList">
                <input type="text" name="enb" value="{{$user->id}}" hidden>
                    <input type="submit"  class="danger">
                    <i class="fas fa-check"></i> debloquer
              
               
                </form>
                @endif 
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