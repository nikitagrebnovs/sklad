<div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px; height: 100vh; position: fixed">
    <a href="/auth" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        <span class="fs-4">Business</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="{{ route('home.show') }}" class="nav-link text-white {{ Route::currentRouteNamed('home.show') ? 'active' : '' }}" aria-current="page">
                <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
                Home
            </a>
        </li>
        <li>
            <a href="{{ route('dashboard.show') }}" class="nav-link text-white {{ Route::currentRouteNamed('dashboard.show') ? 'active' : '' }}">
                <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
                Dashboard
            </a>
        </li>
        <li>
            <a href="{{ route('objects.show') }}" class="nav-link text-white {{ Route::currentRouteNamed('objects.show') ? 'active' : '' }}">
                <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
                Objects
            </a>
        </li>
        <li>
            <a href="{{ route('comment.index') }}" class="nav-link text-white {{ Route::currentRouteNamed('comments.index') ? 'active' : '' }}">
                <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
                Comments
            </a>
        </li>
        <li>
            <a href="" class="nav-link text-white ">
                <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
                Customers
            </a>
        </li>
    </ul>
    <hr>
    <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://media.gettyimages.com/vectors/siberian-husky-face-alaskan-malamute-vector-illustrator-vector-id641970852?s=612x612" alt="" class="rounded-circle me-2" width="32" height="32">
            <strong>Nikita</strong>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
            <li><a class="dropdown-item" href="#">New project...</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="{{ route('profile.index') }}">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="{{ route('sign-out') }}">Sign out</a></li>
        </ul>
    </div>
</div>
