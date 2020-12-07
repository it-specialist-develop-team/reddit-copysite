<div class="mdl-cell mdl-cell--8-col ">
    <div class="mdl-card mdl-shadow--2dp card left submit-card ">
        <form action="{{url('/create/testPost')}}" method="post">
            @csrf
            <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
                <!-- POST -->
                <div class="mdl-tabs__panel is-active" id="starks-panel">
                    <div class="POSTFIELD">
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" name="title">
                            <label class="mdl-textfield__label">Title...</label>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <textarea class="mdl-textfield__input" type="text" rows="3" id="text7"></textarea>
                            <label class="mdl-textfield__label">Body...</label>
                        </div>
                    </div>
                </div>
                <div class="button-field">
                    <div class="submit-button-field">
                        <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect"
                            id="post_btn">
                            Create
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>