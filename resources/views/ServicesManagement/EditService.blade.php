@extends('Template.welcome',['titre'=>'ajouter Service'])
@section('contenu')
@foreach ($services as $services)
    

<div class="container">
    <h3 align="center">File Uploading in Laravel</h3>
    <br />
  
    <form method="post" action="{{url('/editService'.$id)}}" enctype="multipart/form-data">
     {{ csrf_field() }}
     <div class="form-group">
      <table class="table">
        <tr>
          <td width="40%" align="right"></td>
          <td width="30"><input type="text" required name="titre" value="{{$services->titre}}" placeholder="titre" class="form-control"></td>
          <td width="30%" align="left"></td>
         </tr>
         <tr>
          <td width="40%" align="right"></td>
          <td width="30"> 
              <select name="type" id="" class="browser-default custom-select">
            <option value="instalation">instalation</option>
            <option value="depanage">depanage</option>
        </select></td>
          <td width="30%" align="left"></td>
         </tr>
         <tr>
          <td width="40%" align="right"></td>
          <td width="30"> <select name="categorie" id="" class="browser-default custom-select">
            <option value="climatisation">climatisation</option>
            <option value="electrecite">electrecite</option>
            <option value="plomberie">plomberie</option>
        </select></td>
          <td width="30%" align="left"></td>
         </tr>
       
         <tr>
          <td width="40%" align="right"></td>
         <td width="30"><input type="number" required name="prix" placeholder="prix"  value="{{$services->prix}}" class="form-control"></td>
          <td width="30%" align="left"></td>
         </tr>
         
         

       
       <tr>
        <td width="40%" align="right">
       <input type="submit" name="upload" class="btn btn-primary" value="Upload">
        </td>
       </tr>
       
      </table>
     </div>
    </form>
    <br />
   </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@stop