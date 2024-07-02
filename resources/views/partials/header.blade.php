<header>
    <div class="nav-bar">
        @if (Route::currentRouteName() !== 'home')
            <a href="{{ route('home') }}">HOME</a>
        @endif
        @if (Route::currentRouteName() !== 'movies')
            <a href="{{ route('movies') }}">MOVIES</a>
        @endif


    </div>
</header>
