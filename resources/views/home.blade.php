@extends('template.layout')
@section('title', 'Comics')
@section('content')
  <div class="jumbotron">
    <img src=" {{ asset('images/jumbotron.jpg') }}" alt="">
  </div>

  <?php
    $arrComics = config('comics');
  ?>

  <div class="current-series">
    @foreach ($arrComics as $comic)
        <div class="card">
            <a href="#!">
                <div class="img-holder">
                  <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
                </div>

                <h3>{{ $comic['series'] }}</h3>
            </a>
        </div>
    @endforeach
  </div>

  <div class="load-more-btn">
    <button>Load More</button>
  </div>
  <div class="container-sec2">
    <div class="section2">
      <div class="text-image-card">
        <img src="{{asset('images/buy-comics-digital-comics.png')}}" alt="">
        <span>digfital comics</span>
      </div>
      <div class="text-image-card">
        <img src="{{asset('images/buy-comics-merchandise.png')}}" alt="">
        <span>digfital comics</span>
      </div>
      <div class="text-image-card">
        <img src="{{asset('images/buy-comics-subscriptions.png')}}" alt="">
        <span>digfital comics</span>
      </div>
      <div class="text-image-card">
        <img src="{{asset('images/buy-comics-shop-locator.png')}}" alt="">
        <span>digfital comics</span>
      </div>
      <div class="text-image-card">
        <img src="{{asset('images/buy-dc-power-visa.svg')}}" alt="">
        <span>digfital comics</span>
      </div>
    </div>
  </div>

@endsection
