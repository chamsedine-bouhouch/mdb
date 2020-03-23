@extends('Template.welcome',['titre'=>'profile'])
@section('contenu')
@foreach ($user as $user)
<div class="container">
<div class="row flex-lg-nowrap">
  <div class="col-12 col-lg-auto mb-3" style="width: 200px;">
    <div class="card p-3">
      <div class="e-navlist e-navlist--active-bg">
        <ul class="nav">
        <li class="nav-item"><a class="nav-link px-2" href="#"><i class="far fa-money-bill-alt mr-1"></i><span> solde : {{$user->solde}} Dt</span></a></li>
        <li class="nav-item"><a class="nav-link px-2" href="#"><i class="far fa-money-bill-alt mr-1"></i><span> revenue:{{$user->revenue}} Dt</span></a></li>
        <li class="nav-item"><a class="nav-link px-2" href="#"><i class="fas fa-hand-holding-heart mr-1"></i><span> points:{{$user->points}}</span></a></li>
        <li class="nav-item"><a class="nav-link px-2" href="#"><span> rating: {{$user->points}}</span> <i class="fas fa-star mr-1"></i></a></li>
      
    </ul>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="row">
      <div class="col mb-3">
        <div class="card">
          <div class="card-body">
            <div class="e-profile">
              <div class="row">
                <div class="col-12 col-sm-auto mb-3">
                  <div class="mx-auto" style="width: 140px;">
                    <div class="d-flex justify-content-center align-items-center rounded" style="height: 140px; background-color: rgb(233, 236, 239);">
                    
                    <img src="asset/img/{{Auth::user()->image}}" alt="" style="height: 140px;width: 140px;">
                       
                     
                    </div>
                    <form method="post" action="{{url('/profiles')}}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                      
                            <input type="file" name="image" />
                            <input type="submit" name="upload" class="btn btn-primary" value="Upload">
                           </tr>
                    </form>
                  </div>
                </div>
                <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                  <div class="text-center text-sm-left mb-2 mb-sm-0">
                    
                      <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap">{{$user->nom}} {{$user->prenom}}</h4>
                
                
                    <p class="mb-0">{{$user->email}}</p>
                   
                    <div class="text-muted"><small>Last seen 2 hours ago</small></div>
                    <div class="mt-2">
                       
                      
                    </div>
                  </div>
                  <div class="text-center text-sm-right">
                    <span class="badge badge-secondary">{{$user->role}}</span>
                    <div class="text-muted"><small>{{$user->created_at}}</small></div>
                  </div>
                </div>
              </div>
              <ul class="nav nav-tabs">
                <li class="nav-item"><a href="" class="active nav-link">Settings</a></li>
              </ul>
              <div class="tab-content pt-3">
                <div class="tab-pane active">
                  <form class="form" novalidate="">
                    <div class="row">
                      <div class="col">
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>Full Name</label>
                            <input class="form-control" type="text" name="name" placeholder="John Smith" value="{{$user->nom}}">
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group">
                              <label>Username</label>
                            <input class="form-control" type="text" name="username" placeholder="johnny.s" value="{{$user->prenom}}">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>Email</label>
                              <input class="form-control" type="text" placeholder="{{$user->email}}">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col mb-3">
                            <div class="form-group">
                              
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12 col-sm-6 mb-3">
                        <div class="mb-2"><b>Change Password</b></div>
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>Current Password</label>
                              <input class="form-control" type="password" placeholder="••••••">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>New Password</label>
                              <input class="form-control" type="password" placeholder="••••••">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>Confirm <span class="d-none d-xl-inline">Password</span></label>
                              <input class="form-control" type="password" placeholder="••••••"></div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-sm-5 offset-sm-1 mb-3">
                       
                        <div class="row">
                     
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col d-flex justify-content-end">
                        <button class="btn btn-primary" type="submit">Save Changes</button>
                      </div>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

     
  </div>
</div>
</div>
@endforeach
@endsection