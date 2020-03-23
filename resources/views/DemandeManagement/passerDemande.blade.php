@extends('Template.welcome',['titre'=>'step 2'])
@section('contenu')

@foreach ($a as $a)
<fieldset>
  <div class="container my-5 px-0 z-depth-1">


    
    <section class="text-center black-text  lighten-2 pt-5 px-lg-5">
    
    

      <form method="post" action="{{url('/step2passed/'.$a->id)}}" enctype="multipart/form-data">
        {{ csrf_field() }}
      
      <div class="row">
        <div class="col-lg-3 ">
           <div class="table-wrapper-scroll-y my-custom-scrollbar">
          <h3>Liste des service</h3>
          <table class="table table-bordered table-striped mb-0" id="tab1">
         
            <tbody>
           
             @forelse ($services as $service)
             <tr class="tedd " style="background-color: lightgoldenrodyellow">
             <td> <img src="{{ asset('img/' .$service->image)}}" height="30px" width="30px"> 
             </td>
              <td class="nameCell" >  {{$service->titre}}</td>
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
        <div class="col-lg-4">
         
      
        </div>
        <div class="col-lg-3">
         
            <div class="table-wrapper-scroll-y my-custom-scrollbar">
          <h3> panier<h3>
              <table class="table table-bordered table-striped mb-0" id="table2">
            
                <tbody>
                 
                </tbody>
              </table>
          
        </div>
        </div>
      </div>
      <input type="text" id="values" hidden name="servicesId">
      <input type="submit" class="btn btn-success" value="add">
      </form>
      
    
      
    </section>
    
  
  </div>


</fieldset>
@endforeach
<style>






.my-custom-scrollbar {
position: relative;
height: 300px;
width: 400px;
overflow: auto;
}
.table-wrapper-scroll-y {
display: block;
}

</style>

@stop