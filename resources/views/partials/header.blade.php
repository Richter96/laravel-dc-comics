<header id="app_header">
    <div class="container-md d-flex align-items-center justify-content-between">
        <div class="logo">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
        </div>
        <nav class="nav justify-content-center">
            <a class="nav-link {{ Route::currentRouteName() === 'home' ? 'active' : '' }}" href="{{ route('home') }}"
                aria-current="page">HOME</a>
            <a class="nav-link {{ Route::currentRouteName() === 'comic' ? 'active' : '' }} " href="{{ route('comic') }}"
                aria-current="page">COMICS</a>
            <a class="nav-link {{ Route::currentRouteName() === '#' ? 'active' : '' }}" href="#"
                aria-current="page">MOVIES</a>
            <a class="nav-link {{ Route::currentRouteName() === '#' ? 'active' : '' }}" href="#"
                aria-current="page">TV</a>
            <a class="nav-link {{ Route::currentRouteName() === '#' ? 'active' : '' }}" href="#"
                aria-current="page">GAMES</a>
            <a class="nav-link {{ Route::currentRouteName() === '#' ? 'active' : '' }}" href="#"
                aria-current="page">COLLECTIBLES</a>
            <a class="nav-link {{ Route::currentRouteName() === '#' ? 'active' : '' }}" href="#"
                aria-current="page">VIDEOS</a>
            <a class="nav-link {{ Route::currentRouteName() === '#' ? 'active' : '' }}" href="#"
                aria-current="page">FANS</a>
            <a class="nav-link {{ Route::currentRouteName() === '#' ? 'active' : '' }}" href="#"
                aria-current="page">NEWS</a>
            <a class="nav-link {{ Route::currentRouteName() === '#' ? 'active' : '' }}" href="#"
                aria-current="page">SHOP</a>
        </nav>
    </div>
</header>

<style>
    nav a {
        color: #0c7cec;
        text-decoration: none;
        padding: 0.5rem 1rem;
        border-bottom: 3px solid #0c7cec;
    }

    nav a:not(.active) {
        border-bottom: none;
        color: black;

    }
</style>
