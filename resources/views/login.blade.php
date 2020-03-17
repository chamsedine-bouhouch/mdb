<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

    <div class="container" style="height: auto;">
    <div class="row align-items-center">
        <div class="col-lg-auto col-md-6 col-sm-8 ml-auto mr-auto">
            <div class="panel panel-default">
                <!-- <div class="panel-heading">Login</div> -->

                <div class="panel-body">
                <button type="submit"  class="btn btn-primary d-flex align-items-center justify-content-center" data-toggle="modal"  data-backdrop="static" data-keyboard="false" data-target="#loginForm"><span>Se connecter</span></button>

                <!-- Modal -->
<div class="modal fade" id="loginForm" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-lg" style="hieght:0px;width:0px;">
    <div class="modal-content">
        <!-- Modal Header -->
        
           
            
                 <!-- Modal Body -->
      <div class="modal-body align-items-center "> 
          
          <div  class="loginBox_login align-items-center">
            <h3 class="align-items-center" >Se connecter </h3>    
             <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
        <div class="inputBox_login">
          <input id="email" type="email" class="inputBox_login" placeholder="email" name="email" value="{{ old('email') }}" required autofocus>
          <span><i class="fas fa-envelope" aria-hidden="true"></i></span>
             </div>
             <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                          <!--  <label for="email" class="col-md-4 control-label">E-Mail Address</label> -->

                            <div class="col-md-6 inputBox_login">
                               
                                
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <div class="inputBox_login">
                 
                 <input id="password" type="password" class="inputBox_login" placeholder="password"  name="password" required>
                 <span><i class="fa fa-lock" aria-hidden="true"></i></span>
                 @if ($errors->has('password'))
                                    <span class="help-block inputBox_login">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
          
             </div>
             
             <input type="submit" class="btn btn-info" name="login" value="login">
             <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
             </div>
            
         </form>
         <div class="modal-footer" id="modal_footer">
                    <!--<input id="btnSubmit" name="btnSubmit" value="Donate" class="btn btn-default-border-blk" type="submit">-->
                    <!-- <button type="button" class="btn btn-primary mt-10" data-dismiss="modal" > Close </button>  -->
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
    </div>
</div>

</body>
</html>