<nav class="navbar fixed-top navbar-expand-lg navbar-dark unique-color-dark">
    <a class="navbar-brand" href="/"> <img src="{{asset('asset/img/logowhite.png')}}" height="30px" width="100px"> </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
    
     
  
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="/">Accueil <span class="sr-only">(current)</span></a>
              </li>
              
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                  aria-expanded="false">Services Management
                </a>
                <div class="dropdown-menu dropdown-info" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="/addServices">Ajouter un Service</a>
                  <a class="dropdown-item" href="/ListeDesServices">Liste des Services</a>
                 
                </div>

              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                  aria-expanded="false">Produits Management
                </a>
                <div class="dropdown-menu dropdown-info" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="/addProduit">Ajouter un Produit</a>
                  <a class="dropdown-item" href="/ListeDesProduits">Liste des Produits</a>
                 
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                  aria-expanded="false">Demandes Management
                </a>
                <div class="dropdown-menu dropdown-info" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="/affectertech">Liste demandes sans technicien</a>
                 
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                  aria-expanded="false">User Management
                </a>
                <div class="dropdown-menu dropdown-info" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="/usersList">Liste des Utilisateurs</a>
                  <a class="dropdown-item" href="/ListTech">List des Techniciens</a>
                 
                </div>
              </li>
             
            </ul>
      
            <ul class="navbar-nav ml-auto">
              <li class="nav-item avatar">
              <a class="nav-link p-0" href="profile{{Auth::user()->id}}">
              <img src="asset/img/{{Auth::user()->image}}" class="rounded-circle z-depth-0"
                    alt="avatar image" height="35">
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-user"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-default"
                  aria-labelledby="navbarDropdownMenuLink-333">
              <a class="dropdown-item" href="profile{{Auth::user()->id}}">profile</a>
              <a class="dropdown-item" href="{{ route('logout') }}"
              onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
               {{ __('Déconnexion') }}
           </a>   
           <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form> 
                </div>
              </li>
              </ul>

                       
      </div>
    </nav>