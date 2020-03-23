@extends('Template.welcome',['titre'=>'factutre'])
@section('contenu')
   
    
    <div class="container my-5 py-3 z-depth-1 rounded">


        <!--Section: Content-->
        <section class="dark-grey-text">
      
          <!-- Shopping Cart table -->
          <div class="table-responsive">
      
            <table class="table product-table mb-0">
              <form  method="POST" action="{{url('addfacture'.$id) }}">
                @csrf
              <input type="text" hidden  value="{{$sum+$sum_produit}}" name="total">
              <input type="submit" value="comfirmer votre demande" class="success" >
            </form>
            <h3 class="success text-green">vous avez passez {{$facture->count()}} services{{$facture_produit->count()}} produits et votre demande sera à {{$sum+$sum_produit}} Dt</h1>
              <!-- Table head -->
             
              <!-- /.Table head -->
      
              <!-- Table body -->
              <tbody>
      
                <!-- First row -->
                @foreach ($facture as $service)
                
              <tr> </tr>
                <tr>
                
                          
                  <th scope="row">
                  <img src="img/{{$service->image}}" alt=""  height="60px" width="60px" class="img-fluid z-depth-0">
                  </th>
                  <td>
                     
                     
                    <h5 class="mt-3">
                      <strong></strong>
                    </h5>
                    <p class="text-muted">{{$service->titre}}</p>
                  </td>
               
                  <td></td>
                  <td>{{$service->prix}} dt</td>
                
                  <td>
                    <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top"
                      title="Remove item">X
                    </button>
                  </td>
                </tr>
                @endforeach
                @foreach ($facture_produit as $service)
                
                <tr> </tr>
                  <tr>
                  
                            
                    <th scope="row">
                    <img src="img/{{$service->image}}" alt=""  height="60px" width="60px" class="img-fluid z-depth-0">
                    </th>
                    <td>
                       
                       
                      <h5 class="mt-3">
                        <strong></strong>
                      </h5>
                      <p class="text-muted">{{$service->nom}}</p>
                    </td>
                 
                    <td></td>
                    <td>{{$service->prix}} dt</td>
                    <td>
                      <button type="button" class="btn btn-sm btn-warning" data-toggle="tooltip" data-placement="top"
                      title="Remove item">X
                    </button>
                        </td>
                  
                    
                  </tr>
                  @endforeach
                <!-- /.First row -->
      
                <!-- Second row -->
               
                <!-- /.Second row -->
      
                <!-- Third row -->
              
                <!-- Fourth row -->
      
              </tbody>
              <!-- /.Table body -->
      
            </table>
      
          </div>
          <!-- /.Shopping Cart table -->
      
        </section>
        <!--Section: Content-->
      
      
      </div>
 

  @endsection