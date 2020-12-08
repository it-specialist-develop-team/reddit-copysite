

var jscrollOption = {
    // debug:true,
    loadingHtml: '読み込み中', // 記事読み込み中の表示、画像等をHTML要素で指定することも可能
    autoTrigger: true, // 次の表示コンテンツの読み込みを自動( true )か、ボタンクリック( false )にする
    padding: 20, // autoTriggerがtrueの場合、指定したコンテンツの下から何pxで読み込むか指定
    // nextSelector: 'a.next',
    contentSelector: '.scroll' // 読み込む範囲を指定、指定がなければページごと丸っと読み込む
}

$(function(){
    $('.scroll').jscroll(jscrollOption);
});

// $(document).ready(function() {
//     $('a.next').hide();
//     $('.scroll').jscroll({
//         // debug:true,
//         loadingHtml: '読み込み中', // 記事読み込み中の表示、画像等をHTML要素で指定することも可能
//         autoTrigger: true, // 次の表示コンテンツの読み込みを自動( true )か、ボタンクリック( false )にする
//         // padding: 0, // autoTriggerがtrueの場合、指定したコンテンツの下から何pxで読み込むか指定
//         // nextSelector: 'a.next',
//         contentSelector: '.scroll', // 読み込む範囲を指定、指定がなければページごと丸っと読み込む
//         callback: function() {
//             $('a.next').remove();
//         }
//     });
// });

