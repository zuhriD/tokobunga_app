<div class="container">
    <div class="logo">
      <img src="{{ asset('assets/logo.png') }}" alt="Logo" height="150">
    </div>
    <ul class="nav nav-pills justify-content-center">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              My Profile
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">History</a></li>
            </ul>
          </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Our Brands</a>
      </li>
    </ul>
  </div>
  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
      <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
      <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
    </ol>

    <!-- Slides -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="image1.jpg" alt="Image 1">
      </div>
      <div class="carousel-item">
        <img src="image2.jpg" alt="Image 2">
      </div>
      <div class="carousel-item">
        <img src="image3.jpg" alt="Image 3">
      </div>
    </div>

    <!-- Controls -->
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </a>
  </div>