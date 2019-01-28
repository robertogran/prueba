@extends('superheroes.layout')

@section('content')

<h1 class="text-center mt-3">SUPERHÉROES</h1>

<hr>

<div class="container">
<a class="btn btn-primary mb-3" href="{{route('superheroes.create')}}">Crear Superhéroe</a>
<a class="btn btn-primary mb-3 float-right" href="{{route('superheroes.create')}}">Imprimir</a>

@if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif

<table class="table table-sm table-striped" data-toggle="dataTable" data-form="deleteForm">
  <thead class="table-primary">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Poder</th>
      <th scope="col">Creador</th>
      <th scope="col">Villano</th>
      <th class="text-center" colspan="2" scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach($superheroes as $superheroe)
        <tr>    
        <th scope="row">{{ $superheroe->id}}</th>
        <td>{{ $superheroe->nombre}}</td>
        <td>{{ $superheroe->poder}}</td>
        <td>{{ $superheroe->creador}}</td>
        <td>{{ $superheroe->villano}}</td>
        <td><a class="btn btn-info" href="{{ route('superheroes.edit', $superheroe->id) }}"><i class="far fa-edit"></i></a></td>
        <td>
            <a class="btn btn-danger bt-3" data-toggle="modal" data-target="#confirmarBorrar-{{$superheroe->id}}"><i class="fas fa-trash-alt"></i></i> </a>
          </td>
        </tr>
        @include('superheroes.confirmarBorrar')
    @endforeach
  </tbody>
</table>{{$superheroes->links()}}
</div>


@endsection


