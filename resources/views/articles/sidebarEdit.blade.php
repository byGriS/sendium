<div class="sidebar">
	@include('layouts.calendar')
	<div class="minMenu" onclick="SidebarMenuOnClick();"></div>
	<div class="sidebarWrapper">
		<div class="flex flexDirectionColumn flexAlignItemsCenter">
			<div class="sidebarBlock">
				Категория
				<select id="categorySelect" class="custom-select form-control-sm flex1">
					<option>Без категории</option>
					@foreach($categories as $category)
					<option @if($category->id == $article->category_id) selected @endif>{{$category->title}}</option>
					@endforeach
				</select>	
			</div>
			<div class="sidebarBlock">
				<button type="submit" class="width100 btn btn-sm btn-success" onClick="newArticleOnClick();">Изменить</button>	
			</div>
			<div class="sidebarBlock">
				<button class="width100 btn btn-sm btn-danger" onClick="ArticleFormDelete();">Удалить</button>
			</div>
		</div>
	</div>
</div>