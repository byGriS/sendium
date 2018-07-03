<div class="navigation">
	<div class="minMenu" onclick="MenuOnClick();"></div>
	<ul>
		@foreach($navigation as $menuItem)
			@if ($menuItem->title == "splitter")
				<hr/>
			@else
				<li><a href="{{route($menuItem->route)}}">{{$menuItem->title}}</a></li>
			@endif
		@endforeach
	</ul>
</div>