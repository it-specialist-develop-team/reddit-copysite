@extends('layouts.common')
@section('content')

	<link rel="stylesheet" href="{{ asset('css/htab.css') }}">
	<link rel="stylesheet" href="{{ asset('css/radiobottom.css') }}">
	<link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
	<script src="{{ asset('js/select2.min.js') }}"></script>

	<div class=sub-header>
		<img src="{{ asset('img/sub-header-backimg.jpg') }}" id="sub-header-backimg">
		<div class="container">
			<div class="sub-header">
				<p><img src="{{ asset('img/sub-header-icon.jpg') }}" id="icon"> <a class="subreddit-title">SUBREDDIT</a> <input type="button" value="JOIN" class="btn btn-primary">
				</p>
				<div class="sub-header-menu">
					<ul>
						<li>Posts</li>
						<li>Subreddit</li>
						<li>Rules</li>
						<li>WebsiteOther</li>
						<div class="dropdown">
							<button type="button" id="dropdown1" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Dropdown button
							</button>
							<div class="dropdown-menu" aria-labelledby="dropdown1">
								<a class="dropdown-item" href="#">Menu #1</a>
								<a class="dropdown-item" href="#">Menu #2</a>
								<a class="dropdown-item" href="#">Menu #3</a>
							</div>
						</div>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<br>

	<div class="container">
		<div class="row">
			<main class="col-md-8">
        <section id="tab-menus">
          <div class="container">
            <p class="post-title">Create-Post</p>
            <div class=select2_menu>

              <select class="select2_01">
                <option value="tote">PS5</option>
                <option value="shoulder">VALORANT</option>
                <option value="ruck">HYPERSCPAE</option>
                <option value="waist">XBOX SCARLET</option>
                <option value="clutch">SWITCH</option>
              </select>


            </div>

            <div class="row">
              <div class="col-12">

                <div class=postmenu>
                  <!-- Tabs navs -->
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" data-toggle="tab" href="#firstMenu"><i class="fab fa-rocketchat"></i> Post</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#secondmenu"><i class="fas fa-image"></i> Image & Video</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#thirdmenu"><i class="fas fa-link"></i> Link</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#fourthmenu"><i class="fas fa-list-ol"></i> Poll</a>
                    </li>
                  </ul>



                  <!-- Tabs Content -->
                  <div class="tab-content">
                    <!-- Post -->
                    <div id="firstMenu" class="tab-pane active">

                      <form>
                        <class class="form-group">
                          <textarea class="form-control title-textarea" maxlength="400" placeholder="title"></textarea>
                          <br>

                          <input id="x" type="hidden" name="content" 　placeholder="Text">
                          <trix-editor class="text" input="x"></trix-editor>




                        </class>
                      </form>
                    </div>


                    <!-- Image&Video -->
                    <div id="secondmenu" class="tab-pane">
                      <form>
                        <class class="form-group">
                          <textarea class="form-control title-textarea" maxlength="400" placeholder="title"></textarea>
                          <br>

                          <div class="upload-file">

                            <p>Drag n Drop or        <label class="btn btn-primary">
                              Browse <input type="file" style="display: none;">
                            </label></p>
                          </div>


                        </class>
                      </form>
                    </div>



                    <!-- link -->
                    <div id="thirdmenu" class="tab-pane">

                      <div class="form-group">
                        <textarea class="form-control title-textarea" maxlength="400" placeholder="title"></textarea>
                        <br>

                        <input type="text" id="url-text" class="form-control">
                      </div>

                    </div>


                    <!-- poll -->
                    <div id="fourthmenu" class="tab-pane">
                      <form>
                        <class class="form-group">
                          <textarea class="form-control title-textarea" maxlength="400" placeholder="title"></textarea>
                          <br>

                          <input id="x" type="hidden" name="content" 　placeholder="Text">
                          <trix-editor class="text" input="x"></trix-editor>


                          <div class="poll">

                            <div class="poll_option">

                              <div class="poll_option_text">

                                <input type="text" class="form-control" size="100">
                                <input type="text" class="form-control">

                                <div id="poll_text_add"></div>
                              </div>

                              <input type="button" value="追加" onclick="clickBtn3()" class="btn btn-primary">
                              <input type="button" value="削除" onclick="clickBtn4()" class="btn btn-primary">

                            </div>

                            <div class="poll_help">


                              <b>投票のヒント</b>
                              <ol>
                                <li>短く明確なオプションを記載する。</li>
                                <li>オプションは多いほど良い。</li>
                                <li>投票期間を選択する。</li>
                                <li>投票を作成後にオプションの内容を変更する事は出来ません。</li>
                              </ol>

                            </div>

                        </class>
                      </form>
                    </div>
                  </div>


                  <div class="post-footer">
                    <class class="checkboxlist">
                      <input type="checkbox" name="CheckboxGroup2" value="チェックボックス" id="Group2_0" class="checkbox02" /><label for="Group2_0" class="check_label">OC</label>
                      <input type="checkbox" name="CheckboxGroup2" value="チェックボックス" id="Group2_1" class="checkbox02" /><label for="Group2_1" class="check_label">SPOILER</label>
                      <input type="checkbox" name="CheckboxGroup2" value="チェックボックス" id="Group2_2" class="checkbox02" /><label for="Group2_2" class="check_label">NSFW</label>
                      <input type="checkbox" name="CheckboxGroup2" value="チェックボックス" id="Group2_3" class="checkbox02" /><label for="Group2_3" class="check_label">FLAIR</label>

                      <input type="button" id="checkboxlist-end" value="VIEW ALL" class="btn btn-primary">

                    </class>

                    <div class="custom-control custom-checkbox">

                      <input type="checkbox" class="custom-control-input" id="custom-check-1">
                      <label class="custom-control-label" for="custom-check-1">返信通知</label>
                      <br>

                      <span class="text-danger tooltip-pearent" data-toggle="tooltip" data-original-title="ユーザー設定からTwitterアカウントと連携します。連携すると作成した投稿を共有することができます。"><a href="#" class="stretched-link">アカウントに接続して共有</a>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
			</main>
			<div id="sidebar" class="col-md-4">
			    @include('components.sidebar_trending')
			</div>
		</div><!-- .row -->
	</div><!-- .wrap -->

	<script type="text/javascript">
		$('textarea').maxlength({
			alwaysShow: true,
			threshold: 10,
			warningClass: "label label-success",
			limitReachedClass: "label label-danger",
			separator: ' out of ',
			preText: 'You write ',
			postText: ' chars.',
			validate: true
		});
	</script>
@endsection
