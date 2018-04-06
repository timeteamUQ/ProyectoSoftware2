@extends('admin.template')

@section('content')

	<div class="container text-center">
		<div class="page-header">
			<h1>
				<i class="fa fa-shopping-cart"></i>
				PRODUCTOS{!!Form::open(['route'=>'store.seac', 'method' => 'get', 'class' => 'navbar-form navbar-left', 'role' => 'search']) !!}
	        <div class = "form-group">
	          {!!Form::text('nombre', null, ['class'=>'form-control', 'placeholder'=>'busqueda en productos']) !!}

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
							<th>Editar</th>
						

							<th>Nombre</th>
							<th>Ref</th>

              <th>Tipo</th>
              	<th>Eliminar</th>

						</tr>
					</thead>
					<tbody>
						@foreach($products as $product)
							<tr>
								<td>
									<a href="{{ route('admin.product.edit', $product->direccion) }}" class="btn btn-primary">
										<i class="fa fa-pencil-square"></i>
									</a>
								</td>
							

								<td>{{ $product->nombre }}</td>
								<td>{{ $product->id }}</td>
								
                <td>{{ $product->tipo}}</td>
                	<td>
                                    {!! Form::open(['route' => ['admin.product.destroy', $product->direccion]]) !!}
        								<input type="hidden" name="_method" value="DELETE">
        								<button onClick="return confirm('Eliminar registro?')" class="btn btn-danger">
        									<i class="fa fa-trash-o"></i>
        								</button>
        							{!! Form::close() !!}
                                </td>
							</tr>
						@endforeach
					</tbody>
				</table>

				<a href="{{ route('admin.product.create') }}" class="btn btn-warning"><i class="fa fa-plus-circle"></i>    Agregar Nuevo Producto</a>

			</div>
  <?php echo $products->render(); ?>
		</div>

	</div>

@stop
