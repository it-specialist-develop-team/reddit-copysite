onload = function () {
    let eva_like = document.getElementsByClassName("eva_like");
    let eva_dislike = document.getElementsByClassName("eva_dislike");
    let user_id = 1;
    for (let i = 0; i < eva_like.length; i++) {
        let val = eva_like[i].parentElement.children[1];
        let like = eva_like[i].parentElement.children[0];
        let dislike = eva_like[i].parentElement.children[2];

        let post_id = Number(eva_like[i].id.split('_')[1]);
        $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: '/eva_show',
                type: 'POST',
                data: {
                    "post_id": post_id,
                    "user_id": user_id
                }
            })
            .done(function (data1) {
                let d = Number(data1.val)
                if (d == 1) {
                    like.setAttribute("class", "eva_like_set");
                } else if (d == -1) {
                    dislike.setAttribute("class", "eva_dislike_set");
                }
            })
            .fail(function (data) {
                console.log("error")
            });


        like.addEventListener("click", e => {
            $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: '/evaluation',
                    type: 'POST',
                    data: {
                        "post_id": post_id,
                        "user_id": user_id,
                        "evaluation": 1
                    }
                })
                .done(function (data1) {
                    val.textContent = data1.val;
                    if (data1.ret == 0) {
                        like.setAttribute("class", "eva_like");
                    } else if (data1.ret == 1) {
                        like.setAttribute("class", "eva_like_set");
                        dislike.setAttribute("class", "eva_dislike");
                    }
                })
                .fail(function (data) {
                    console.log("error")
                });
        });
        dislike.addEventListener("click", e => {
            $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: '/evaluation',
                    type: 'POST',
                    data: {
                        "post_id": post_id,
                        "user_id": user_id,
                        "evaluation": -1
                    }
                })
                .done(function (data1) {
                    val.textContent = data1.val;

                    if (data1.ret == 0) {
                        dislike.setAttribute("class", "eva_dislike");
                    } else if (data1.ret == -1) {
                        like.setAttribute("class", "eva_like");
                        dislike.setAttribute("class", "eva_dislike_set");
                    }
                })
                .fail(function (data) {
                    console.log("error")
                });
        });
    }
}
