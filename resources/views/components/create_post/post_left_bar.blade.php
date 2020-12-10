<div class="mdl-cell mdl-cell--8-col ">



    <div class="mdl-card mdl-shadow--2dp card left submit-card ">
        <form action={{url("/create/create_Post/".$id)}} method="post">
            @csrf
            <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
                <div class="mdl-tabs__tab-bar">
                    <a href="#starks-panel" class="mdl-tabs__tab is-active" id="post_select">POST</a>
                    <a href="#lannisters-panel" class="mdl-tabs__tab" id="image_video_select">IMAGE & VIDEO</a>
                </div>

                <!-- POST -->
                <div class="mdl-tabs__panel is-active" id="starks-panel">
                    <div class="POSTFIELD">


                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" name="title">
                            <label class="mdl-textfield__label" for="sample3">Title...</label>
                        </div>


                        <textarea id="summernote" name="body"></textarea>


                        <script>
                            $(document).ready(function () {
                $('#summernote').summernote();
              });
                        </script>
                    </div>

                </div>

                <!-- Image n Video -->
                <div class="mdl-tabs__panel" id="lannisters-panel">
                    <div class="POSTFIELD">
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" name="image-title">
                            <label class="mdl-textfield__label" for="sample3">Title...</label>
                        </div>

                        <div class="media-drop-field">
                            <div class="dragndrop">
                                <span>Drag and Drop or </span>
                                <input type="file" name="image" class="mdl-button mdl-js-button mdl-js-ripple-effect">
                            </div>
                        </div>
                    </div>

                </div>

                <div class="button-field">
                    <div class="submit-button-field">
                        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
                            SAVE
                        </button>
                        <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect"
                            id="post_btn">
                            POST
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>