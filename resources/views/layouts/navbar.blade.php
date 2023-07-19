<div class="container-na position-fixed fixed-top mb-5">
    <div class="logo">
        <img src="{{ asset('assets/logo.png') }}" alt="Logo" height="150">
    </div>
    <ul class="nav nav-pills justify-content-center">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle active" href="{{ route('profile') }}" id="navbarDropdown" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                My Profile
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="{{ route('history') }}">History</a></li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('homeUser') }}">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('aboutUs') }}">About Us</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('ourbrand') }}">Our Brands</a>
        </li>
    </ul>
</div>
