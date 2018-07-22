<div class="sidebar">
	<div class="minDate center">28.06</div>
	<div class="minMenu" onclick="SidebarMenuOnClick();"></div>
	<div class="sidebarWrapper">
		<div class="sidebarDate">
			<div class="sidebarDay">
				28
			</div>
			<div class="sidebarMonth">
				Июнь 2018
			</div>
		</div>
		<div class="flex flexDirectionColumn flexAlignItemsCenter">
			<div class="sidebarBlock">
				Категория
				<select id="categorySelect" class="custom-select form-control-sm flex1">
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