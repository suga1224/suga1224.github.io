
//$('div.test').eq(0).html('hoge');
/*
var div = $('<div></div>').html('hoge');
$('body').append(div);
*/

$('div').css('width','200px')
        .css('height','200px')
        .css('backgroundColor','#000000');
$('body').append(div);














/*　１０個のボックスを作る
for(var i = 0; i<10; i++)
{
  var div = document.createElement('div');
  var w = Math.random() * 300;
  var h = 50;
  div.style.backgroundColor = '#000000';
  div.style.width = w + 'px';
  div.style.height =h+'px';
  div.style.marginBottom = '5px';
  div.style.marginLeft = '100px';
  document.getElementsByTagName('body')[0].appendChild(div);
}
*/
