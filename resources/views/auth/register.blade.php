@extends('layouts.index')

@section('content')

<div class="signin flex text-center">
	<form class="form-signin" method="post" action="{{ route('register') }}">
		@csrf
		<h1 class="h3 mb-3 font-weight-normal">Регистрация</h1>
		<label for="inputName" class="sr-only">Имя</label>
		<input type="text" id="inputName" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ old('name') }}" placeholder="Имя" required autofocus>

		<label for="inputEmail" class="sr-only">Email</label>
		<input type="email" id="inputEmail" name="email" class="form-control registryInput{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email" value="{{ old('email') }}" required>
		@if ($errors->has('email'))
		<span class="invalid-feedback" role="alert">
			<strong>{{ $errors->first('email') }}</strong>
		</span>
		@endif

		<label for="inputPassword" class="sr-only">Пароль</label>
		<input type="password" id="inputPassword" name="password" class="form-control registryPassword{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Пароль" required>
		@if ($errors->has('password'))
		<span class="invalid-feedback" role="alert">
			<strong>{{ $errors->first('password') }}</strong>
		</span>
		@endif

		<label for="confirmPassword" class="sr-only">Повторите пароль</label>
		<input type="password" id="confirmPassword" name="password_confirmation" class="form-control" placeholder="Повторите пароль" required>

		<button class="btn btn-lg btn-primary btn-block" type="submit">Зарегистрироваться</button>
		<a href="/">Уже зарегистрирован?</a>
	</form>
</div>
@endsection
