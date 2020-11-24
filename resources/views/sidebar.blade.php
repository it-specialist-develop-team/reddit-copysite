@extends('layouts.base')
@php
$title="view";
@endphp

@section('header-links')
<link rel="stylesheet" href="css/view.css">
@endsection



@section('content')

<div class="page-content">
  <!-- SUB HEADER// -->
  <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
    <!-- POSTBAR// -->
    <div class="mdl-tabs__panel is-active" id="A-panel">
      <div class="mdl-grid">
        <!-- SIDE BAR// -->
        <div class="mdl-cell mdl-cell--4-col">
          @include('components.sidebar_ch')

          <x-sidebar_card />
          <x-sidebar_card />
          <x-sidebar_card />

          @include('components.sidebar_bt')

        </div>
        <!-- //SIDE BAR -->

      </div>
      <!-- //POSTBAR -->
    </div>
  </div>
  <!-- //SUB HEADER -->
</div>
@endsection