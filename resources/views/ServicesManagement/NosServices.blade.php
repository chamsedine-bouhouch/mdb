@extends('Template.welcome',['titre'=>'Liste Services'])
@section('contenu')
<div class="row m-3">
<div class="col-md-3">  

  <div style="border: solid  0.5px; border-color: grey " class="p-3" >
    <h3 style="text-align: center;" class="mb-3">Categorie</h3>
<div class="row"><div class="col-lg-8">
<input  type="button" class="d-flex type" value="climatisation"  >
</div>
<div class="col-lg-4">({{count($services->where('Type','climatisation'))}})</div>
</div> 
<div class="row"><div class="col-lg-8">
  <input  type="button" class="d-flex type" value="chauffage"  >
  </div>
  <div class="col-lg-4">({{count($services->where('Type','chauffage'))}})</div>
  </div> 
  <div class="row"><div class="col-lg-8">
    <input  type="button" class="d-flex type" value="electrecite"  >
    </div>
    <div class="col-lg-4">({{count($services->where('Type','electrecite'))}})</div>
    </div> 
           
        
    </div>
    <br>

    <div style="border: solid  0.5px;border-color: grey " class="p-3"  >
        <h3 style="text-align: center;" class="mb-3">Type</h3>
        <div class="row"><div class="col-lg-8">
            <input  type="button" class="d-flex type" value="instalation"  >
           </div>
           <div class="col-lg-4">({{count($services->where('categorie','instalation'))}})</div>
        </div>
        <div class="row"><div class="col-lg-8">
            <input  type="button" class="d-flex type" value="depanage"  >
           </div>
           <div class="col-lg-4">({{count($services->where('categorie','depanage'))}})</div>
     <br><br>
        </div>  
    </div>
    
    </div>
<div class="col-md-6">
 <div class="row mb-5">

  <div class="card-deck" id="sear">


   
  </div>
 
 </div>

<!-- <div class="col-lg-1">  


    
</div> -->
</div>
</div>
@stop
<style>
  .type{
      outline:none ;
      background: transparent;     
         border :transparent 0;
       margin: auto;
     text-align: center;
      
  }
</style>