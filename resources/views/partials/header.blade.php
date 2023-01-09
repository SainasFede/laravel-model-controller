<div class="container">
    <div class="navbar">
        <ul class="d-flex">
            <li class="px-2 {{Route::currentRouteName() === 'home' ? 'active' : ''}}">
                <a href="{{ route('home') }}">Home</a>
            </li>
            <li class="px-2 {{Route::currentRouteName() === 'about' ? 'active' : ''}}">
                <a href="{{ route('about') }}">About</a>
            </li>
        </ul>
    </div>
</div>
