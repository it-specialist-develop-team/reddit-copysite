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
              <!-- MAIN BAR// -->

              <div class="mdl-cell mdl-cell--8-col">



                <!-- //POSTCARDCLASSIC -->

                <div class="mdl-card mdl-shadow--2dp maincard postcard-classic">


                  <div class="block-post-classic">
                    <div class="post-rank-classic">
                      <p>↑</p>
                      <p>000</p>
                      <p>↓</p>
                    </div>
                    <div class="post-content">

                      <div class="post-content-header">
                        <div class="post-status">
                          <div>
                            <span>Posted by </span>
                            <span>u/User</span>
                          </div>
                          <span>12 hours ago</span>
                        </div>
                        <h4 class="post-title"> Title Title Title </h4>

                      </div>
                      <div class="post-body">
                        <div class="media">
                          <img src="img/php_logo.png">
                        </div>
                        <div class="text">
<span>//SAMPLE TEXT// Welcome to /r/AMD; the subreddit for all things AMD - come talk about Ryzen, Threadripper, EPYC, Navi, the next-gen consoles, news, rumours, show-off your build and more. /r/AMD is community run and does not represent AMD in any capacity unless specified.//SAMPLE TEXT// Welcome to /r/AMD; the subreddit for all things AMD - come talk about Ryzen, Threadripper, EPYC, Navi, the next-gen consoles, news, rumours, show-off your build and more. /r/AMD is community run and does not represent AMD in any capacity unless specified.//SAMPLE TEXT// Welcome to /r/AMD; the subreddit for all things AMD - come talk about Ryzen, Threadripper, EPYC, Navi, the next-gen consoles, news, rumours, show-off your build and more. /r/AMD is community run and does not represent AMD in any capacity unless specified.//SAMPLE TEXT// Welcome to /r/AMD; the subreddit for all things AMD - come talk about Ryzen, Threadripper, EPYC, Navi, the next-gen consoles, news, rumours, show-off your build and more. /r/AMD is community run and does not represent AMD in any capacity unless specified.</span>
                        </div>
                         </div>

                      <div class="add-comment-field">
                        <form action="#">
                          <div class="mdl-textfield mdl-js-textfield">
                            <textarea class="mdl-textfield__input" type="text" rows="3" id="sample5"></textarea>
                            <label class="mdl-textfield__label" for="sample5">Ur comment...</label>
                          </div>
                        </form>
                        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
                          POST
                        </button>
                        <div class="add-comment-field-border"></div>
                      </div>


                      @component('components.comment')

                      @endcomponent
                      <!-- <div class="comment-field">
                      <div class="comment">
                          <div class="comment-header">
                            <img src="img/g2-logo.jpg" class="comment-user-icon">
                            <div class="comment-header-status">
                              <span class="comment-user">u/USER</span>
                              <span class="comment-time">2 hours ago</span>

                            </div>
                          </div>
                          <div class="comment-body">
                            <span class="comment-body-text">//SAMPLE TEXT// Welcome to /r/AMD; the subreddit for all things AMD - come talk about Ryzen, Threadripper, EPYC, Navi, the next-gen consoles, news, rumours, show-off your build and more. /r/AMD is community run and does not represent AMD in any capacity unless specified.//SAMPLE TEXT// Welcome to /r/AMD; the subreddit for all things AMD - come talk about Ryzen, Threadripper, EPYC, Navi, the next-gen consoles, news, rumours, show-off your build and more. /r/AMD is community run and does not represent AMD in any capacity unless specified.//SAMPLE TEXT// Welcome to /r/AMD; the subreddit for all things AMD - come talk about Ryzen, Threadripper, EPYC, Navi, the next-gen consoles, news, rumours, show-off your build and more. /r/AMD is community run and does not represent AMD in any capacity unless specified.//SAMPLE TEXT// Welcome to /r/AMD; the subreddit for all things AMD - come talk about Ryzen, Threadripper, EPYC, Navi, the next-gen consoles, news, rumours, show-off your build and more. /r/AMD is community run and does not represent AMD in any capacity unless specified.</span>
                          </div>

                          <div class="comment reply">
                            <div class="comment-header">
                              <img src="img/g2-logo.jpg" class="comment-user-icon">
                              <div class="comment-header-status">
                                <span class="comment-user">u/USER</span>
                                <span class="comment-time">2 hours ago</span>

                              </div>
                            </div>
                            <div class="comment-body">
                              <span class="comment-body-text">sample comment sample comment sample comment</span>
                            </div>
                          </div>
                          <div class="comment reply">
                            <div class="comment-header">
                              <img src="img/g2-logo.jpg" class="comment-user-icon">
                              <div class="comment-header-status">
                                <span class="comment-user">u/USER</span>
                                <span class="comment-time">2 hours ago</span>

                              </div>
                            </div>
                            <div class="comment-body">
                              <span class="comment-body-text">//SAMPLE TEXT// Welcome to /r/AMD; the subreddit for all things AMD - come talk about Ryzen, Threadripper, EPYC, Navi, the next-gen consoles, news, rumours, show-off your build and more. /r/AMD is community run and does not represent AMD in any capacity unless specified.//SAMPLE TEXT// Welcome to /r/AMD; the subreddit for all things AMD - come talk about Ryzen, Threadripper, EPYC, Navi, the next-gen consoles, news, rumours, show-off your build and more. /r/AMD is community run and does not represent AMD in any capacity unless specified.//SAMPLE TEXT// Welcome to /r/AMD; the subreddit for all things AMD - come talk about Ryzen, Threadripper, EPYC, Navi, the next-gen consoles, news, rumours, show-off your build and more. /r/AMD is community run and does not represent AMD in any capacity unless specified.//SAMPLE TEXT// Welcome to /r/AMD; the subreddit for all things AMD - come talk about Ryzen, Threadripper, EPYC, Navi, the next-gen consoles, news, rumours, show-off your build and more. /r/AMD is community run and does not represent AMD in any capacity unless specified.</span>
                            </div>

                            <div class="comment reply">
                              <div class="comment-header">
                                <img src="img/g2-logo.jpg" class="comment-user-icon">
                                <div class="comment-header-status">
                                  <span class="comment-user">u/USER</span>
                                  <span class="comment-time">2 hours ago</span>

                                </div>
                              </div>
                              <div class="comment-body">
                                <span class="comment-body-text">sample comment sample comment sample comment</span>
                              </div>
                            </div>
                            <div class="comment reply">
                              <div class="comment-header">
                                <img src="img/g2-logo.jpg" class="comment-user-icon">
                                <div class="comment-header-status">
                                  <span class="comment-user">u/USER</span>
                                  <span class="comment-time">2 hours ago</span>

                                </div>
                              </div>
                              <div class="comment-body">
                                <span class="comment-body-text">sample comment sample comment sample comment</span>
                              </div>
                            </div>
                            <div class="comment reply">
                              <div class="comment-header">
                                <img src="img/g2-logo.jpg" class="comment-user-icon">
                                <div class="comment-header-status">
                                  <span class="comment-user">u/USER</span>
                                  <span class="comment-time">2 hours ago</span>

                                </div>
                              </div>
                              <div class="comment-body">
                                <span class="comment-body-text">sample comment sample comment sample comment</span>
                              </div>
                            </div>


                          </div> -->


                        <!-- </div>
                        <div class="comment">
                          <div class="comment-header">
                            <img src="img/g2-logo.jpg" class="comment-user-icon">
                            <div class="comment-header-status">
                              <span class="comment-user">u/USER</span>
                              <span class="comment-time">2 hours ago</span>

                            </div>
                          </div>
                          <div class="comment-body">
                            <span class="comment-body-text">sample comment sample comment sample comment</span>
                          </div>

                          <div class="comment reply">
                            <div class="comment-header">
                              <img src="img/g2-logo.jpg" class="comment-user-icon">
                              <div class="comment-header-status">
                                <span class="comment-user">u/USER</span>
                                <span class="comment-time">2 hours ago</span>

                              </div>
                            </div>
                            <div class="comment-body">
                              <span class="comment-body-text">sample comment sample comment sample comment</span>
                            </div>
                          </div>
                          <div class="comment reply">
                            <div class="comment-header">
                              <img src="img/g2-logo.jpg" class="comment-user-icon">
                              <div class="comment-header-status">
                                <span class="comment-user">u/USER</span>
                                <span class="comment-time">2 hours ago</span>

                              </div>
                            </div>
                            <div class="comment-body">
                              <span class="comment-body-text">sample comment sample comment sample comment</span>
                            </div>

                            <div class="comment reply">
                              <div class="comment-header">
                                <img src="img/g2-logo.jpg" class="comment-user-icon">
                                <div class="comment-header-status">
                                  <span class="comment-user">u/USER</span>
                                  <span class="comment-time">2 hours ago</span>

                                </div>
                              </div>
                              <div class="comment-body">
                                <span class="comment-body-text">sample comment sample comment sample comment</span>
                              </div>
                            </div>
                            <div class="comment reply">
                              <div class="comment-header">
                                <img src="img/g2-logo.jpg" class="comment-user-icon">
                                <div class="comment-header-status">
                                  <span class="comment-user">u/USER</span>
                                  <span class="comment-time">2 hours ago</span>

                                </div>
                              </div>
                              <div class="comment-body">
                                <span class="comment-body-text">sample comment sample comment sample comment</span>
                              </div>
                            </div>
                            <div class="comment reply">
                              <div class="comment-header">
                                <img src="img/g2-logo.jpg" class="comment-user-icon">
                                <div class="comment-header-status">
                                  <span class="comment-user">u/USER</span>
                                  <span class="comment-time">2 hours ago</span>

                                </div>
                              </div>
                              <div class="comment-body">
                                <span class="comment-body-text">sample comment sample comment sample comment</span>
                              </div>
                            </div>


                          </div> -->


                        <!-- </div>
                        <div class="comment">
                          <div class="comment-header">
                            <img src="img/g2-logo.jpg" class="comment-user-icon">
                            <div class="comment-header-status">
                              <span class="comment-user">u/USER</span>
                              <span class="comment-time">2 hours ago</span>

                            </div>
                          </div>
                          <div class="comment-body">
                            <span class="comment-body-text">sample comment sample comment sample comment</span>
                          </div>

                          <div class="comment reply">
                            <div class="comment-header">
                              <img src="img/g2-logo.jpg" class="comment-user-icon">
                              <div class="comment-header-status">
                                <span class="comment-user">u/USER</span>
                                <span class="comment-time">2 hours ago</span>

                              </div>
                            </div>
                            <div class="comment-body">
                              <span class="comment-body-text">sample comment sample comment sample comment</span>
                            </div>
                          </div>
                          <div class="comment reply">
                            <div class="comment-header">
                              <img src="img/g2-logo.jpg" class="comment-user-icon">
                              <div class="comment-header-status">
                                <span class="comment-user">u/USER</span>
                                <span class="comment-time">2 hours ago</span>

                              </div>
                            </div>
                            <div class="comment-body">
                              <span class="comment-body-text">sample comment sample comment sample comment</span>
                            </div>

                            <div class="comment reply">
                              <div class="comment-header">
                                <img src="img/g2-logo.jpg" class="comment-user-icon">
                                <div class="comment-header-status">
                                  <span class="comment-user">u/USER</span>
                                  <span class="comment-time">2 hours ago</span>

                                </div>
                              </div>
                              <div class="comment-body">
                                <span class="comment-body-text">sample comment sample comment sample comment</span>
                              </div>
                            </div>
                            <div class="comment reply">
                              <div class="comment-header">
                                <img src="img/g2-logo.jpg" class="comment-user-icon">
                                <div class="comment-header-status">
                                  <span class="comment-user">u/USER</span>
                                  <span class="comment-time">2 hours ago</span>

                                </div>
                              </div>
                              <div class="comment-body">
                                <span class="comment-body-text">sample comment sample comment sample comment</span>
                              </div>
                            </div>
                            <div class="comment reply">
                              <div class="comment-header">
                                <img src="img/g2-logo.jpg" class="comment-user-icon">
                                <div class="comment-header-status">
                                  <span class="comment-user">u/USER</span>
                                  <span class="comment-time">2 hours ago</span>

                                </div>
                              </div>
                              <div class="comment-body">
                                <span class="comment-body-text">sample comment sample comment sample comment</span>
                              </div>
                            </div>


                          </div> -->


                        </div>

                      </div>

                    </div>
                  </div>




                </div>



              </div>


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

        </div>





        <!-- //SUB HEADER -->





      </div>
@endsection
