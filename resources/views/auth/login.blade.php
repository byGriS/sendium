@extends('layouts.index')

@section('content')
<div class="signin flex text-center">
	<form class="form-signin" method="post" action="{{ route('login') }}">
		<h1 class="titleService">Sendium</h1>
		{{csrf_field()}}
		<label for="inputEmail" class="sr-only">Email</label>
		<input type="email" id="inputEmail" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" placeholder="Email" required autofocus>
		<label for="inputPassword" class="sr-only">Пароль</label>
		<input type="password" id="inputPassword" name="password" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Пароль" required>
		@if ($errors->has('email'))
		<span class="invalid-feedback" role="alert">
			<strong>{{ $errors->first('email') }}</strong>
		</span>
		@endif

		<button class="btn btn-lg btn-primary btn-block" type="submit">Вход</button>
		<a href="{{route('register')}}">Зарегистрироваться </a>
		<br/>
		<a href="{{ route('password.request') }}">Забыл пароль?</a>
	</form>
</div>
@endsection
