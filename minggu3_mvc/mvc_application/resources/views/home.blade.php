@extends('app')

@section('content')
    <div class="jumbotron jumbotron-fluid">
        <div clsas="container">
            <h1 class="display-4">Home Page</h1>
            <p class="lead"> This is the Home Page</p>
        </div>
        <p>Nama: {{ $nama}}</p>
        <p>Matkul</p>
        <ul>
            @foreach ($matkul as $m)
                <li>{{ $m }}</li>
            @endforeach
        </ul>
    </div>
@endsection
{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_','-', app()->getLocale())}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name')}}</title>
</head>
<body>
    <div class="jumbotan jumbotan-fluid">
        <div class="container">
            <h1 class="display-4">Halaman Home</h1>
            <p class="lead">Halaman ini merupakan halaman Home</p>
        </div>
    </div>
</body>
</html> --}}


{{-- <!DOCTYPE html>
<html>
<head>
  <title>Dashboard Template</title>
 <link rel="stylesheet" href="{{ url('/') }}/css/home.css" type="text/css"/>
</head>
<body>
  <div class="header">
  <p>Hello Admin</p>
    <h1>Dashboard</h1>
    
  </div>

  <div class="sidebar">
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">Profile</a></li>
      <li><a href="#">Settings</a></li>
      <li><a href="#">Logout</a></li>
    </ul>
  </div>

  <div class="main">
    <div class="card">
      <h2>Card 1</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in dolor in libero feugiat pulvinar.</p>
    </div>

    <div class="card">
      <h2>Card 2</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in dolor in libero feugiat pulvinar.</p>
    </div>

    <div class="card">
      <h2>Card 3</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in dolor in libero feugiat pulvinar.</p>
    </div>
  </div>
</body>
</html> --}}
