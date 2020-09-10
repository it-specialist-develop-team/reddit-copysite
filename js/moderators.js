$(function(){
    $('.link')
        .mouseover(function(e){
            $('.details').css('display','block');
        })
        .mouseout(function(e){
            $('.details').css('display','none');
        });
});

$(function(){//要素の何番目かを取得
    $('.moderatorname').mouseover(function(e){
        var idx = $(this).index();
        console.log(idx);
    });
})

//eq