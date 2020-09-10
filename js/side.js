// $(function(){
// $('.js-modal-open').on('click',function(){
//     console.log("aaaa");
//     // $(".modal__bg,.modal_content").fadeIn();
//     var navClass = $(this).attr("class"),
//         href = $(this).attr("href");

//         $(href).fadeIn();
//     // $('.js-modal').fadeIn(3200);
//     $(this).addClass("open");
//     return false;
// });

// $(".js-modal-close").click(function(){
//     $(this).parents(".js-modal").fadeOut();
//     $("js-modal-open").removeClass("open");
//     return false;
// });
// });



$(".cbtn").click(function(){
    $('.add').css('visibility','visible');
    return false;
});

$(document).on('click', function(e) {
    if (!$(e.target).closest('.add').length) {
        $('.add').css('visibility','hidden');
    }
});

let bool1 = true;
$(".favorite").click(function(){
    if(bool1){
        $('.add').css('visibility','hidden');
        $(".favorite").text("お気に入りから削除");
    }else{
        $('.add').css('visibility','hidden');
        $(".favorite").text("お気に入りに追加");
    }
    bool1 = !bool1;
})

let bool2 = true;
$('.see_next').click(function(){
    if(bool2){
        $('.filter').css('overflow','visible');
        $('.filter').css('max-height','initial');
    }else{
        $('.filter').css('overflow','hidden');
        $('.filter').css('max-height','170px');
    }
    bool2 = !bool2;
});


     

