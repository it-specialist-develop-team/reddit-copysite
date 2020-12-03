@extends('layouts.base')
@php
$title="َSIGNUP Form";
@endphp
@section('header-links')
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
<form class="box" action="{{ route('register') }}" method="post">
  @csrf
  <div class="copy-reddit-title">
    <h1>copy-reddit</h1>
  </div>
  <div class="login-field">
    @error('name')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong><br>
    </span>
    @enderror
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
    <h1>SIGN UP</h1>
    <input type="text" name="name" maxlength="50" placeholder="User Name" class="form-control @error('name') is-invalid @enderror">
    <input type="email" name="email" maxlength="50" placeholder="Email Address" class="form-control @error('email') is-invalid @enderror">
    <input type="password" name="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror">
    <input type="password" name="password_confirmation" placeholder="Confirm Password" class="form-control">


    <input type="submit" name="" value="SIGN UP">
    <button type="button" class="mdl-button close" id="show-dialog">LOG IN</button>
  </div>
</form>
@endsection