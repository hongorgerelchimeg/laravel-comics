<header>
  <div class="logo-holder">
    <img src="{{ asset('images/dc-logo.png') }}" alt="Logo">
  </div>
  <nav>
    <ul>
      @php
        $arrMenu = config('menu');
      @endphp

      @foreach ($arrMenu as $menuItem)
        <li class="{{ in_array(Route::currentRouteName(), $menuItem['route']) ? 'active' : '' }}">
          <a href="{{ route($menuItem['route'][0]) }}">{{ $menuItem['name'] }}</a>
        </li>
      @endforeach

      <li>
        <a href="">characters</a>
      </li>
    </ul>
  </nav>

  <div class="search-bar">
    search
  </div>
</header>
