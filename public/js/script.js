$(document).ready(function(){

});

function MenuOnClick(){
	$(".navigation ul").toggle("fast", function(){
		if ($(this).css('display') === 'none'){
			$(this).removeAttr('style');
		}
	});
}

function SidebarMenuOnClick(){
	$(".sidebarWrapper").toggle("fast", function(){
		if ($(this).css('display') === 'none'){
			$(this).removeAttr('style');
		}
	});
}

function newArticleOnClick(){
	var categorySelect = document.getElementById('categorySelect');
	var form = document.forms.newArticle;
	var categoryInput = document.createElement('input');
	categoryInput.setAttribute('name','category');
	categoryInput.setAttribute('value', categorySelect.value);
	form.appendChild(categoryInput);
	form.submit();
}

function ArticleFormDelete(){
	event.preventDefault();
	var form = document.forms.form;
	var method = form.elements['_method'];
	method.value = 'delete';
	form.submit();
}
