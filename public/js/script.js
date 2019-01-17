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

// фильтруем по категории
function categoryFilterChange(elem){
	$("#filterCategory").submit();	
}

/******* Calendar **********/
function ToggleCalendar(elem){
	if ($(".dateDay").css('display') != 'none'){
		$(".dateDay").slideUp('slow');
		$(".dateMonth").slideDown('slow');
	}else{
		$(".dateDay").slideDown('slow');
		$(".dateMonth").slideUp('slow');
	}
}
/***************************/

/******* Categories *********/
//нажимаем кнопку Изменить
function ShowTitleCategoryForm(elem){
	event.preventDefault();
	var form = elem.parentElement;
	CategoryFormChange(form);
}

function CancelTitleCategoryForm(elem){
	event.preventDefault();
	var form = elem.parentElement;
	CategoryFormChange(form);
}

function EditTitleCategoryForm(elem){
	event.preventDefault();
	var form = elem.parentElement;
	var index = form.getElementsByTagName("input")[2].value;
	var title = form.getElementsByTagName("input")[3].value;
	var div = form.parentElement;
	var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
	$.ajax({
		url: window.location.pathname + '/'+index,
		type: 'PUT',
		data: {'_token': CSRF_TOKEN, 'title': title},
		success: function (data) {
			form.getElementsByTagName("label")[0].innerHTML  = data;
			CategoryFormChange(form);
		}
	});
}

function CategoryFormChange(form){
	if (form.getElementsByTagName("input")[3].type == 'text')
		form.getElementsByTagName("input")[3].type = 'hidden';
	else
		form.getElementsByTagName("input")[3].type = 'text';
	form.getElementsByTagName("label")[0].hidden = !form.getElementsByTagName("label")[0].hidden;
	form.getElementsByClassName('btn-change')[0].hidden = !form.getElementsByClassName('btn-change')[0].hidden;
	form.getElementsByClassName('btn-delete')[0].hidden = !form.getElementsByClassName('btn-delete')[0].hidden;
	form.getElementsByClassName('btn-complete')[0].hidden = !form.getElementsByClassName('btn-complete')[0].hidden;
	form.getElementsByClassName('btn-cancel')[0].hidden = !form.getElementsByClassName('btn-cancel')[0].hidden;
}
/****************************/


/********** TASKS ***********/
function AddTask(){
	var form = document.forms.taskForm;
	if (form['title'].value == ""){
		form['title'].classList.add('errorInput');
	}else{
		form.submit();
	}
}

function TaskEdit(){
	let form = document.forms.taskForm;
	if (form['title'].value == ""){
		form['title'].classList.add('errorInput');
	}else{
		form.submit();
	}
}


/****************************/

/********* PROJECTS *********/
function SubmitProject(){
	let form = document.forms.projectForm;
	if (form['title'].value == ""){
		form['title'].classList.add('errorInput');
	}else{
		form.submit();
	}
}
function NonDeadlineChange(){
	let datetimepicker = document.getElementById('datetimepicker');

	datetimepicker.disabled = !datetimepicker.disabled;
	if (datetimepicker.disabled){
		datetimepicker.value = "";
	}else{
		let now = new Date();
		$('#datetimepicker').datepicker('update', 'now');
	}

}
/****************************/