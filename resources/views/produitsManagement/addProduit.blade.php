@extends('Template.welcome',['titre'=>'ajouter produit'])
@section('contenu')
<div class="container">
    <h3 align="center">File Uploading in Laravel</h3>
    <br />
    @if (count($errors) > 0)
     <div class="alert alert-danger">
      Upload Validation Error<br><br>
      <ul>
       @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
       @endforeach
      </ul>
     </div>
    @endif
    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
     <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
    </div>
    <img src="/images/{{ Session::get('path') }}" width="300" />
    @endif
    <form method="post" action="{{url('/produitadded')}}" enctype="multipart/form-data">
     {{ csrf_field() }}
     <div class="form-group">
      <table class="table">
        <tr>
          <td width="40%" align="right"></td>
          <td width="30"><input type="text" required name="nom" placeholder="titre" class="form-control"></td>
          <td width="30%" align="left"></td>
         </tr>
         <tr>
          <td width="40%" align="right"></td>
          <td width="30"> 
              <select name="type" id="" class="browser-default custom-select">
            <option value="instalation">instalation</option>
            <option value="depanage">depanage</option>
            <option value="climatisation">climatisation</option>
            <option value="electrecite">electrecite</option>
            <option value="plomberie">plomberie</option>
        </select></td>
          <td width="30%" align="left"></td>
         </tr>
         <tr>
            <td width="40%" align="right"></td>
            <td width="30"><input type="text" required name="marque" placeholder="prix" class="form-control"></td>
            <td width="30%" align="left"></td>
           </tr>
           
       
         <tr>
          <td width="40%" align="right"></td>
          <td width="30"><input type="number" required name="prix" placeholder="prix" class="form-control"></td>
          <td width="30%" align="left"></td>
         </tr>
         
         

        <tr>
        <td width="40%" align="right"><label>selectionner image</label></td>
        <td width="30">
            <div class="input-group">
                
                <div class="custom-file">
                  <input type="file"  name="image" class="custom-file-input" id="inputGroupFile01"
                    aria-describedby="inputGroupFileAddon01">
                  <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                </div>
              </div>
       
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
@stop