<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="{{asset('img/logo.png')}}" alt="logo" width="45" class="img-responsive">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"></button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Contact</a>
        </li>
        </ul>

          <ul class="navbar-nav ms-auto px-5">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle userbutton" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="far fa-user fa-lg"></i>
                </a>
              <ul class="dropdown-menu dropdown-menu-center text-center" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Nome User</a>
                <hr class="my-1">
                <a class="dropdown-item" href="#">Perfil</a>
                <a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt"></i> Logout</a>
              </ul>
            </li>
          </ul>


      
    </div>
</nav>