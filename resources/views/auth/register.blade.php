<div class="container" style="height: auto;">
    <div class="row align-items-center">
        <div class="col-lg-auto col-md-6 col-sm-8 ml-auto mr-auto">
            <div class="panel panel-default">
                

                    <div class="panel-body">
                    <button type="submit"  class="btn btn-primary d-flex align-items-center justify-content-center" data-toggle="modal"  data-backdrop="static" data-keyboard="false" data-target="#registerForm">Register</button>

                <!-- Modal -->
<div class="modal fade" id="registerForm" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-lg" style="hieght:0px;width:0px;">
    <div class="modal-content">
    	 <div class="modal-body ">
        
            <div class="loginBox_register align-items-center mb-5">
     	
         <h3  class="align-items-center">Créer un compte</h3>
         
     	<form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
     		<div class="inputBox_register form-group{{ $errors->has('name') ? ' has-error' : '' }}">
             <label for="name" class="col-md-4 control-label"></label>
                    <input id="name" type="name" class="inputBox_register" name="name" placeholder="name" value="{{ old('name') }}" required autofocus>
                    <span>
                    <i class="fa fa-user" aria-hidden="true"></i>
                    @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                </span>
                </div>
                    <div class="inputBox_register form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="col-md-4 control-label"></label>
     			<input id="email" type="email" class="inputBox_register" name="email" placeholder="email" value="{{ old('email') }}" required>
                 <span><i class="fas fa-envelope" aria-hidden="true"></i>
                 @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
            </span>
     		</div>
     		<div class="inputBox_register form-group{{ $errors->has('password') ? ' has-error' : '' }}">
             <label for="password" class="col-md-4 control-label"></label>
     			<input id="password" type="password" class="inputBox_register" name="password" placeholder="password"  required>
                 <span><i class="fa fa-lock" aria-hidden="true"></i>
                 @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

            </span></div>
                    <div class="inputBox_register form-group">
                    <label for="password-confirm" class="col-md-4 control-label"></label>
                    <input id="password_confirm" type="password" class="inputBox_register" name="password_confirmation" placeholder="Confirm password" required>
                    <span><i class="fa fa-lock" aria-hidden="true"></i></span>
     		</div>
             
            
                            
                                <input type="submit" name="register" class="inputBox_register btn btn-info" value="register">
    

                         
         </form>
         <div class="modal-footer" id="modal_footer">
                    <!--<input id="btnSubmit" name="btnSubmit" value="Donate" class="btn btn-default-border-blk" type="submit">-->
                    <!-- <button type="button" class="btn btn-primary mt-10" data-dismiss="modal" > Close </input>  -->
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">Fermer X<span aria-hidden="true" class="ion-android-close"></span> </button>
     	
     	
     </div>
        </div>

    </div>
</div>
                </div>
            </div>
        </div>
    </div>
</div>
