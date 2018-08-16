<form method="post" action="{{route('category.destroy', $category->id)}}" class="flex flexAlignItemsCenter">
	@method('DELETE')
	@csrf
	<input type="hidden" name="id" value="{{$category->id}}"/>
	<input class="flex1 form-control" type="hidden" name="title" value="{{$category->title}}">
	<label class="flex1">{{$category->title}}</label>
	<button class="btn-change btn btn-sm btn-success" onclick="ShowTitleCategoryForm(this);">Изменить</button>
	<button class="btn-delete btn btn-sm btn-danger">Удалить</button>
	<button class="btn-complete btn btn-sm btn-primary" hidden onclick="EditTitleCategoryForm(this);">Применить</button>
	<button class="btn-cancel btn btn-sm btn-danger" hidden onclick="CancelTitleCategoryForm(this);">Отменить</button>
</form>