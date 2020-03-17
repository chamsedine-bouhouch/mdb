<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design for Bootstrap</title>
  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="{{asset('asset/css/bootstrap.min.css')}}">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="{{asset('asset/css/mdb.min.css')}}">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="{{asset('asset/css/style.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('fonts/flaticon/font/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">

  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
   

</head>
<style type="text/css">

/* Reset Select */
select {
  -webkit-appearance: none;
  -moz-appearance: none;
  -ms-appearance: none;
  appearance: none;
  outline: 0;
  box-shadow: none;
  border: 0 !important;
  background: #2c3e50;
  background-image: none;
}
/* Remove IE arrow */
select::-ms-expand {
  display: none;
}
/* Custom Select */
.select {
  position: relative;
  display: flex;
  width: 20em;
  height: 3em;
  line-height: 3;
  background: #2c3e50;
  overflow: hidden;
  border-radius: .25em;
}
select {
  flex: 1;
  padding: 0 .5em;
  color: #fff;
  cursor: pointer;
}
/* Arrow */
.select::after {
  content: '\25BC';
  position: absolute;
  top: 0;
  right: 0;
  padding: 0 1em;
  background: #34495e;
  cursor: pointer;
  pointer-events: none;
  -webkit-transition: .25s all ease;
  -o-transition: .25s all ease;
  transition: .25s all ease;
}
/* Transition */
.select:hover::after {
  color: #white;
}
.id
{
  width: 25px;
}

</style>
<body>


  <!-- Start your project here-->  
  <nav class="navbar fixed-top .scrolling-navbar navbar-expand-lg navbar-dark  " style="background-color: #001730">
  <a class="navbar-brand" href="#"> <img src="{{asset('asset/img/logowhite.png')}}" height="30px" width="100px"> </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
          <a class="nav-link" href="#">Acceuil <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
   <a class="nav-link" href="#">Demandez Une Intervention</a>
     </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">Contact
          </a>
          <div class="dropdown-menu dropdown-info" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>

          
          <li class="nav-item">
         
        </li>
        </li>
      </ul>
<form class="form-inline">
        <div class="md-form my-0">
         <ul class="navbar-nav ml-auto nav-flex-icons">
      <li class="nav-item">
        <a class="nav-link"><i class="fab fa-twitter"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link"><i class="fab fa-google-plus-g"></i></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false"><i class="fas fa-user"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-unique" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item waves-effect waves-light" href="#"><i class="fas fa-sign-in-alt"></i> login</a>
          <a class="dropdown-item waves-effect waves-light" href="#"><i class="fas fa-user-plus"></i> sgin-up</a>
          
        </div>
      </li>
    </ul>
        </div>
      </form>
    </div>
  </nav>
          
  <!--Main layout-->
  <main>
<!-- Body-->
@include('carousselle')
<!--body-->



 <!-- SERVICE -->
      <div class="container my-5">

  <!-- Section -->
  <section>

    
    <h2 class="font-weight-bold mb-4 pb-2 text-center ">Nos Services</h2>
    <hr class="w-header my-4" style="background-color:  #fe4a49">
    <p class="lead text-center text-muted pt-2 mb-5">Nous avons choisi pour vous un paquet de services les plus demandés</p>

    <div class="row">

      <div class="col-md-6 col-xl-3 mb-4">
        <div class="card text-center " >
          <div class="card-body">
            <p class="mt-4 pt-2"><i class="flaticon-plug fa-4x grey-text"></i></p>
            <h5 class="font-weight-normal my-4 py-2"><a class="dark-grey-text " href="#">Électricité</a></h5>
            <p class="text-muted mb-4">Nos dépanneurs sont là pour vous offrir des prestations pour tous vos besoins en électricité.</p>
          </div>
        </div>
      </div> 
      <div class="col-md-6 col-xl-3 mb-4">
        <div class="card text-center lighten-1 text-white" style="background-color: #4ad7d1 ">
          <div class="card-body">
            <p class="mt-4 pt-2"><i class="flaticon-pipe fa-4x "></i></p>
            <h5 class="font-weight-normal my-4 py-2"><a class="text-white" href="#">Plomberie</a></h5>
            <p class=" mb-4">Nos dépanneurs sont à votre disposition pour toutes pannes et installations en plomberie.</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-xl-3 mb-4">
        <div class="card text-center" >
          <div class="card-body">
            <p class="mt-4 pt-2"><i class="flaticon-air-conditioner fa-4x grey-text"></i></p>
            <h5 class="font-weight-normal my-4 py-2"><a class="dark-grey-text" href="#">Climatisation</a></h5>
            <p class="text-muted mb-4">Nos dépanneurs sont là pour entretenir votre climatiseur ou mettre en place une nouvelle installation.</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-xl-3">
        <div class="card text-center lighten-1 text-white" style="background-color: #fe4a49 ">
          <div class="card-body">
            <p class="mt-4 pt-2"><i class="flaticon-heater fa-4x"></i></p>
            <h5 class="font-weight-normal my-4 py-2"><a class="text-white " href="#">Chauffage</a></h5>
            <p class=" mb-4">Nos dépanneurs sont à votre disposition pour entretenir votre chaudière ou  installer une nouvelle.</p>
          </div>
        </div>
      </div> 

    </div>

  </section>
  <!-- Section -->

