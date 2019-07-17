<nav class="navbar navbar-expand-lg fixed-top"  >
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="#" rel="tooltip" title="{{env('APP_NAME')}}" data-placement="bottom" target="_blank">
          givu logo
        </a>
        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse" id="navigation">
      
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">News</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Partners</a>
            </li>
        </ul>
        <div class="justify-content-end">            
            <ul class="navbar-nav">                            
              <li class="nav-item">
              @guest
                  <button class="btn btn-light btn-round" data-toggle="modal" data-target="#modal-login">Log-in</button>
              @endguest
              @auth
                  <a class="btn btn-light btn-round" href="{{url('/logout')}}">Log-out</a>
              @endauth
              </li>
              <li class="nav-item">
                  <button class="btn btn-danger btn-round" data-toggle="modal" data-target="#modal-registration">Sign-up</button>
              </li>
            </ul>
        </div>
      
      </div>
    </div>
  </nav>