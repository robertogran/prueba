@extends('superheroes.layout')

@section('content')

<h1 class="text-center mb-5">Editar Superhéroe</h1>
<hr>
<div class="container">

@if (count($errors) > 0)
<div class="alert alert-danger">
<strong>Whoops!</strong> Hay campos vacios<br><br>
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif

<!-- HTML Form (wrapped in a .bootstrap-iso div) -->
<div class="bootstrap-iso">
 <div class="container-fluid">
  <div class="row">
   <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
    <form action="{{ route('superheroes.update', $superheroe->id) }}" method="post">
     @csrf
     @method('PUT')

     <div class="form-group">
      <label class="control-label " for="nombre">
       Nombre
      </label>
      <input class="form-control" name="nombre" value="{{ $superheroe->nombre }}" placeholder="Inserta el nombre" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="poder">
       Poder
      </label>
      <input class="form-control" name="poder" value="{{ $superheroe->poder }}" placeholder="Inserta el creador" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="creador">
       Creador
      </label>
      <input class="form-control" name="creador" value="{{ $superheroe->creador }}" placeholder="inserta el poder" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="villano">
       Villano
      </label>
      <input class="form-control" name="villano" value="{{ $superheroe->villano }}" placeholder="Inserta el villano" type="text"/>
     </div>
     <div class="form-group">
      <div>
       <button class="btn btn-primary" name="submit" type="submit">
        Actualizar
       </button>
       <a class="btn btn-info float-right" href="{{ route('superheroes.index') }}">Cancelar</a>
      </div>
     </div>
    </form>
   </div>
   <div class="d-none d-lg-block col-lg-6 col-md-12">
    <img src="{{ asset('images/superheroe.png') }}" class="img-fluid" alt="" width="600">
  </div>
  </div>
 </div>
</div>

</div>
@endsection