</div>


<!-- nos qualités -->
<div class="container my-5 p-5 z-depth-1">


  <!--Section: Content-->
  <section class="text-center dark-grey-text">


    <!-- Section heading -->
    <h2 class="font-weight-bold mb-4 pb-2"> Qualité de service</h2>
    <hr class="w-header my-4" style="background-color:  #fe4a49">
    <!-- Section description -->
    <p class="lead text-center text-muted pt-2 mb-5">La qualité de service est notre priorité</p>

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-3   mb-4">

        <!-- <i class="fas fa-chart-area fa-3x red-text"></i> -->
        <img src="img/icon/002-award.png" alt="">
        <h5 class="font-weight-bold my-4">Service de qualité</h5>
        <p class="grey-text mb-md-0">Nos techniciens sont sélectionnés et testés par DaryDar pour vous offrir la meilleure prestation.
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3   mb-4">

        <!-- <i class="fas fa-book fa-3x cyan-text"></i> -->
        <img src="img/icon/005-shield.png" alt="">
        <h5 class="font-weight-bold my-4">Garantie assuré</h5>
        <p class="grey-text mb-md-0">Darydar vous offre une garantie sur les interventions et un service de suivi à la hauteur de vos attentes.
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 mb-4">

        <!-- <i class="far fa-comments fa-3x orange-text"></i> -->
        <img src="img/icon/001-stopwatch.png" alt="">
        <h5 class="font-weight-bold my-4">Disponible 7/7 </h5>
        <p class="grey-text mb-0">Notre réseau de techniciens compétents est dispatché sur le grand Tunis. Ils sont disponibles même pendant des heures tardives.
        </p>

      </div>
      <!-- Grid column -->

        <!-- Grid column -->
      <div class="col-md-3 mb-4">

        <!-- <i class="far fa-comments fa-3x orange-text"></i> -->
        <img src="img/icon/004-save-money.png" alt="">
        <h5 class="font-weight-bold my-4">Transparence de prix</h5>
        <p class="grey-text mb-0">Plus de surprises sur les prix avec DaryDar ! Nous vous proposons une grille tarifaire selon votre besoin en réparation/installation.
        </p>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </section>
  <!--Section: Content-->


</div>



<!-- Comment passer une demande -->
<div class="container my-5 p-5 z-depth-1">
    <!-- Section -->
    <section class="py-5">
  
      <h2 class="font-weight-bold mb-4 pb-2 text-center ">Comment passer une demande</h2>
    <hr class="w-header my-4" style="background-color:  #fe4a49">

     <p class="lead text-center text-muted pt-2 mb-5"> Les étapes à suivre.</p>


        <div class="demo">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="servicebox">
              <div class="service-icon">
                <i class="fab fa-sistrix"></i>
              </div>
              <h3 class="title">CHOISIR UN SERVICE</h3>
              <p class="description">Identifiez votre besoin parmi les services proposés par DaryDar.</p>

            </div>
          </div>
          <div class="col-md-3">
            <div class="servicebox">
              <div class="service-icon">
              
               <i class=" far fa-file-alt"></i>
              
              </div>
              <h3 class="title">PASSER UNE DEMANDE</h3>
              <p class="description">Communiquez nous les détails relatives au probléme et l'horaire de l'intervention souhaitée.</p>
              
            </div>
          </div>
          <div class="col-md-3">
            <div class="servicebox">
              <div class="service-icon">
                <i class="fas fa-check-square"></i>
              </div>
              <h3 class="title">AFFECTATION TECHNIQUE</h3>
              <p class="description">l'équipe Darydar vous envoie le technicien disponible et le plus proche à votre résidence.</p>
              
            </div>
          </div>
          <div class="col-md-3">
            <div class="servicebox">
              <div class="service-icon">
                <i class="fas fa-wrench"></i>
              </div>
              <h3 class="title">DÈPLACEMENT&DIAGNOSTIQUE</h3>
              <p class="description">le technicien affecté vous fera un diagnostique pour fixer la panne.
              </p>
              
            </div>
          </div>
        </div>
     </div>


           
        </div>
     
      </section>
      </div>  

      <!-- Demande d'etre appeler -->
      <div class="container my-5 pb-5 pt-5 z-depth-1">

      <h2 class="font-weight-bold mb-4 pb-2 text-center ">Contact par téléphone</h2>
    <hr class="w-header my-4" style="background-color:  #fe4a49">

     <p class="lead text-center text-muted pt-2 mb-5"> Vous avez un besoin urgent ?</p>  

 

    <section class="ftco-intro rounded" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
     <div class=""></div>
     <div class="container">
      <div class="row d-flex justify-content-center ">
       <div class="col-10  d-flex text-center" >
        <h2 style="color:  #001730">Demandez d'être Appeler</h2>
        <!-- <p>DaryDar met à votre disposition des prosfessionels de qualité dans votre zone</p> -->
        </div>
        
  
    </div>
    <div class="row d-flex">
      <div class="col-md-1"></div>
      <div class="col-md-6 ml-3  d-flex text-center ">
        <!-- button material -->
        <div class="md-form input-group mb-3">
          <div class="input-group-prepend">
    <span class="input-group-text" id="addon-wrapping">+216</span>
  </div>
          <input type="text" class="form-control" placeholder="Votre numéro" aria-label=""
          aria-describedby="MaterialButton-addon2">
          <div class="input-group-append">
            <button class="btn btn-md btn-secondary m-0 px-3" type="button" id="MaterialButton-addon2">Appelez-moi</button>
          </div>
        </div>

    </div>
    


  </div>

 

