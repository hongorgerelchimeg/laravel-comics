<header>
  <div class="wrapper">
    <div class="logo-holder">
      <img class="logo" src="{{ asset('images/dc-logo.png') }}" alt="Logo">
    </div>
    <ul>
      @php
        $arrMenu = config('menu');
      @endphp

      @foreach ($arrMenu as $menuItem)
        <li class="{{ in_array(Route::currentRouteName(), $menuItem['route']) ? 'active' : '' }}">
          <a href="{{ route($menuItem['route'][0]) }}">{{ $menuItem['name'] }}</a>
        </li>
      @endforeach
    </ul>


    <div class="search-bar">
      <form action="post">
        <input type="text" placeholder="Search" id="search">
        <button><img class="search-icon" src="{{ asset('images/magnifying-glass-solid.svg') }}" alt=""></button>
      </form>
    </div>
  </div>

</header>
