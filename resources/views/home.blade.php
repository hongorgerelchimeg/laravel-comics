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
@endsection