</section>
</div>
    <!-- Section -->
  
  <!-- Team -->

  <div class="container my-5 p-5 z-depth-1">


<div class="container my-5">


  <!--Section: Content-->
  <section class="team-section text-center dark-grey-text">

   <h2 class="font-weight-bold mb-4 pb-2 text-center ">Notre équipe de professionnels
</h2>
    <hr class="w-header my-4" style="background-color:  #fe4a49">

     <p class="lead text-center text-muted pt-2 mb-5"> Une équipe jeune et passionnée avec des expert dans tous les domaines de dépannages.</p>  

    <!-- Grid row -->
        <div class="row">

      <!-- Grid column -->
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="avatar mx-auto">
          <img src="images/taha.jpg" style="width: 200px;" class="rounded-circle z-depth-1"
            alt="Taha">
        </div>
        <h5 class="font-weight-bold mt-4 mb-3">Taha Khaled</h5>
        <p class="text-uppercase blue-text"><strong>CEO</strong></p>
      <!--  <p class="grey-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
          adipisci sed quia non numquam modi tempora eius.</p>-->
        <ul class="list-unstyled mb-0 ">
          <!-- Facebook -->
          <a class="p-2 fa-lg fb-ic">
            <i class="fab fa-facebook-f fa-fw blue-text"></i>
          </a>
          <!-- Linkedin -->
          <a class="p-2 fa-lg tw-ic">
           <i class="fab fa-linkedin fa-fw blue-text"></i>
          </a>
          <!-- Instagram -->
          <a class="p-2 fa-lg ins-ic">
           <i class="fab fa-instagram fa-fw pink-text"></i>
          </a>
        </ul>
      </div>
      <!-- Grid column -->

     

      <!-- Grid column -->
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="avatar mx-auto">
          <img src="images/chams.jpg"  style="width: 200px;" class="rounded-circle z-depth-1"
            alt="Sample avatar">
        </div>
        <h5 class="font-weight-bold mt-4 mb-3">Chamseddine Bouhouch</h5>
        <p class="text-uppercase blue-text"><strong >COO</strong></p>
        <!--<p class="grey-text">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
          mollit anim est fugiat nulla id eu laborum.</p>-->
        <ul class="list-unstyled mb-0">
         <!-- Facebook -->
         <a class="p-2 fa-lg fb-ic">
            <i class="fab fa-facebook-f fa-fw blue-text"></i>
          </a>
          <!-- Twitter -->
          <a class="p-2 fa-lg tw-ic">
           <i class="fab fa-linkedin fa-fw blue-text"></i>
          </a>
          <!-- Instagram -->
          <a class="p-2 fa-lg ins-ic">
           <i class="fab fa-instagram fa-fw pink-text"></i>
          </a>
        </ul>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="avatar mx-auto">
          <img src="images/wiem.jpg" style="width: 200px;" class="rounded-circle z-depth-1"
            alt="Sample avatar">
        </div>
        <h5 class="font-weight-bold mt-4 mb-3">Wiem</h5>
        <p class="text-uppercase blue-text"><strong >CMO</strong></p>
        <!--<p class="grey-text">Perspiciatis repellendus ad odit consequuntur, eveniet earum nisi qui consectetur
          totam officia voluptates perferendis voluptatibus aut.</p>-->
        <ul class="list-unstyled mb-0">
         <!-- Facebook -->
           <a class="p-2 fa-lg fb-ic">
            <i class="fab fa-facebook-f fa-fw blue-text"></i>
          </a>
          <!-- Twitter -->
          <a class="p-2 fa-lg tw-ic">
           <i class="fab fa-linkedin fa-fw blue-text"></i>
          </a>
          <!-- Instagram -->
          <a class="p-2 fa-lg ins-ic">
           <i class="fab fa-instagram fa-fw pink-text"></i>
          </a>
        </ul>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->


  </section>
  <!--Section: Content-->


