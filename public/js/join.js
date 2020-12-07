subreddit_id = laravel.subreddit_id;
user_id = laravel.user_id;
let btn_dom = document.getElementById("join_" + subreddit_id);
$.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: '/subreddit/' + subreddit_id + '/show',
        type: 'POST',
        data: {
            "user_id": user_id,
        }
    })
    .done(function (data1) {
        console.log(data1)
        if (data1 == 1) {
            btn_dom.textContent = "joined";
        }
    })
    .fail(function (data) {
        console.log("error")
    });

function join(dom, user_id) {
    subreddit_id = dom.id.split("_")[1];
    $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: '/subreddit/' + subreddit_id + '/join',
            type: 'POST',
            data: {
                "user_id": user_id,
            }
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
