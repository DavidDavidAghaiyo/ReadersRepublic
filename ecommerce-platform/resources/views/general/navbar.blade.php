<!DOCTYPE html>
<html lang="en">
<head>
  <style>
    .logo {
      width: 150px;
    }
  </style>
  <link rel="stylesheet" href="{{asset('css/navbar.css')}}">
</head>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Your Website Name</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/') }}">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/multiple-products') }}">Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/about-us') }}">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/contact-us') }}">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/basket') }}">Basket</a>
      </li>

        @if (auth()->check() != null)
          <li class="nav-item">
            <a class="nav-link bg-secondary " href="">Hello {{ auth()->user()->firstname }}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/signout') }}">Sign Out</a>
          </li>
        @else
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/login') }}">Log In</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/signup') }}">Sign Up</a>
        </li>
        @endif
    </ul>
  </div>
</nav>
