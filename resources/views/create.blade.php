@extends('layouts.base')
@php
  $title="Create Post";
@endphp

@section('header-links')
  <link rel="stylesheet" href="css/reader-board.css">

  <!-- Summernote -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
  <link rel="stylesheet" href="css/create.css">

@endsection


@section('content')

      <div class="page-content">

        <!-- SUBHEADER -->
        <div class="sub-header-readerboard">
          <h5>新規投稿</h5>
          <span>subredditに対して新しい投稿を作成します。</span>
        </div>

        <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">

          <!-- POSTBAR// -->
          <div class="mdl-grid">

            <!-- LEFT BAR// -->
            <div class="mdl-cell mdl-cell--8-col ">



              <div class="mdl-card mdl-shadow--2dp card left submit-card ">

                <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
                  <div class="mdl-tabs__tab-bar">
                    <a href="#starks-panel" class="mdl-tabs__tab is-active">POST</a>
                    <a href="#lannisters-panel" class="mdl-tabs__tab">IMAGE & VIDEO</a>
                  </div>

                  <!-- POST -->
                  <div class="mdl-tabs__panel is-active" id="starks-panel">
                    <div class="POSTFIELD">

                      <form action="#">
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                          <input class="mdl-textfield__input" type="text" id="sample3">
                          <label class="mdl-textfield__label" for="sample3">Title...</label>
                        </div>
                      </form>

                      <div id="summernote">
                      </div>

                      <script>
                        $(document).ready(function () {
                          $('#summernote').summernote();
                        });
                      </script>

                      <!-- <div class="button-field">

                        <div class="checkbox-field">
                          <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-1">
                            <input type="checkbox" id="checkbox-1" class="mdl-checkbox__input">
                            <span class="mdl-checkbox__label">OC</span>
                          </label><label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-2">
                            <input type="checkbox" id="checkbox-2" class="mdl-checkbox__input">
                            <span class="mdl-checkbox__label">SPOILER</span>
                          </label><label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-3">
                            <input type="checkbox" id="checkbox-3" class="mdl-checkbox__input">
                            <span class="mdl-checkbox__label">NSFW</span>
                          </label><label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-4">
                            <input type="checkbox" id="checkbox-4" class="mdl-checkbox__input">
                            <span class="mdl-checkbox__label">FLAIR</span>
                          </label>

                        </div>

                        <div class="submit-button-field">
                          <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
                            Button
                          </button>
                          <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
                            Button
                          </button>

                        </div>


                      </div> -->



                    </div>



                  </div>
                  <!-- Image n Video -->
                  <div class="mdl-tabs__panel" id="lannisters-panel">
                    <div class="POSTFIELD">

                      <form action="#">
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                          <input class="mdl-textfield__input" type="text" id="sample3">
                          <label class="mdl-textfield__label" for="sample3">Title...</label>
                        </div>
                      </form>

                      <div class="media-drop-field">
                        <div class="dragndrop">
                          <span>Drag and Drop or </span>
                          <button class="mdl-button mdl-js-button mdl-js-ripple-effect">
                            Button
                          </button>

                        </div>
                      </div>

                      <!-- <div class="button-field">

                        <div class="checkbox-field">
                          <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-1">
                            <input type="checkbox" id="checkbox-1" class="mdl-checkbox__input">
                            <span class="mdl-checkbox__label">OC</span>
                          </label><label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-2">
                            <input type="checkbox" id="checkbox-2" class="mdl-checkbox__input">
                            <span class="mdl-checkbox__label">SPOILER</span>
                          </label><label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-3">
                            <input type="checkbox" id="checkbox-3" class="mdl-checkbox__input">
                            <span class="mdl-checkbox__label">NSFW</span>
                          </label><label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-4">
                            <input type="checkbox" id="checkbox-4" class="mdl-checkbox__input">
                            <span class="mdl-checkbox__label">FLAIR</span>
                          </label>

                        </div>

                        <div class="submit-button-field">
                          <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
                            Button
                          </button>
                          <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
                            Button
                          </button>

                        </div>


                      </div> -->



                    </div>




                  </div>
                  <!-- Link
                  <div class="mdl-tabs__panel" id="targaryens-panel">
                    <ul>
                      <li>Viserys</li>
                      <li>Daenerys</li>
                    </ul>
                  </div> -->

                  <div class="button-field">

                    <div class="checkbox-field">
                      <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-1">
                        <input type="checkbox" id="checkbox-1" class="mdl-checkbox__input">
                        <span class="mdl-checkbox__label">OC</span>
                      </label><label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-2">
                        <input type="checkbox" id="checkbox-2" class="mdl-checkbox__input">
                        <span class="mdl-checkbox__label">SPOILER</span>
                      </label><label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-3">
                        <input type="checkbox" id="checkbox-3" class="mdl-checkbox__input">
                        <span class="mdl-checkbox__label">NSFW</span>
                      </label><label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-4">
                        <input type="checkbox" id="checkbox-4" class="mdl-checkbox__input">
                        <span class="mdl-checkbox__label">FLAIR</span>
                      </label>

                    </div>

                    <div class="submit-button-field">
                      <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
                        SAVE
                      </button>
                      <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
                        POST
                      </button>

                    </div>


                  </div>


                </div>



              </div>

            </div>
            <!-- //LEFT BAR -->

            <!-- RIGHT BAR// -->
            <div class="mdl-cell mdl-cell--4-col">
              <!-- RIGHT CARD#1 -->
              <div class="mdl-card mdl-shadow--2dp readercard right card">

                <div class="card-title">
                  <h5 class="title">TOP NULL Communities</h5>

                </div>

                <!-- TOP COMMUNITIES// -->
                <ol>
                  <li class="right-li">
                    <a id="linktitle" href="/subreddit.html">
                      <div class="readerboard-content">
                        <span id="number">1</span>
                        <img id="icon" src="img/g2-logo.jpg">
                        <span id="title">r/g2esports</span>
                      </div>
                    </a>
                  </li>
                  <li class="right-li">
                    <a id="linktitle" href="/subreddit.html">
                      <div class="readerboard-content">
                        <span id="number">2</span>
                        <img id="icon" src="img/g2-logo.jpg">
                        <span id="title">r/g2esports</span>
                      </div>
                    </a>
                  </li>
                  <li class="right-li">
                    <a id="linktitle" href="/subreddit.html">
                      <div class="readerboard-content">
                        <span id="number">3</span>
                        <img id="icon" src="img/g2-logo.jpg">
                        <span id="title">r/g2esports</span>
                      </div>
                    </a>
                  </li>
                  <li class="right-li">
                    <a id="linktitle" href="/subreddit.html">
                      <div class="readerboard-content">
                        <span id="number">4</span>
                        <img id="icon" src="img/g2-logo.jpg">
                        <span id="title">r/g2esports</span>
                      </div>
                    </a>
                  </li>
                  <li class="right-li">
                    <a id="linktitle" href="/subreddit.html">
                      <div class="readerboard-content">
                        <span id="number">5</span>
                        <img id="icon" src="img/g2-logo.jpg">
                        <span id="title">r/g2esports</span>
                      </div>
                    </a>
                  </li>
                </ol>

                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
                  Button
                </button>

                <!-- //TOP COMMUNITIES -->



              </div>
              <!-- RIGHT CARD#2 -->
              <div class="mdl-card mdl-shadow--2dp readercard right card">

                <div class="card-title">
                  <h5 class="title">TOP NULL Communities</h5>

                </div>

                <!-- TOP COMMUNITIES// -->
                <ol>
                  <li class="right-li">
                    <a id="linktitle" href="/subreddit.html">
                      <div class="readerboard-content">
                        <span id="number">1</span>
                        <img id="icon" src="img/g2-logo.jpg">
                        <span id="title">r/g2esports</span>
                      </div>
                    </a>
                  </li>
                  <li class="right-li">
                    <a id="linktitle" href="/subreddit.html">
                      <div class="readerboard-content">
                        <span id="number">2</span>
                        <img id="icon" src="img/g2-logo.jpg">
                        <span id="title">r/g2esports</span>
                      </div>
                    </a>
                  </li>
                  <li class="right-li">
                    <a id="linktitle" href="/subreddit.html">
                      <div class="readerboard-content">
                        <span id="number">3</span>
                        <img id="icon" src="img/g2-logo.jpg">
                        <span id="title">r/g2esports</span>
                      </div>
                    </a>
                  </li>
                  <li class="right-li">
                    <a id="linktitle" href="/subreddit.html">
                      <div class="readerboard-content">
                        <span id="number">4</span>
                        <img id="icon" src="img/g2-logo.jpg">
                        <span id="title">r/g2esports</span>
                      </div>
                    </a>
                  </li>
                  <li class="right-li">
                    <a id="linktitle" href="/subreddit.html">
                      <div class="readerboard-content">
                        <span id="number">5</span>
                        <img id="icon" src="img/g2-logo.jpg">
                        <span id="title">r/g2esports</span>
                      </div>
                    </a>
                  </li>
                </ol>

                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
                  Button
                </button>

                <!-- //TOP COMMUNITIES -->



              </div>
              <!-- RIGHT CARD#3 -->
              <div class="mdl-card mdl-shadow--2dp readercard right card">

                <div class="card-title">
                  <h5 class="title">TOP NULL Communities</h5>
                </div>

                <!-- TOP COMMUNITIES// -->
                <ol>
                  <li class="right-li">
                    <a id="linktitle" href="/subreddit.html">
                      <div class="readerboard-content">
                        <span id="number">1</span>
                        <img id="icon" src="img/g2-logo.jpg">
                        <span id="title">r/g2esports</span>
                      </div>
                    </a>
                  </li>
                  <li class="right-li">
                    <a id="linktitle" href="/subreddit.html">
                      <div class="readerboard-content">
                        <span id="number">2</span>
                        <img id="icon" src="img/g2-logo.jpg">
                        <span id="title">r/g2esports</span>
                      </div>
                    </a>
                  </li>
                  <li class="right-li">
                    <a id="linktitle" href="/subreddit.html">
                      <div class="readerboard-content">
                        <span id="number">3</span>
                        <img id="icon" src="img/g2-logo.jpg">
                        <span id="title">r/g2esports</span>
                      </div>
                    </a>
                  </li>
                  <li class="right-li">
                    <a id="linktitle" href="/subreddit.html">
                      <div class="readerboard-content">
                        <span id="number">4</span>
                        <img id="icon" src="img/g2-logo.jpg">
                        <span id="title">r/g2esports</span>
                      </div>
                    </a>
                  </li>
                  <li class="right-li">
                    <a id="linktitle" href="/subreddit.html">
                      <div class="readerboard-content">
                        <span id="number">5</span>
                        <img id="icon" src="img/g2-logo.jpg">
                        <span id="title">r/g2esports</span>
                      </div>
                    </a>
                  </li>
                </ol>

                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
                  Button
                </button>

                <!-- //TOP COMMUNITIES -->



              </div>
            </div>
            <!-- //RIGHT BAR -->

          </div>
          <!-- //POSTBAR -->

        </div>
        <!-- //SUB HEADER -->





      </div>
@endsection