</div>


</div>

  



  <footer class="page-footer font-small mdb-color pt-4 unique-color-dark">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Footer links -->
    <div class="row text-center text-md-left mt-3 pb-3">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold"><a class="navbar-brand" href="#"> <img src="{{asset('asset/img/logowhite.png')}}" height="30px" width="100px"> </a></h6>
        <p>DaryDar centralise tous les techniciens dans le secteur du bâtiment pour vous servir sur grand Tunis .</p>
      </div>
      <!-- Grid column -->

      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Services</h6>
        <p>
          <a href="#!">Électricité</a>
        </p>
        <p>
          <a href="#!">Plomberie</a>
        </p>
        <p>
          <a href="#!">Climatisation</a>
        </p>
        <p>
          <a href="#!">Chauffage</a>
        </p>
      </div> 
      <!-- Grid column -->

      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Articles Recents</h6>
        <p>
          <a href="#!">Your Account</a>
        </p>
        <p>
          <a href="#!">Become an Affiliate</a>
        </p>
        <p>
          <a href="#!">Shipping Rates</a>
        </p>
        <p>
          <a href="#!">Help</a>
        </p>
      </div>

      <!-- Grid column -->
      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
        <p>
          <i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
        <p>
          <i class="fas fa-envelope mr-3"></i> contact.darydar@gmail.com</p>
        <p>
          <i class="fas fa-phone mr-3"></i>+216 52 369 586</p>
        <p>
          <i class="fas fa-print mr-3"></i>+216 52 369 586</p>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Footer links -->

    <hr>

    <!-- Grid row -->
    <div class="row d-flex align-items-center">

      <!-- Grid column -->
      <div class="col-md-7 col-lg-8">

        <!--Copyright-->
        <p class="text-center text-md-left">© 2020 Copyright:
          <a href="https://mdbootstrap.com/">
            <strong> MDBootstrap.com</strong>
          </a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-5 col-lg-4 ml-lg-0">

        <!-- Social buttons -->
        <div class="text-center text-md-right">
          <ul class="list-unstyled list-inline">
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fab fa-google-plus-g"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
        </div>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

</footer>
  </main>
  <!-- End your project here-->
  
  <!-- jQuery -->
  <script type="text/javascript" src="{{asset('asset/js/jquery.min.js')}}"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="{{asset('asset/js/popper.min.js')}}"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="{{asset('asset/js/bootstrap.min.js')}}"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="{{asset('asset/js/mdb.min.js')}}"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript">
  (function ($){
  $.fn.counter = function() {
    const $this = $(this),
    numberFrom = parseInt($this.attr('data-from')),
    numberTo = parseInt($this.attr('data-to')),
    delta = numberTo - numberFrom,
    deltaPositive = delta > 0 ? 1 : 0,
    time = parseInt($this.attr('data-time')),
    changeTime = 10;
    
    let currentNumber = numberFrom,
    value = delta*changeTime/time;
    var interval1;
    const changeNumber = () => {
      currentNumber += value;
      //checks if currentNumber reached numberTo
      (deltaPositive && currentNumber >= numberTo) || (!deltaPositive &&currentNumber<= numberTo) ? currentNumber=numberTo : currentNumber;
      this.text(parseInt(currentNumber));
      currentNumber == numberTo ? clearInterval(interval1) : currentNumber;  
    }

    interval1 = setInterval(changeNumber,changeTime);
  }
}(jQuery));

$(document).ready(function(){

  $('.count-up').counter();
  $('.count1').counter();
  $('.count2').counter();
  $('.count3').counter();
  
  new WOW().init();
  
  setTimeout(function () {
    $('.count5').counter();
  }, 3000);
});

 </script>
<script>
  $('.carousel').carousel({
    interval: 200,
  })
</script>

</body>
</html>
