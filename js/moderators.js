// var link = document.querySelector('.link');
// link.addEventListener("mouseover", function (event) {
//     // マウスオーバー時の処理
//     document.querySelector('.details').style.display = "block";
// },function(){
//     document.querySelector('.details').style.display = "none";
// });
// // }, false);

// $(function(){
//     $('.link').hover(function(){
//         $('.detiles').css('display','block');
//     },function(){
//         $('.detiles').css('display','none');
//     });
// });

$(function(){
    $('.link')
        .mouseover(function(e){
            $('.detiles').css('display','block');
        })
        .mouseout(function(e){
            $('.detiles').css('display','none');
        });

});