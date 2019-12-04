@extends('layouts.plantilla')

@section('content')
  
<div class="card shadow">
    <div class="card-header border-0">
      <div class="row align-items-center">
        <div class="col">
          <h3 class="mb-0">Editar datos personales</h3>
        </div>
        <div class="col text-right">
          <a href="{{ url('doctors') }}" class="btn btn-sm btn-primary">
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

      <form action="{{ url('doctors/'.$doctor->id) }}" method="post">
        @csrf
        @method('PUT') <!--Permite enviar una peticion put mediante un form con metodo post.-->
        <div class="form-group">
          <label for="name">Nombres y Apellidos</label>
          <!--
          Funcion old muestra un valor antiguo del campo name en caso de fallar una regla de validacion y recibe como segundo parametro al campo name de un registro almacenado en la tabla specialty identificado con un id. 
          -->
          <input type="text" name="name" class="form-control" value="{{ old('name', $doctor->name) }}" required>
        </div>

        <div class="form-group">
          <label for="dni">Documento Nacional de Identidad</label>
          <input type="text" name="dni" class="form-control" value="{{ old('dni', $doctor->dni)}}">
        </div>      

        <div class="form-group">
          <label for="email">Correo electronico</label>
          <input type="text" name="email" class="form-control" value="{{ old('email', $doctor->email)}}">
        </div>

        <div class="form-group">
          <label for="address">Direccion</label>
          <input type="text" name="address" class="form-control" value="{{ old('address', $doctor->address)}}">
        </div>

        <div class="form-group">
          <label for="phone">Telefono de contacto</label>
          <input type="text" name="phone" class="form-control" value="{{ old('phone', $doctor->phone)}}">
        </div>      


            <button type="submit" class="btn btn-sm btn-primary">
              Guardar
            </button>
          </form>
      </div>
  </div>
@endsection