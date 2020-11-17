<!DOCTYPE html>
<html lang="ja">

<head>
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- CDN -->
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

  <!-- CSS -->
  <link rel="stylesheet" href="{{asset('css/main.css')}}">
  <link rel="stylesheet" href="{{asset('css/sub-header.css')}}">
  <link rel="stylesheet" href="{{asset('css/main-card.css')}}">
  <link rel="stylesheet" href="{{asset('css/right-card.css')}}">
  <link rel="stylesheet" href="{{asset('css/main-card copy.css')}}">

  @yield('header-links')


  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{$title}}</title>
</head>

<body>


  <div class="demo-layout-waterfall mdl-layout mdl-js-layout">
    <!-- HEADER// -->
    <header class="mdl-layout__header mdl-layout__header--waterfall">
      <!-- Top row, always visible -->
      <div class="mdl-layout__header-row">
        <!-- Title -->
        <span class="mdl-layout-title"><a href="{{ url('/') }}" class="mdl-layout__link">COPY-REDDIT</a></span>
        <div class="mdl-layout-spacer"></div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable
                      mdl-textfield--floating-label mdl-textfield--align-right">
          <label class="mdl-button mdl-js-button mdl-button--icon" for="waterfall-exp">
            <i class="material-icons">search</i>
          </label>
          <div class="mdl-textfield__expandable-holder">
            <input class="mdl-textfield__input" type="text" name="sample" id="waterfall-exp">
          </div>
        </div>
      </div>

    </header>
    <!-- HEADER MENU// -->
    <div class="mdl-layout__drawer">
      <span class="mdl-layout-title">C-REDDIT</span>
      <nav class="mdl-navigation">
        <a class="mdl-navigation__link" href="/subreddit.html">HOME</a>
        <a class="mdl-navigation__link" href="">POPULAR</a>
        <a class="mdl-navigation__link" href="">ALL</a>
        <a class="mdl-navigation__link" href="{{ asset('/readerboard')}}">TOP COMMUNITY</a>
      </nav>
    </div>
    <!-- //HEADER MENU -->
    <!-- //HEADER -->

    <main class="mdl-layout__content">
      @yield('content')
    </main>
  </div>



</body>

</html>