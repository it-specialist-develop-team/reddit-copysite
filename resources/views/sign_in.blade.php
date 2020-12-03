@extends('layouts.base')
@php
$title="َLogin Form";
@endphp
@section('header-links')
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
<form class="box" action="{{ route('login') }}" method="post">
  @csrf
  <div class="copy-reddit-title">
    <h1>copy-reddit</h1>
  </div>
  <div class="login-field">
    @error('email')
    <span class="invalid-feedback" role="alert">
      <strong>{{ $message }}</strong><br>
    </span>
    @enderror

    @error('password')
    <span class="invalid-feedback" role="alert">
      <strong>{{ $message }}</strong><br>
    </span>
    @enderror
    <h1>Login</h1>

    <input type="email" name="email" maxlength="50" placeholder="email address" class="form-control @error('email') is-invalid @enderror">
    <input type="password" name="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror">
    <input type="submit" name="" value="Login">
    <button id="show-dialog" type="button" class="mdl-button">SIGN UP</button>


  </div>
</form>
@endsection