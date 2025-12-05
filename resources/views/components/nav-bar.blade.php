@php
    $currentRoute=Route::currentRouteName()
@endphp
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <ul>
        <div class="container-fluid">
            <div class="navbar-brand">
                <button class="navbar-toggler" type="button" data-bs-toggle="collaps" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="{{route('home')}}">Home</a></li>
                    <li class="nav-item"><a class="nav-link {{ $currentRoute=='categories' ? 'actice' : ''}}" href="{{ route('categories')}}">Categories</a></li>
                    <li class="nav-item"><a class="nav-link {{ $currentRoute=='projects' ? 'active' : ''}}" href="{{ route('projects')}}">Projects</a></li>
                    <li class="nav-item"><a class="nav-link {{ $currentRoute=='about_us' ? 'active' : '' }}" href="{{ route('about_us')}}">About Us</a></li>
                    <li class="nav-item"><a  class="nav-link {{ $currentRoute=='contact' ? 'active' : ''}}" href="{{ route('contact')}}">Contact Us</a></li>
                    <li class="nav-item"><a class="nav-link {{ $currentRoute=='projects' ? 'active':''}}" href="{{ route('projects')}}">Projects</a></li>

                </ul>
                <form class="d-flex">
                    <input type="search" class="form-control me-2" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>

    </ul>
</nav>
