<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- Style --}}
    @include('layouts.style')
    <title>{{ config('app.name', 'Serene') }}</title>
</head>
<body>
  <div id="app">
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Start Bootstrap</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <main class="py-5">
    <div class="container mt-3">
      <div class="row">
        {{-- SideBar --}}
        <div class="col-md-3">
          <a href='#' class="navbar-brand"><h1 class="my-4">Shop Name</h1></a>
          <div class="list-group">
            @foreach ($categories as $category)
              <a href="#" class="list-group-item">{{$category->name}}</a>
            @endforeach
          </div>
        </div>
        {{-- Content --}}
        <div class="col-md-9">
          @yield('content')
        </div>
        <!--/.col-md-9 -->
      </div>
      <!--/.row -->
    </div>
    <!--/.container -->
  </main>
  </div>

  <!-- Footer -->
  <footer class="py-3 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
    </div>
    <!-- /.container -->
  </footer>
    {{-- Scripts --}}
    @include('layouts.script')
</body>
</html>
