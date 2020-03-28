@extends('Template.welcome',['titre'=>'Liste Services'])
@section('contenu')
<div class="row ">
<div class="col-md-3 ">  

  <div class="container  py-5 z-depth-1">


    <!--Section: Content-->
    <section class=" d-flex">

      

      <style>
        .link-black a {
          color: black;
        }

        .link-black a:hover {
          color: #0056b3;
        }

        .link-black .active {
          color: #0056b3;
        }

        .divider-small {
          width: 30px;
          background-color: rgba(0, 0, 0, .1);
          height: 3px;
        }
      </style>


      <!--Grid row-->
      <div class="row d-flex ">
        <h3 class="ml-3 mb-5 font-weight-bold"> Filtre de recherche </h3>

        <!--Grid column-->
        <div class="col-lg-3 col-md-5 col-sm-12 ml-5">

          <!-- Filter panel -->
          <div class="mb-5">
            <h5 class="font-weight-bold mb-3">Type</h5>

            <div class="divider-small mb-3"></div>

            <div class="form-check pl-0 mb-2">
              <input type="radio" class="form-check-input type" value="" id="materialGroupExample1" name="groupOfMaterialRadios">
              <label class="form-check-label" for="materialGroupExample1" checked>All</label>
            </div>

            <div class="form-check pl-0 mb-2">
              <input type="radio" class="form-check-input type" id="materialGroupExample2" name="groupOfMaterialRadios" value="depanage" 
                >
              <label class="form-check-label" for="materialGroupExample2">Dépannage</label>
            </div>

            <div class="form-check pl-0 mb-2">
              <input type="radio" class="form-check-input type" value="instalation" id="materialGroupExample3" name="groupOfMaterialRadios">
              <label class="form-check-label" for="materialGroupExample3">Installation</label>
            </div>

           
           
            
              
        
          </div>
          <!-- Filter panel -->

          <!-- Filter panel -->
          <div class="mb-5">

            <h5 class="font-weight-bold mb-3">Catégorie </h5>

            <div class="divider-small mb-3"></div>

            <div class="form-check pl-0 mb-2">
              <input type="radio" class="form-check-input type" value="" id="materialGroupExample1" name="groupOfMaterialRadios">
              <label class="form-check-label" for="materialGroupExample1" checked>All</label>
            </div>

            <div class="form-check pl-0 mb-2">
              <input type="radio" class="form-check-input type" id="materialGroupExample2" name="groupOfMaterialRadios"
                >
              <label class="form-check-label" for="materialGroupExample2">Électricité</label>
            </div>

            <div class="form-check pl-0 mb-2">
              <input type="radio" class="form-check-input type" value="plomberie" id="materialGroupExample3" name="groupOfMaterialRadios">
              <label class="form-check-label" for="materialGroupExample3">Plomberie</label>
            </div>

            <div class="form-check pl-0 mb-2">
              <input type="radio" class="form-check-input type" value="chauffage" id="materialGroupExample4" name="groupOfMaterialRadios">
              <label class="form-check-label" for="materialGroupExample4">Chauffage</label>
            </div>

            <div class="form-check pl-0 mb-2">
              <input type="radio" class="form-check-input type" value="climatisation" id="materialGroupExample5" name="groupOfMaterialRadios">
              <label class="form-check-label" for="materialGroupExample5">Climatisation</label>
            </div>

          </div>
          <!-- Filter panel -->

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->


    </section>
    <!--Section: Content-->


  </div>

<!--   <div style="border: solid  0.5px; border-color: grey " class="p-3" >
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
    </div> -->
    
    </div>
<div class="col-md-6">
 <div class="row mb-5">

  <div class="card-deck" id="sear">


   
  </div>
  <div class="container ">
<nav aria-label="Page navigation example">
  <ul class="pagination pagination-circle pg-blue justify-content-center">
    <li class="page-item disabled"><a class="page-link">First</a></li>
    <li class="page-item disabled">
      <a class="page-link" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
    <li class="page-item active"><a class="page-link">1</a></li>
    <li class="page-item"><a class="page-link">2</a></li>
    <li class="page-item"><a class="page-link">3</a></li>
    <li class="page-item"><a class="page-link">4</a></li>
    <li class="page-item"><a class="page-link">5</a></li>
    <li class="page-item">
      <a class="page-link" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link">Last</a></li>
  </ul>
</nav>

    </div>


<script>
  $(document).ready(function(){
    $('.First').click(function(){
      $('.pagination').find('.page-item active').First().addClass('active');
      $('.pagination').find('.page-item active').Last().addClass('active');
         
    })
    $('.Last').click(function(){
      $('.pagination').find('.page-item active').Last().addClass('active');
      $('.pagination').find('.page-item active').First().addClass('active');
         
    })
  })
</script>
 
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