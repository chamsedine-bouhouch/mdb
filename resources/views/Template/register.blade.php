<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
  aria-hidden="true">

  <!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
  <div class="modal-dialog modal-dialog-centered" role="document">


    <div class="modal-content">
<!--       <div class="modal-header">
      
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> -->
      <div class="modal-body">
        
     
            <form class="text-center  p-5" method="POST" action="{{ route('register') }}">
                @csrf

            <p class="h4 mb-4">Créer un compte</p>
        
            <div class="form-row mb-4">
                <div class="col">
                    <!-- First name -->
                    <input id="name" type="text" placeholder="Nom" class="form-control{{ $errors->has('nom') ? ' is-invalid' : '' }}" name="nom" value="{{ old('nom') }}" required autofocus>

                    @if ($errors->has('nom'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('nom') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="col">
                    <!-- Last name -->
                    <input id="name" type="text" placeholder="Prénom" class="form-control{{ $errors->has('Prénom') ? ' is-invalid' : '' }}" name="prenom" value="{{ old('prenom') }}" required autofocus>

                    @if ($errors->has('prenom'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('prenom') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-row mb-4">
                <div class="col">
                    <select name="role" id="" class="browser-default custom-select custom-select">
                        <option value="simple User">Utilisateur</option>
                        <option value="technicien">technicien</option>
                      </select>
                </div>
                <div class="col">
                    <!-- Last name -->
                    <input id="name" type="text" placeholder="Téléphone" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" required autofocus>

                    @if ($errors->has('phone'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('phone') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
        
            <!-- E-mail -->
            <input id="email" type="email" placeholder="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
            <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
                
            </small>
            <!-- Password -->
            <input id="password" placeholder="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
            <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
                Au moins 8 caractères et un digit
            </small>
        
            <input id="password-confirm" placeholder="confirm pasword" type="password" class="form-control" name="password_confirmation" required>
        
            <!-- Newsletter -->
           
            <!-- Sign up button -->
            <button class="btn btn-info my-4 btn-block" type="submit">Inscription</button>
        
            <!-- Social register -->
            
            <hr>
        
            <!-- Terms of service -->
            <p>En cliquant
                <em>Inscription</em> tu acceptes
                <a href="" target="_blank">les conditions générales</a>
        
        </form>
<!-- Default form login -->
      </div>
      
    </div>
  </div>
</div>