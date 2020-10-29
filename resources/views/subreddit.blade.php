@extends('layouts.base')
@php
  $title="Subreddit";
@endphp

@section('header-links')

@endsection


@section('content')

      <div class="page-content">

        <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored" id="create-button" onclick="location.href='/create.html'">
          <i class="material-icons">add</i>
        </button>

        <!-- SUB HEADER// -->

        <div class="sub-header">
          <img src="img/sub-header-backimg.jpg">

          <div class="sub-header-bar">
            <img src="img/sub-header-icon.jpg" id="sub-header-icon">

            <p>SUBREDDIT</p>
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
              Button
            </button> </div>

        </div>

        <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
          <div class="mdl-tabs__tab-bar">
            <a href="#A-panel" class="mdl-tabs__tab is-active">POST</a>
            <a href="#B-panel" class="mdl-tabs__tab">RULES</a>
            <a href="#C-panel" class="mdl-tabs__tab">DISCORD</a>
          </div>



          <!-- POSTBAR// -->

          <div class="mdl-tabs__panel is-active" id="A-panel">

            <div class="mdl-grid">
              <!-- MAIN BAR// -->

              <div class="mdl-cell mdl-cell--8-col">


                <div class="mdl-card mdl-shadow--2dp maincard">

                  <p>UPDATES FROM REDDIT</p>
                  <p>Keep yourself safe and informed</p>
                  <p>Visit r/Coronavirus to talk about COVID-19, and visit www.who.int for more information.</p>

                </div>


                <!-- //POSTCARDCLASSIC -->

                <div class="mdl-card mdl-shadow--2dp maincard postcard-classic">


                  <div class="block-post-classic">
                    <div class="post-rank-classic">
                      <p>↑</p>
                      <p>000</p>
                      <p>↓</p>
                    </div>
                    <div class="post-content">

                      <a class="linktitle" href="view.html">
                    <img src="img/php_logo.png" heigh="100" width="150">

                    <div class="post-content-flex">

                      <header>
                        <div class="post-header">
                          <p class="post-title">title</p>
                            <p class="subreddit">r/subreddit</p>
                            <p class="post-user">u/user</p>
                        </div>
                      </header>

                      <!-- <span class="mdl-chip">
                        <span class="mdl-chip__text">Comment</span>
                      </span>
                      <span class="mdl-chip">
                        <span class="mdl-chip__text">Share</span>
                      </span>
                      <span class="mdl-chip">
                        <span class="mdl-chip__text">Save</span>
                      </span>
                      <span class="mdl-chip">
                        <span class="mdl-chip__text">Hide</span>
                      </span>
                      <span class="mdl-chip">
                        <span class="mdl-chip__text">Report</span>
                      </span> -->
                    </div>
                      </a>



                    </div>
                  </div>




                </div>
                <div class="mdl-card mdl-shadow--2dp maincard postcard-classic">


                  <div class="block-post-classic">
                    <div class="post-rank-classic">
                      <p>↑</p>
                      <p>000</p>
                      <p>↓</p>
                    </div>
                    <div class="post-content">

                      <a class="linktitle" href="view.html">
                        <img src="img/php_logo.png" heigh="100" width="150">

                        <div class="post-content-flex">

                          <header>
                            <div class="post-header">
                              <p class="post-title">title</p>
                              <p class="subreddit">r/subreddit</p>
                              <p class="post-user">u/user</p>
                            </div>
                          </header>

                          <!-- <span class="mdl-chip">
                                        <span class="mdl-chip__text">Comment</span>
                                      </span>
                                      <span class="mdl-chip">
                                        <span class="mdl-chip__text">Share</span>
                                      </span>
                                      <span class="mdl-chip">
                                        <span class="mdl-chip__text">Save</span>
                                      </span>
                                      <span class="mdl-chip">
                                        <span class="mdl-chip__text">Hide</span>
                                      </span>
                                      <span class="mdl-chip">
                                        <span class="mdl-chip__text">Report</span>
                                      </span> -->
                        </div>
                      </a>



                    </div>
                  </div>




                </div>
                <div class="mdl-card mdl-shadow--2dp maincard postcard-classic">


                  <div class="block-post-classic">
                    <div class="post-rank-classic">
                      <p>↑</p>
                      <p>000</p>
                      <p>↓</p>
                    </div>
                    <div class="post-content">

                      <a class="linktitle" href="view.html">
                        <img src="img/php_logo.png" heigh="100" width="150">

                        <div class="post-content-flex">

                          <header>
                            <div class="post-header">
                              <p class="post-title">title</p>
                              <p class="subreddit">r/subreddit</p>
                              <p class="post-user">u/user</p>
                            </div>
                          </header>

                          <!-- <span class="mdl-chip">
                                        <span class="mdl-chip__text">Comment</span>
                                      </span>
                                      <span class="mdl-chip">
                                        <span class="mdl-chip__text">Share</span>
                                      </span>
                                      <span class="mdl-chip">
                                        <span class="mdl-chip__text">Save</span>
                                      </span>
                                      <span class="mdl-chip">
                                        <span class="mdl-chip__text">Hide</span>
                                      </span>
                                      <span class="mdl-chip">
                                        <span class="mdl-chip__text">Report</span>
                                      </span> -->
                        </div>
                      </a>



                    </div>
                  </div>




                </div>
                <div class="mdl-card mdl-shadow--2dp maincard postcard-classic">


                  <div class="block-post-classic">
                    <div class="post-rank-classic">
                      <p>↑</p>
                      <p>000</p>
                      <p>↓</p>
                    </div>
                    <div class="post-content">

                      <a class="linktitle" href="view.html">
                        <img src="img/php_logo.png" heigh="100" width="150">

                        <div class="post-content-flex">

                          <header>
                            <div class="post-header">
                              <p class="post-title">title</p>
                              <p class="subreddit">r/subreddit</p>
                              <p class="post-user">u/user</p>
                            </div>
                          </header>

                          <!-- <span class="mdl-chip">
                                        <span class="mdl-chip__text">Comment</span>
                                      </span>
                                      <span class="mdl-chip">
                                        <span class="mdl-chip__text">Share</span>
                                      </span>
                                      <span class="mdl-chip">
                                        <span class="mdl-chip__text">Save</span>
                                      </span>
                                      <span class="mdl-chip">
                                        <span class="mdl-chip__text">Hide</span>
                                      </span>
                                      <span class="mdl-chip">
                                        <span class="mdl-chip__text">Report</span>
                                      </span> -->
                        </div>
                      </a>



                    </div>
                  </div>




                </div>
                <div class="mdl-card mdl-shadow--2dp maincard postcard-classic">


                  <div class="block-post-classic">
                    <div class="post-rank-classic">
                      <p>↑</p>
                      <p>000</p>
                      <p>↓</p>
                    </div>
                    <div class="post-content">

                      <a class="linktitle" href="view.html">
                        <img src="img/php_logo.png" heigh="100" width="150">

                        <div class="post-content-flex">

                          <header>
                            <div class="post-header">
                              <p class="post-title">title</p>
                              <p class="subreddit">r/subreddit</p>
                              <p class="post-user">u/user</p>
                            </div>
                          </header>

                          <!-- <span class="mdl-chip">
                                        <span class="mdl-chip__text">Comment</span>
                                      </span>
                                      <span class="mdl-chip">
                                        <span class="mdl-chip__text">Share</span>
                                      </span>
                                      <span class="mdl-chip">
                                        <span class="mdl-chip__text">Save</span>
                                      </span>
                                      <span class="mdl-chip">
                                        <span class="mdl-chip__text">Hide</span>
                                      </span>
                                      <span class="mdl-chip">
                                        <span class="mdl-chip__text">Report</span>
                                      </span> -->
                        </div>
                      </a>



                    </div>
                  </div>




                </div>

                <!-- POSTCARDCLASSIC// -->



              </div>

              <!-- MAIN BAR// -->



              <!-- SIDE BAR// -->
              <div class="mdl-cell mdl-cell--4-col">


                <div class="mdl-card mdl-shadow--2dp card">

                  <div class="card-title">
                    <h5 class="title">TEXT</h5>

                  </div>
                  <div class="right-card-body">

                    <p>//SAMPLE TEXT// Welcome to /r/AMD; the subreddit for all things AMD - come talk about Ryzen, Threadripper, EPYC, Navi, the next-gen consoles, news, rumours, show-off your build and more. /r/AMD is community run and does not represent AMD in any capacity unless specified.</p>
                  </div>

                  <div class="right-card-body digit">


                    <div>
                      <p>100k</p>
                      <p>Members</p>
                    </div>
                    <div>
                      <p>4k</p>
                      <p>Online</p>
                    </div>
                  </div>

                  <div class="right-card-body">

                    <p>Created 2020/12/25</p>

                  </div>
                </div>

                <div class="mdl-card mdl-shadow--2dp card">

                  <div class="card-title">
                    <h5 class="title">TEXT</h5>

                  </div>
                  <div class="right-card-body">

                    <p>
                                      right-card-body
                                    </p>

                  </div>

                </div>
                <div class="mdl-card mdl-shadow--2dp card">

                  <div class="card-title">
                    <h5 class="title">TEXT</h5>

                  </div>
                  <div class="right-card-body">

                    <p>
                                      right-card-body
                                    </p>

                  </div>

                </div>
                <div class="mdl-card mdl-shadow--2dp card">

                  <div class="card-title">
                    <h5 class="title">TEXT</h5>

                  </div>
                  <div class="right-card-body">

                    <p>
                                      right-card-body
                                    </p>

                  </div>

                </div>
                <div class="mdl-card mdl-shadow--2dp card">

                  <div class="card-title">
                    <h5 class="title">TEXT</h5>

                  </div>
                  <div class="right-card-body">

                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                      Button
                    </button><button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                      Button
                    </button>
                  </div>

                </div>

              </div>
              <!-- //SIDE BAR -->

            </div>
            <!-- //POSTBAR -->






          </div>
          <div class="mdl-tabs__panel" id="B-panel">
            <ul>
              <li>B</li>
              <li>B</li>
            </ul>
          </div>
          <div class="mdl-tabs__panel" id="C-panel">
            <ul>
              <li>C</li>
              <li>C</li>
              <li>C</li>
            </ul>
          </div>
        </div>





        <!-- //SUB HEADER -->





      </div>
@endsection