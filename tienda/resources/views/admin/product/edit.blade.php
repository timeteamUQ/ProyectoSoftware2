@extends('admin.template')

@section('content')

	<div class="container text-center">
		<div class="page-header">
			<h1>
				<i class="fa fa-shopping-cart"></i>
				PRODUCTOS <small></small>
			</h1>
		</div>

		<div class="row">
            <div class="col-md-offset-3 col-md-6">

                <div class="page">

                    @if (count($errors) > 0)
                        @include('admin.partials.errors')
                    @endif

                    {!! Form::model($product, array('route' => array('admin.product.update', $product->direccion))) !!}

                        <input type="hidden" name="_method" value="PUT">

												<div class="form-group">
														<label for="nombre">Nombre:</label>
														{!!
																Form::text(
																		'nombre',
																		null,
																		array(
																				'class'=>'form-control',
																				'placeholder' => 'Ingresa el nombre...',
																				'autofocus' => 'autofocus'
																		)
																)
														!!}
											
												<div class="form-group">
														<label for="cantidad">Cantidad:</label>
														{!!
																Form::text(
																		'cantidad',
																		null,
																		array(
																				'class'=>'form-control',
																				'placeholder' => 'Ingresa el nombre...',
																				'autofocus' => 'autofocus'
																		)
																)
														!!}
												</div>
												<div class="form-group">
														<label for="tipo">tipo:</label>
														{!!
																Form::text(
																		'tipo',
																		null,
																		array(
																				'class'=>'form-control',
																				'placeholder' => 'Ingresa el nombre...',
																				'autofocus' => 'autofocus'
																		)
																)
														!!}
												</div>

														<div class="form-group">
																<label for="material">Material:</label>
																{!!
																		Form::text(
																				'material',
																				null,
																				array(
																						'class'=>'form-control',
																						'placeholder' => 'Ingresa el nombre...',
																						'autofocus' => 'autofocus'
																				)
																		)
																!!}
														</div>
														<div class="form-group">
																<label for="alto">altura:</label>
																{!!
																		Form::text(
																				'alto',
																				null,
																				array(
																						'class'=>'form-control',
																						'placeholder' => 'Ingresa el nombre...',
																						'autofocus' => 'autofocus'
																				)
																		)
																!!}
														</div>
														<div class="form-group">
																<label for="ancho">anchura:</label>
																{!!
																		Form::text(
																				'ancho',
																				null,
																				array(
																						'class'=>'form-control',
																						'placeholder' => 'Ingresa el nombre...',
																						'autofocus' => 'autofocus'
																				)
																		)
																!!}
														</div>
														<div class="form-group">
																<label for="profundidad">profundidad:</label>
																{!!
																		Form::text(
																				'profundidad',
																				null,
																				array(
																						'class'=>'form-control',
																						'placeholder' => 'Ingresa el nombre...',
																						'autofocus' => 'autofocus'
																				)
																		)
																!!}
														</div>
														<div class="form-group">
																<label for="color">color:</label>
																{!!
																		Form::text(
																				'color',
																				null,
																				array(
																						'class'=>'form-control',
																						'placeholder' => 'Ingresa el nombre...',
																						'autofocus' => 'autofocus'
																				)
																		)
																!!}
														</div>
													 <div class="form-group">
															<label for="peso">Peso:</label>
															{!!
																	Form::text(
																			'peso',
																			null,
																			array(
																					'class'=>'form-control',
																					'placeholder' => 'Ingresa el extracto...',
																			)
																	)
															!!}
													</div>
														<div class="form-group">
																<label for="descripcion">Descripcion:</label>
																{!!
																		Form::textarea(
																				'descripcion',
																				null,
																				array(
																						'class'=>'form-control',
																						'placeholder' => 'Ingresa el extracto...',
																				)
																		)
																!!}
														</div>
														<div class="form-group">
																<label for="precio">Precio:</label>
																{!!
																		Form::text(
																				'precio',
																				null,
																				array(
																						'class'=>'form-control',
																						'placeholder' => 'Ingresa el precio...',
																				)
																		)
																!!}
														</div>
														<div class="form-group">
																<label for="imagen">Imagen:</label>
																{!!
																		Form::text(
																				'imagen',
																				null,
																				array(
																						'class'=>'form-control',
																						'placeholder' => 'Ingresa la url de la imagen...',
																				)
																		)
																!!}
														</div>



                        <div class="form-group">
                            {!! Form::submit('Actualizar', array('class'=>'btn btn-primary')) !!}
                            <a href="{{ route('admin.product.index') }}" class="btn btn-warning">Cancelar</a>
                        </div>

                    {!! Form::close() !!}

                </div>

            </div>
        </div>


	</div>

@stop
