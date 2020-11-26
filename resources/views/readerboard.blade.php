@extends('layouts.base')
@php
  $title="TOP COMMUNITY";
@endphp

@section('header-links')
  <link rel="stylesheet" href="css/reader-board.css">
@endsection


@section('content')

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
                @foreach ($res as $index => $content)
                  @include('components.readerboard_topcommunity')
                @endforeach
                </ol>

                <!-- //TOPCOMMUNITY CONTENTS -->



              </div>

            </div>
            <!-- //CENTER BAR -->

            <!-- RIGHT BAR// -->
            <div class="mdl-cell mdl-cell--3-col">
              @include('components.readerboard_rightcard')
              @include('components.readerboard_rightcard')
              @include('components.readerboard_rightcard')
            </div>
            <!-- //RIGHT BAR -->

          </div>
          <!-- //POSTBAR -->

        </div>
        <!-- //SUB HEADER -->





      </div>
@endsection
