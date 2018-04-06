@extends('store.template')

@section('content')

    <div class="container text-center">

        <div class="page-header">
            <h1>
                <i class="fa fa-user"></i> USUARIOS <small></small>
            </h1>
        </div>

        <div class="row">
            <div class=" col-md-4">
                <div class="page">

                    @if (count($errors) > 0)
                        @include('admin.partials.errors')
                    @endif

                    {!! Form::model($user, array('route' => array('admin.user.update', $user))) !!}
                    <input type="hidden" name="_method" value="PUT">

                    <div class="form-group">
                        <label for="tipod">Tipo d:</label>

                        {!! Form::radio('tipod', 'documento', true) !!} documento
                        {!! Form::radio('tipod', 'NIT') !!} NIT
                    </div>
                    <div class="form-group">
                        <label for="identificacion">identificacion:*</label>

                        {!!
                            Form::text(
                                'identificacion',
                                null,
                                array(
                                    'class'=>'form-control',
                                    'placeholder' => 'Ingresa identificacion ...',
                                    'autofocus' => 'autofocus',
                                    'required' => 'required'
                                )
                            )
                        !!}
                    </div>
                        <div class="form-group">
                            <label for="nombre">Nombre completo:*</label>

                            {!!
                                Form::text(
                                    'nombre',
                                    null,
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => 'Ingresa el nombre  ...',
                                        'autofocus' => 'autofocus',
                                        'required' => 'required'
                                    )
                                )
                            !!}
                        </div>
                        <div class="form-group">
                            <label for="telefonor">telefono residencia:*</label>

                            {!!
                                Form::text(
                                    'telefonor',
                                    null,
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => 'Ingresa el telefono residencia ...',
                                        'autofocus' => 'autofocus',
                                        'required' => 'required'
                                    )
                                )
                            !!}
                        </div>

                        <div class="form-group">
                            <label for="telefonoc">telefono celular:*</label>

                            {!!
                                Form::text(
                                    'telefonoc',
                                    null,
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => 'Ingresa el numero celular ..',
                                        'autofocus' => 'autofocus',
                                        //'required' => 'required'
                                    )
                                )
                            !!}
                        </div>
                        <div class="form-group">
                            <label for="direccionr">Direccion:*</label>

                            {!!
                                Form::text(
                                    'direccionr',
                                    null,
                                    array(
                                      'class'=>'form-control',
                                      'placeholder' => 'Ingresa la direccion...',
                                      'autofocus' => 'autofocus',
                                      'required' => 'required'
                                    )
                                )
                            !!}
                        </div>

                        </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="page">
                        <div class="form-group">
                            <label for="ciudad">ciudad:*</label>

                            {!!
                                Form::text(
                                    'ciudad',
                                    null,
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => 'Ingresa la ciudad...',
                                        'autofocus' => 'autofocus',
                                        'required' => 'required'
                                    )
                                )
                            !!}
                        </div>
                        <div class="form-group">
                            <label for="departamento">departamento:*</label>

                            {!!
                                Form::text(
                                    'departamento',
                                    null,
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => 'Ingresa el departamento ...',
                                        'autofocus' => 'autofocus',
                                        'required' => 'required'
                                    )
                                )
                            !!}
                        </div>
                        <div class="form-group">
                            <label for="pais">pais:*</label>

                            {!!
                                Form::text(
                                    'pais',
                                    null,
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => 'Ingresa el pais...',
                                        'autofocus' => 'autofocus',
                                        'required' => 'required'
                                    )
                                )
                            !!}
                        </div>
                        <div class="form-group">
                            <label for="profesion">profesion:</label>

                            {!!
                                Form::text(
                                    'profesion',
                                    null,
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => 'Ingresa la profesion...',
                                        'autofocus' => 'autofocus',
                                        //'required' => 'required'
                                    )
                                )
                            !!}
                        </div>
                        <div class="form-group">
                            <label for="email">Correo:*</label>

                            {!!
                                Form::text(
                                    'email',
                                    null,
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => 'Ingresa el correo...',
                                        'required' => 'required'
                                    )
                                )
                            !!}
                        </div>

                      </div>
                      </div>
                      <div class="row">
                          <div class="col-md-4">
                              <div class="page">
                        <div class="form-group">
                            <label for="user">Usuario:*</label>

                            {!!
                                Form::text(
                                    'user',
                                    null,
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => 'Ingresa el nombre de usuario...',
                                        'required' => 'required'
                                    )
                                )
                            !!}
                        </div>

                        <div class="form-group">
                            <label for="password">contraseña:</label>

                            {!!
                                Form::password(
                                    'password',
                                    array(
                                        'class'=>'form-control',

                                    )
                                )
                            !!}
                        </div>

                        <div class="form-group">
                            <label for="confirm_password">Confirmar contraseña:</label>

                            {!!
                                Form::password(
                                    'password_confirmation',
                                    array(
                                        'class'=>'form-control',

                                    )
                                )
                            !!}
                        </div>





                        <div class="form-group">
                            {!! Form::submit('Actualizar', array('class'=>'btn btn-success')) !!}
                            <a href="{{ route('admin.user.index') }}" class="btn btn-default">Cancelar</a>
                        </div>

                    {!! Form::close() !!}

                </div>

            </div>
        </div>

    </div>

@stop
