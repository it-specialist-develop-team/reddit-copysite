@extends('layouts.base')
@php
  $title="TOP COMMUNITY";
@endphp

@section('header-links')
  <link rel="stylesheet" href="css/reader-board.css">
@endsection


@section('content')

hogehoge
      <div class="page-content">

        <!-- SUBHEADER -->
        <div class="sub-header-readerboard">
          <h5>今日、最も成長しているコミュニティ</h5>
          <span>copy-redditで最も成長しているコミュニティです。カテゴリ別で並べ替える事が出来ます。</span>
        </div>

        <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">

          <!-- POSTBAR// -->
          <div class="mdl-grid">

            <!-- LEFT BAR// -->
            <div class="mdl-cell mdl-cell--3-col ">

              <div class="mdl-card mdl-shadow--2dp readercard card left">
                <div class="card-title">
                  <h5 class="title">Categories</h5>
                </div>

                <!-- CATEGORY// -->
                <ol>
                  <li class="left-li">
                    <a href="#">
                      <span>All Communities</span>
                    </a>
                  </li>
                  <li class="left-li">
                    <a href="#">
                      <span>GAME</span>
                    </a>
                  </li>
                  <li class="left-li">
                    <a href="#">
                      <span>SCIENCE</span>
                    </a>
                  </li>
                  <li class="left-li">
                    <a href="#">
                      <span>HARDWARE</span>
                    </a>
                  </li>
                  <li class="left-li">
                    <a href="#">
                      <span>TV</span>
                    </a>
                  </li>
                  <li class="left-li">
                    <a href="#">
                      <span>NEWS</span>
                    </a>
                  </li>
                  <li class="left-li">
                    <a href="#">
                      <span>Memes</span>
                    </a>
                  </li>
                </ol>
                <!-- //CATEGORY -->

              </div>

            </div>
            <!-- //LEFT BAR -->

            <!-- CENTER BAR// -->
            <div class="mdl-cell mdl-cell--6-col">

              <div class="mdl-card mdl-shadow--2dp readercard card center">

                <div class="card-title">
                  <h5 class="title">今日のトップコミュニティ</h5>
                </div>

                <!-- TOPCOMMUNITY CONTENTS// -->
                <ol>
                  <li class="center-li">
                    <a id="linktitle" href="/subreddit.html">
                      <div class="readerboard-content">
                        <span id="number">1</span>
                        <img id="icon" src="img/g2-logo.jpg">
                        <span id="title">r/g2esports</span>
                      </div>
                    </a>
                  </li>
                  <li class="center-li">
                    <a id="linktitle" href="/subreddit.html">
                      <div class="readerboard-content">
                        <span id="number">2</span>
                        <img id="icon" src="img/intel-logo.png">
                        <span id="title">r/intel</span>
                      </div>
                    </a>
                  </li>
                  <li class="center-li">
                    <a id="linktitle" href="/subreddit.html">
                      <div class="readerboard-content">
                        <span id="number">3</span>
                        <img id="icon" src="img/nrg-logo.png">
                        <span id="title">r/nrg</span>
                      </div>
                    </a>
                  </li>
                  <li class="center-li">
                    <a id="linktitle" href="/subreddit.html">
                      <div class="readerboard-content">
                        <span id="number">4</span>
                        <img id="icon" src="img/ps-logo.png">
                        <span id="title">r/playstation</span>
                      </div>
                    </a>
                  </li>
                  <li class="center-li">
                    <a id="linktitle" href="/subreddit.html">
                      <div class="readerboard-content">
                        <span id="number">5</span>
                        <img id="icon" src="img/ryzen-logo.png">
                        <span id="title">r/ryzen</span>
                      </div>
                    </a>
                  </li>
                  <li class="center-li">
                    <a id="linktitle" href="/subreddit.html">
                      <div class="readerboard-content">
                        <span id="number">6</span>
                        <img id="icon" src="img/tsm-logo.png">
                        <span id="title">r/teamsolomid</span>
                      </div>
                    </a>
                  </li>
                  <li class="center-li">
                    <a id="linktitle" href="/subreddit.html">
                      <div class="readerboard-content">
                        <span id="number">7</span>
                        <img id="icon" src="img/xbox-logo.png">
                        <span id="title">r/xbox</span>
                      </div>
                    </a>
                  </li>
                  <li class="center-li">
                    <a id="linktitle" href="/subreddit.html">
                      <div class="readerboard-content">
                        <span id="number">8</span>
                        <img id="icon" src="img/sub-header-icon.jpg">
                        <span id="title">r/twitter</span>
                      </div>
                    </a>
                  </li>
                  <li class="center-li">
                    <a id="linktitle" href="/subreddit.html">
                      <div class="readerboard-content">
                        <span id="number">9</span>
                        <img id="icon" src="img/t1-logo.png">
                        <span id="title">r/sktelecom1</span>
                      </div>
                    </a>
                  </li>
                  <li class="center-li">
                    <a id="linktitle" href="/subreddit.html">
                      <div class="readerboard-content">
                        <span id="number">10</span>
                        <img id="icon" src="img/copy-reddit-logo.png">
                        <span id="title">r/reddit</span>
                      </div>
                    </a>
                  </li>

                </ol>

                <!-- //TOPCOMMUNITY CONTENTS -->



              </div>

            </div>
            <!-- //CENTER BAR -->

            <!-- RIGHT BAR// -->
            <div class="mdl-cell mdl-cell--3-col">
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
