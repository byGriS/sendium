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
	var form = document.forms.articleForm;
	var categoryInput = document.createElement('input');
	categoryInput.setAttribute('type','hidden');
	categoryInput.setAttribute('name','category');
	categoryInput.setAttribute('value', categorySelect.value);
	form.appendChild(categoryInput);
	if (form['title'].value == ""){
		form['title'].classList.add('errorInput');
	}else{
		form.submit();
	}
}

function ArticleFormDelete(){
	event.preventDefault();
	var form = document.forms.articleForm;
	var method = form.elements['_method'];
	method.value = 'delete';
	form.submit();
}

// убираем красную границу с поля ввода (убираем класс Ошибка)
function InputFocus(elem){
	elem.classList.remove('errorInput');
}
