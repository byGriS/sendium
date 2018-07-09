$(document).ready(function(){

});

function MenuOnClick(){
	$(".navigation ul").toggle("fast", function(){
		if ($(this).css('display') === 'none'){
			$(this).removeAttr('style');
		}
	});
}

function ArticleFormDelete(){
	event.preventDefault();
	var form = document.forms.form;
	var method = form.elements['_method'];
	method.value = 'delete';
	form.submit();
}
