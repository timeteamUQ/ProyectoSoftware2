<nav class="navbar navbar-default">
  <div class ="container-fluid">
    <div class = "navbar-header">

        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>

    <a class="navbar-brand main-title" href="{{route('home')}}">TiMe TeAm</a>

      {!!Form::open(['route'=>'store.search', 'method' => 'get', 'class' => 'navbar-form navbar-left', 'role' => 'search']) !!}
        <div class = "form-group">
          {!!Form::text('nombre', null, ['class'=>'form-control', 'placeholder'=>'busqueda en catalogo']) !!}

</div>
        <button type = "submit" class = "btn btn-info">buscar</button>
          {!! Form::close()!!}
      </form>

  </div>



  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <p class="navbar-text"></p>
    <ul class="nav navbar-nav navbar-right">
      


      @include('store.partials.menu-user')
      </ul>
    </div>

  </div>
</nav>
