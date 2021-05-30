<!DOCTYPE html>
<html lang="es">
<head>
  @php
    session_start();
  @endphp
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/2817974b50.js" crossorigin="anonymous"></script>
    <script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"></script>
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <title>Fireroll-inicio</title>
  </head>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" >
  <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <body>
    <!-- Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid justify-content-between">
        <div class="d-flex">
          <!-- Logo -->
          <a class="navbar-brand me-2 mb-1 d-flex align-items-center" href="{{route('index')}}">
            <img src="{{asset('img/Fireroll.png')}}" height="60" width="60" alt="" loading="lazy" style="margin-top: 2px;" />
          </a>
        </div>
        <!-- Iconos centro -->
        <!-- Inicio -->
        <ul class="navbar-nav flex-row d-none d-md-flex">
          <li class="nav-item me-3 me-lg-1 active">
            <a class="nav-link" href="{{route('index')}}">
              <span><i class="fas fa-home fa-lg scale-up-center"></i></span>
            </a>
          </li>
          <!-- Partidas -->
          <li class="nav-item me-3 me-lg-1">
            <a class="nav-link" href="{{route('partidas')}}">
              <span><i class="fas fa-dice-d20 dado"></i></span>
            </a>
          </li>
          <!-- Tienda -->
          <li class="nav-item me-3 me-lg-1">
            <a class="nav-link" href="{{route('shop')}}">
              <span><i class="fas fa-shopping-bag fa-lg rotate-center tienda"></i></span>
            </a>
          </li>
        </ul>
        <ul class="navbar-nav flex-row">
          <li class="nav-item me-3 me-lg-1">
            @if (Route::has('login'))
                @auth
                @php
                  $us = session('user');
                @endphp
                    <a class="nav-link d-sm-flex align-items" href="{{route('perfil')}}">
                      <img src="{{$us->iconImage}}" class="rounded-circle" height="40" width="40" alt="" loading="lazy" style="align-self: center">
                      <span class="fw-bold px-2" style="align-self: center;font-size:1rem">{{$us->username}}</span>
                    </a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                    @endif
                @endif
                @endif
          </li>
        </ul>
      </div>
    </nav>