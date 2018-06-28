$(document).ready(function(){

});

function MenuOnClick(){
	$(".navigation ul").toggle("fast", function(){
		if ($(this).css('display') === 'none'){
			$(this).removeAttr('style');
		}
	});
}