<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Home');
})->name('Homy');


Route::get('/simpleuserr', function () {
    return view('SimpleUser');
});
Route::get('/adminn', function () {
    return view('admin');
});


Route::get('/dump/{a}', function ($a) {
   $c= preg_replace("/[^0-9\.]/", '', $a);
    for($i=0;$i<strlen($c);$i++){
    echo $c[$i];
    echo "<br>";
    }
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//profile controller
Route::get('/profile{id}','UserController@profile');
Route::post('/profiles', 'UserController@editImage')->name('put');

//User Management

Route::get('/usersList', 'UserController@liste_des_utilisateurs')->name('ListUsers');
Route::post('/bloc', 'UserController@bloquer_user')->name('bloc');
Route::post('/debloc', 'UserController@debloquer_user')->name('debloc');
//technicien management
Route::get('/ListTech', 'UserController@liste_des_technicien')->name('ListUsers');
Route::post('/statue', 'UserController@accepter_technicien')->name('statue');

//service management
Route::get('/addServices','serviceController@ajoutService')->name('addService');
Route::post('/serviceadded','serviceController@create');
Route::get('/ListeDesServices','serviceController@ListeServices');
Route::post('/editService{id}','serviceController@UpdateServices');
Route::get('/editServices{id}','serviceController@editServices');
Route::get('/ff','serviceController@nosService');
Route::get('/ac', 'serviceController@Search1')->name('live_search.search');
//produit management
Route::get('/addProduit','produitController@ajoutProduit')->name('addProduit');
Route::post('/produitadded','produitController@ajouter_produit');
Route::get('/ListeDesProduits','produitController@ListeProduits');
Route::post('/editProduit{id}','produitController@UpdateProduits');
Route::get('/editProduits{id}','produitController@editProduits');


//Demande management
Route::get('/step1','DemandeController@ajoutDemandeSteep1')->name('addDemande');
Route::get('/stepa{id}','DemandeController@ajoutDemandeSteep2')->name('addDemande2');
Route::get('/trois{id}','DemandeController@ajoutDemandeSteep3')->name('addDemande3');
Route::post('/step1passed','DemandeController@step1');
Route::post('/step2passed/{id}','DemandeController@step2');
Route::post('/passed/{id}','DemandeController@step3');
Route::get('/affectertech','DemandeController@liste_demande_sansTech');
Route::post('/techaded','DemandeController@addtech');
Route::get('/techDem','DemandeController@Demandes_suggestion');
Route::post('/techaccept','DemandeController@accepterDemande');
Route::post('/techrefus','DemandeController@refusDemande');
Route::get('/sans','DemandeController@liste_demande_sans_user');
Route::get('/avec','DemandeController@liste_demande_avec_user');
Route::get('/payed','DemandeController@Demandes_payer');
Route::post('/payer{id}','DemandeController@Demandes_finished');
Route::get('/finish','DemandeController@Demandes_payed');
Route::get('/mesdemandepayer','DemandeController@mesDemandes_payed');
Route::get('/mesDemandes','DemandeController@mesDemandes');
Route::get('/mestech','DemandeController@mesDemandestech');
//facture management
Route::get('/facture{id}','factureController@detail_facture')->name('mafacture');
Route::post('/addfacture{id}','factureController@passerDemande');
Route::get('/fact{id}','factureController@detail');


