// $(function() {
//     var arr = [];
//     $(".displayimage").each(function() {
//         arr.push($(this).html());
//     });
//     arr.sort(function() {
//         return Math.random() - Math.random();
//     });
//     $("#sample").empty();
//     for(i=0; i < arr.length; i++) {
//         $(".displayimage").append('<div>' + arr[i] + '</div>');
//     }
// });

$(function () {
  var $body = $('body');
  $('#js__sideMenuBtn').on('click', function () {
    $body.toggleClass('side-open');
    $('#js__overlay').on('click', function () {
      $body.removeClass('side-open');　　
    });
  });
});
$(function() {
    $('.grid').masonry({
        columnWidth: 160
    });
});
