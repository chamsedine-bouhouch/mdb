@extends('Template.welcome',['titre'=>'step 3'])
@section('contenu')
@foreach ($a as $a)
    

<form method="post" action="{{url('/passed/'.$a->id)}}" enctype="multipart/form-data">
  {{ csrf_field() }}

<div class="row">
  <div class="col-lg-3 ">
     <div class="table-wrapper-scroll-y my-custom-scrollbar">
    
    <table class="table table-bordered table-striped mb-0" id="tab1">
    <thead>
     
      <tr><th></th>
        <th>titre</th>
        <th>prix</th></tr>
 
    </thead>
      <tbody>
     
       @forelse ($produits as $service)
       <tr class="tedd">
       <td> <img src="{{ asset('img/' .$service->image)}}" height="30px" width="30px"> 
       </td>
        <td class="nameCell" >  {{$service->nom}}</td>
        <td class="nameCell" >  {{$service->prix}} dt</td>
      <td hidden> {{$service->id}}</td>
       </tr>
       @empty
          <tr>pas de service</tr> 
       @endforelse
      
      </tbody>
    </table>
  </div>
  </div>
  <div class="col-lg-3">
   

  </div>
  <div class="col-lg-3">
   
      <div class="table-wrapper-scroll-y my-custom-scrollbar">
    
        <table class="table table-bordered table-striped mb-0" id="table2">
        <thead>
          <tr><th><p id="vider" >vider votre corbeille</a></th></tr>
        </thead>
          <tbody>
            <tr class='alo'>
              <td class='ss'><p class='zz'>ad</p></td></tr>
         
          </tbody>
        </table>
    
  </div>
  </div>
</div>
<input type="text" id="values" hidden name="servicesId">
<input type="submit" value="add">
</form>
@endforeach
<style>




.my-custom-scrollbar {
position: relative;
height: 300px;
width: 200px;
overflow: auto;
}
.table-wrapper-scroll-y {
display: block;
}

</style>

@stop