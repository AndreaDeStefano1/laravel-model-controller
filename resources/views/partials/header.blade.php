

<header class="pt-3">
    <h1 class="text-danger container">The Great Movie DB</h1>
    <ul class="nav nav-tabs container ">
        <li class="nav-item">
          <a class="nav-link fw-bold {{ Route::currentRouteName() === 'home' ? 'active text-danger' : 'text-reset' }}" aria-current="page" href="{{ route('home') }}">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bold {{ Route::currentRouteName() === 'movie' ? 'active text-danger' : 'text-reset' }}" href="{{ route('movie') }}">FILM</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bold {{ Route::currentRouteName() === 'about' ? 'active text-danger' : 'text-reset' }}" href="{{ route('about') }}">ABOUT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bold {{ Route::currentRouteName() === 'contact' ? 'active text-danger' : 'text-reset' }}" href="{{ route('contact') }}">CONTACTS</a>
        </li>

      </ul>
</header>
