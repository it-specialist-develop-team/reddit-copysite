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
                      @include('components.post_head')
                      
                      @include('components.post_addcomment')


                      @component('components.comment')

                      @endcomponent
                      <!-- <div class="comment-field">
                      <div class="comment">
                          @include('components.post_comment')

                          <div class="comment reply">
                            @include('components.post_comment')
                          </div>
                          <div class="comment reply">
                              @include('components.post_comment')

                            <div class="comment reply">
                               @include('components.post_comment')
                            </div>
                            <div class="comment reply">
                              @include('components.post_comment')
                            </div>
                            <div class="comment reply">
                              @include('components.post_comment')
                            </div>


                          </div> -->


                        <!-- </div>
                        <div class="comment">
                          @include('components.post_comment')

                          <div class="comment reply">
                            @include('components.post_comment')
                          </div>
                          <div class="comment reply">
                            @include('components.post_comment')

                            <div class="comment reply">
                              @include('components.post_comment')
                            </div>
                            <div class="comment reply">
                              @include('components.post_comment')
                            </div>
                            <div class="comment reply">
                              @include('components.post_comment')
                            </div>


                          </div> -->


                        <!-- </div>
                        <div class="comment">
                          @include('components.post_comment')

                          <div class="comment reply">
                            @include('components.post_comment')
                          </div>
                          <div class="comment reply">
                            @include('components.post_comment')

                            <div class="comment reply">
                              @include('components.post_comment')
                            </div>
                            <div class="comment reply">
                              @include('components.post_comment')
                            </div>
                            <div class="comment reply">
                              @include('components.post_comment')
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
