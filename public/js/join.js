subreddit_id = laravel.subreddit_id;
let btn_dom = document.getElementById("join_" + subreddit_id);

function join() {
    $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: '/subreddit/' + subreddit_id + '/join',
            type: 'POST',
        })
        .done(function (data1) {
            if (data1 == 0) {
                btn_dom.textContent = "joined";
            } else if (data1 == 1) {
                btn_dom.textContent = "join";
            }
        })
        .fail(function (data) {
            console.log("error")
        });
}
