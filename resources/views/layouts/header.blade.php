<div class="header flex flexJustifyContentSpaceBetween">
	<div class="headerTitle ">
		
	</div>
	<div class="rightControl">
		<form action="{{route('logout')}}" method="post">
			{{csrf_field()}}
			<label>{{$user->name}}</label>
			<button class="btn btn-sm btn-dark" type="submit">Выйти</button>
		</form>
	</div>
</div>