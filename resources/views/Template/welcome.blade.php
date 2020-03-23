<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
<title>DaryDar-{{$titre}}</title>
  
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css" href="{{asset('fonts/flaticon/font/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">

 
  <link href="http://netdna.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
  <style type="text/css">
    body{
      margin-top: 80px;
 
}

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
</head>
<body>
@auth
    @if (Auth::user()->role=='Admin')
    @include('Template.navadmin') 
    @elseif(Auth::user()->role=='simple User')
    @include('Template.navsimpleUser') 
    @elseif(Auth::user()->role=='technicien')
    @include('Template.navTechnicien') 
    @endif
@endauth
  @guest
  @include('Template.navbar') 
@endguest
  <!-- Start your project here--> 
       
  <!--Main layout-->
  <main>
<!-- Body-->
@if ($titre=='welcome')

@include('Template.login')
@include('Template.register')
<!--body-->
@include('Template.carousselle')
@include('Template.nosServices')
@include('Template.nosQuali')
@include('Template.workflow')
@include('Template.counter')

@include('Template.appelerMoi')
@include('Template.team')


@include('Template.avis')
@include('Template.clientFAQ')

   
@else
@include('Template.login')
@include('Template.register')
@yield('contenu')
@endif

  <!-- jQuery -->

  </main>
  <!-- End your project here-->
  @include('Template.Footer')  
  <script type="text/javascript" src="{{asset('asset/js/jquery.min.js')}}"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="{{asset('asset/js/popper.min.js')}}"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="{{asset('asset/js/bootstrap.min.js')}}"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="{{asset('asset/js/mdb.min.js')}}"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript">

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
<script src="http://netdna.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script type="text/javascript">
    
</script>

<script type="text/javascript">
$(document).ready(function(){

  var a="0";
  var t=0;

  $("#vider").click(function() {
        $("#table2").find('input[name="select"]').each(function() {
            if ($(this).is(":checked")) {
             
                $(this).parents("tr").remove();
            }
        });
        });



$("#table2").on('click','.ss',function(){
         // get the current row
         var currentRow=$(this).closest("tr"); 
         var id=currentRow.find("td:eq(1)").text(); 
         
         
         

        
         currentRow.remove();
         
         
         a=a.replace(id, 'monkey');


         $('#values').val(a);
    });

         $("#tab1").on('click','.nameCell',function(){
         // get the current row
         var currentRow=$(this).closest("tr"); 
         
         var col1=currentRow.find("td:eq(1)").text(); 
         var id=currentRow.find("td:eq(3)").text(); 
         t++
         var data=col1;
         var value="<tr class='alo'><td class='ss'>"+data+"</td><td class='ss' hidden>"+id+"</td><td hidden >"+t +"</td></tr>";
         
           currentRow.remove();
          $('#table2').append(value);
         a+=id;
         
          $('#values').val(a);
        
    });
   
   
      
        
    });

      
   
  

</script>

<script>
  $(document).ready(function(){
  
  fetch_customer_data();
  
  function fetch_customer_data(query = '')
  {
   $.ajax({
    url:"{{ route('live_search.search') }}",
    method:'GET',
    data:{query:query},
    dataType:'json',
    success:function(data)
    {
     $('#sear').html(data.table_data);
     
    }
   });
  }
  
  $(".type").click( function(){
   var query = $(this).val();
   fetch_customer_data(query);
  });
  
  });
</script>
</body>
</html>
