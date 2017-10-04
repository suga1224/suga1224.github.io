$(function ()
{
	var body = $('body');

	// メニューボタンをクリックしたとき
	$('#js__sideMenuBtn').on('click', function ()
	{
		body.toggleClass('side-open');
	});

	// オーバレイをクリックしたとき
	$('#js__overlay').on('click', function ()
	{
		body.removeClass('side-open');
	});

	$('.grid').masonry({
		columnWidth: 160
	});
});
