@extends('admin.template')

@section('content')
    <div class="container text-center">
        <div class="page-header">
            <h1>
                <i class="fa fa-user"></i> USUARIOS{!!Form::open(['route'=>'store.sea', 'method' => 'get', 'class' => 'navbar-form navbar-left', 'role' => 'search']) !!}
        	        <div class = "form-group">
        	          {!!Form::text('nombre', null, ['class'=>'form-control', 'placeholder'=>'busqueda de usuario']) !!}

        	</div>
        	        <button type = "submit" class = "btn btn-info">buscar</button>
        	          {!! Form::close()!!}

            </h1>
        </div>

        <div class="page">

            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            {{--<th>Editar</th>--}}
                            <th>Eliminar</th>
                             <th>Identificacion</th>

                            <th>Nombre</th>
                            <th>Usuario</th>
                            <th>Correo</th>
                            <th>Tipo de Usuario</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                              {{-- <td>
                                    <a href="{{ route('admin.user.edit', $user) }}" class="btn btn-primary">
                                        <i class="fa fa-pencil-square-o"></i>
                                    </a>
                                </td>--}}
                                <td>
                                    {!! Form::open(['route' => ['admin.user.destroy', $user]]) !!}
        								<input type="hidden" name="_method" value="DELETE">
        								<button onClick="return confirm('Eliminar registro?')" class="btn btn-danger">
        									<i class="fa fa-trash-o"></i>
        								</button>
        							{!! Form::close() !!}
                                </td>
                                    <td>{{ $user->identificacion }}</td>
                                <td>{{ $user->nombre }}</td>
                                <td>{{ $user->user }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->tipo }}</td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <a href="{{ route('admin.user.create') }}" class="btn btn-info">
                    <i class="fa fa-plus-circle"></i> Crear nuevo usuario
                </a>
            </div>

            <hr>

            <?php echo $users->render(); ?>

        </div>
    </div>
@stop
