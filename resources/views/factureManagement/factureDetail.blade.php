@extends('Template.welcome',['titre'=>'Step 1'])
@section('contenu')
    <div id="invoiceholder">

        <div id="headerimage"></div>
        <div id="invoice" class="effect2">
          
          <div id="invoice-top">
            <div class="info">
              <h2> {{Auth::user()->nom }}</h2>
              <p>  {{Auth::user()->email }}</br>
                {{Auth::user()->phone }}
              </p>
            </div>
            <div class="title">
            <h1>Facture #{{$id}}</h1>
              <p>Date: passer le {{  now()->toDateTimeString('Y-m-d') }}</br>
                vous avez passez {{$service->count()}} <br>
                 services {{$produit->count()}} produits
              </p>
            </div>
          </div>
      
          
          
          
          <div id="invoice-bot">
            
            <div id="table">
              <table>
                <tr class="tabletitle">
                  <td class="item"><h2>Article</h2></td>
                  
                  <td class="Rate"><h2>Prix</h2></td>
                
                </tr>
                <tr class="service">
                @forelse ($service as $facture)


    
                  <td class="tableitem"><p class="itemtext">{{$facture->titre}} </p></td>
                  <td class="tableitem"><p class="itemtext"></p></td>
                  <td class="tableitem"><p class="itemtext">{{$facture->prix}} DT</p></td>
                  <td class="tableitem"><p class="itemtext"></p></td>
                </tr>
                @empty
                
                  pas de services
               @endforelse
               @forelse ($produit as $facture)


    
               <td class="tableitem"><p class="itemtext">{{$facture->nom}} </p></td>
               <td class="tableitem"><p class="itemtext"></p></td>
               <td class="tableitem"><p class="itemtext">{{$facture->prix}} DT</p></td>
               <td class="tableitem"><p class="itemtext"></p></td>
             </tr>
             @empty
             
               pas de services
            @endforelse
              
                
                  
                <tr class="tabletitle">
                  <td></td>
                  <td></td>
                  <td class="Rate"><h2>Total</h2></td>
                  <td class="payment"><h2>{{$sum+$sum_produit}} Dt</h2></td>
                </tr>
                
              </table>
            </div> 
            
        
      
            
            <div id="legalcopy">
              <p class="legal"><strong>Merci de votre achat!</strong>  Merci d'avoir choisit PrivateHeberg, nous en remercions ! Si vous avez un problème avec votre commande nous sommes disponible par le support, par mail, par Teamspeak ou par téléphone.
              </p>
            </div>
            
          </div>
        </div>
      </div>
      @stop

      <style>
          @import url(https://fonts.googleapis.com/css?family=Roboto:100,300,400,900,700,500,300,100);
* {
  margin: 0;
  box-sizing: border-box;
}

body {
  background: #E0E0E0;
  font-family: 'Roboto', sans-serif;
  background-image: url('');
  background-repeat: repeat-y;
  background-size: 100%;
}

::selection {
  background: #f31544;
  color: #FFF;
}

::moz-selection {
  background: #f31544;
  color: #FFF;
}

h1 {
  font-size: 1.5em;
  color: #222;
}

h2 {
  font-size: .9em;
}

h3 {
  font-size: 1.2em;
  font-weight: 300;
  line-height: 2em;
}

p {
  font-size: .7em;
  color: #666;
  line-height: 1.2em;
}

#invoiceholder {
  width: 100%;
  hieght: 100%;
  padding-top: 50px;
}

#headerimage {
  z-index: -1;
  position: relative;
  top: -50px;
  height: 350px;
  background-image: url('https://i.imgur.com/D82J13F.jpg');
  -webkit-box-shadow: inset 0 2px 4px rgba(0, 0, 0, .15), inset 0 -2px 4px rgba(0, 0, 0, .15);
  -moz-box-shadow: inset 0 2px 4px rgba(0, 0, 0, .15), inset 0 -2px 4px rgba(0, 0, 0, .15);
  box-shadow: inset 0 2px 4px rgba(0, 0, 0, .15), inset 0 -2px 4px rgba(0, 0, 0, .15);
  overflow: hidden;
  background-attachment: fixed;
  background-size: cover
}

#invoice {
  position: relative;
  top: -290px;
  margin: 0 auto;
  width: 700px;
  background: #FFF;
}

[id*='invoice-'] {
  border-bottom: 1px solid #EEE;
  padding: 30px;
}

#invoice-top {
  min-height: 120px;
}

#invoice-mid {
  min-height: 120px;
}

#invoice-bot {
  min-height: 250px;
}

.logo {
  float: left;
  height: 60px;
  width: 60px;
  background: url(https://i.imgur.com/ZFrafHH.png) no-repeat;
  background-size: 60px 60px;
}

.clientlogo {
  float: left;
  height: 60px;
  width: 60px;
  background: url(https://i.imgur.com/6dktRSW.jpg) no-repeat;
  background-size: 60px 60px;
  border-radius: 50px;
}

.info {
  display: block;
  float: left;
  margin-left: 20px;
}

.title {
  float: right;
}

.title p {
  text-align: right;
}

#project {
  margin-left: 52%;
}

table {
  width: 100%;
  border-collapse: collapse;
}

td {
  padding: 5px 0 5px 15px;
  border: 1px solid #EEE
}

.tabletitle {
  padding: 5px;
  background: #EEE;
}

.service {
  border: 1px solid #EEE;
}

.item {
  width: 50%;
}

.itemtext {
  font-size: .9em;
}

#legalcopy {
  margin-top: 30px;
}

form {
  float: right;
  margin-top: 30px;
  text-align: right;
}

.effect2 {
  position: relative;
}

.effect2:before,
.effect2:after {
  z-index: -1;
  position: absolute;
  content: "";
  bottom: 15px;
  left: 10px;
  width: 50%;
  top: 80%;
  max-width: 300px;
  background: #777;
  -webkit-box-shadow: 0 15px 10px #777;
  -moz-box-shadow: 0 15px 10px #777;
  box-shadow: 0 15px 10px #777;
  -webkit-transform: rotate(-3deg);
  -moz-transform: rotate(-3deg);
  -o-transform: rotate(-3deg);
  -ms-transform: rotate(-3deg);
  transform: rotate(-3deg);
}

.effect2:after {
  -webkit-transform: rotate(3deg);
  -moz-transform: rotate(3deg);
  -o-transform: rotate(3deg);
  -ms-transform: rotate(3deg);
  transform: rotate(3deg);
  right: 10px;
  left: auto;
}

.legal {
  width: 70%;
}
      </style>