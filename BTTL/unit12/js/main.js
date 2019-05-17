$('#span1').parents('body').css('background','green');


// $('div').find('span').css('color','white');

// $('div ul .item2').children('b').css('color','red');
// $('#span1').next().css('color', 'blue');
// $('#span1').nextUntil('#span4').css('color', 'blue');
//$('.span').nextAll().css('color','green')
 //$('#span1').siblings('span4').css('color', 'orange');

 // $('#span4').siblings().eq(0).css('color','red');
 $('#span1').siblings().filter('.span').css('color','white');
// $('#span1').siblings().not('.span')