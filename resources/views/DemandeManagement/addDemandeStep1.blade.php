@extends('Template.welcome',['titre'=>'Step 1'])
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
    <form method="post" action="{{url('/step1passed')}}" enctype="multipart/form-data">
     {{ csrf_field() }}
   
   
     <div class="form-group">
      <table class="table">
        
    @guest
    <tr>
        <td width="40%" align="right"></td>
        <td width="30"><input type="text" required hidden name="iduser" placeholder="titre" value="0" class="form-control"></td>
        <td width="30%" align="left"></td>
       </tr>

        <tr>
          <td width="40%" align="right"></td>
          <td width="30"><input type="text" required name="nomPrenom" placeholder="nom prenom" class="form-control"></td>
          <td width="30%" align="left"></td>
         </tr>
         <tr>
            <td width="40%" align="right"></td>
            <td width="30"><input type="text" required name="phone" placeholder="phone" class="form-control"></td>
            <td width="30%" align="left"></td>
           </tr>
           <tr>
            <td width="40%" align="right"></td>
            <td width="30"><input type="text" required name="localisation" placeholder="localisation" class="form-control"></td>
            <td width="30%" align="left"></td>
           </tr>
           <tr>
            <td width="40%" align="right"></td>
            <td width="30">
           <div class="md-form">
            <input type="date" name="date" id="inputMDEx" class="form-control">
            <label for="inputMDEx">Choose your date</label>
          </div>
        </td>
        <td width="30%" align="left"></td>
       </tr>
       <tr>
        <td width="40%" align="right"></td>
        <td width="30">
          <div class="md-form">
            <input type="time" name="horaire" id="inputMDEx1" class="form-control">
            <label for="inputMDEx1">Choose your time</label>
          </div>
        </td>
        <td width="30%" align="left"></td>
       </tr>
       <tr>
        <td width="40%" align="right"></td>
        <td width="30"> <select name="type" id="" class="browser-default custom-select">
          <option value="climatisation"> climatisation</option>
          <option value="electrecite">electrecite</option>
          <option value="plomberie">plomberie</option>
          <option value="chauffage">chauffage</option>
      </select></td>
        <td width="30%" align="left"></td>
       </tr>
     @else
     <tr>
        <td width="40%" align="right"></td>
     <td width="30"><input type="text" required hidden name="iduser" placeholder="titre" value="{{Auth::user()->id}}" class="form-control"></td>
        <td width="30%" align="left"></td>
       </tr>


     <tr>
        <td width="40%" align="right"></td>
        <td width="30"><input type="text" required name="localisation" placeholder="localisation" class="form-control"></td>
        <td width="30%" align="left"></td>
       </tr>
       <tr>
        <td width="40%" align="right"></td>
        <td width="30">
       <div class="md-form">
        <input type="date" name="date" id="inputMDEx" class="form-control">
        <label for="inputMDEx">Choose your date</label>
      </div>
    </td>
    <td width="30%" align="left"></td>
   </tr>
   <tr>
    <td width="40%" align="right"></td>
    <td width="30">
      <div class="md-form">
        <input type="time" name="horaire" id="inputMDEx1" class="form-control">
        <label for="inputMDEx1">Choose your time</label>
      </div>
    </td>
    <td width="30%" align="left"></td>
   </tr>
   <tr>
    <td width="40%" align="right"></td>
    <td width="30"> <select name="type" id="" class="browser-default custom-select">
      <option value="climatisation">climatisation</option>
      <option value="electrecite">electrecite</option>
      <option value="plomberie">plomberie</option>
  </select></td>
    <td width="30%" align="left"></td>
   </tr>
     @endguest
       <tr>
        <td width="40%" align="right">
       <input type="submit" name="Step 1" class="btn btn-primary" value="Upload">
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