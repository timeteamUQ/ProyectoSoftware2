@extends('store.template')

@section('content')
	<div class="container text-center">
		<div class="page-header">
			<h1><i class="fa fa-user"></i> Iniciar Sesion</h1>
		</div>

		<div class="row">
			<div class="col-md-offset-4 col-md-4">
				<div class="page">

					@include('store.partials.errors')

					<form method="POST" action="/auth/login">
					    {!! csrf_field() !!}

					    <div class="form-group">
					        <label for="email">Correo electronico</label>
					        <input class="form-control" type="email" name="email" value="{{ old('email') }}">
					    </div>

					    <div class="form-group">
					        <label for="password">Contraseña</label>
					        <input class="form-control" type="password" name="password" id="password">
					    </div>


					    <div class="form-group">
					        <button class="btn btn-success btn-block" type="submit">Iniciar Sesion</button>
					    </div><hr>
							<a href="{{ route('register-get') }}" class="btn btn-primary btn-block">
							 Registrarse
							</a>
					</form>
				</div>
			</div>
		</div>
	</div>
@stop
