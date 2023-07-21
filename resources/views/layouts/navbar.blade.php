<div class="container-na position-fixed fixed-top mb-5">
    <div class="logo">
        <img src="{{ asset('assets/logo.png') }}" alt="Logo" height="150">
    </div>
    <ul class="nav nav-pills justify-content-center">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle  {{ request()->is('profile') ? 'active' :  '' }}" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                My Profile
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="{{ route('profile') }}"><i class="fas fa-user"></i> Profile</a></li>
                <li><a class="dropdown-item" href="{{ route('history') }}"><i class="fas fa-history"></i> History</a>
                </li>
                <li><a class="dropdown-item" href="{{ route('auths.logout') }}"><i class="fas fa-sign-out-alt"></i>
                        Logout</a></li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" aria-current="page"
                href="{{ route('homeUser') }}">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->is('aboutUs') ? 'active' : '' }}" href="{{ route('aboutUs') }}">About
                Us</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->is('ourBrand') ? 'active' : '' }}" href="{{ route('ourbrand') }}">Our
                Brand</a>
        </li>
    </ul>
</div>
