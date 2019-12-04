@extends('layouts.plantilla')

@section('content')
  
<div class="card shadow">
    <div class="card-header border-0">
      <div class="row align-items-center">
        <div class="col">
          <h3 class="mb-0">Edicion de especialidad</h3>
        </div>
        <div class="col text-right">
          <a href="{{ url('specialties') }}" class="btn btn-sm btn-primary">
            Cancelar y volver
          </a>
        </div>
      </div>
     </div> 
    <div class="card-body">
      <!--Validaciones del lado del cliente, si encuentra uno o mas errores los muestra-->
      @if ($errors->any())
        <div class="alert alert-danger" role="alert">
          <ul>
            @foreach($errors->all() as $error)
              <li>{{$error}}</li>
            @endforeach
          </ul>
        </div>
      @endif
      <form action="{{ url('specialties/'.$specialty->id) }}" method="post">
        @csrf
        @method('PUT') <!--Permite enviar una peticion put mediante un form con metodo post.-->
        <div class="form-group">
          <label for="name">Nombre de la especialidad</label>
          <!--
          Funcion old muestra un valor antiguo del campo name en caso de fallar una regla de validacion y recibe como segundo parametro al campo name de un registro almacenado en la tabla specialty identificado con un id. 
          -->
          <input type="text" name="name" class="form-control" value="{{ old('name', $specialty->name) }}" required>
        </div>

        <div class="form-group">
          <label for="description">Descripcion</label>
          <input type="text" name="description" class="form-control" value="{{ old('description', $specialty->description)}}">
        </div>      
            <button type="submit" class="btn btn-sm btn-primary">
              Guardar
            </button>
          </form>
      </div>
  </div>
@endsection