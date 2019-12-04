@extends('layouts.plantilla')

@section('content')


<div class="card shadow">
    <div class="card-header border-0">
      <div class="row align-items-center">
        <div class="col">
          <h3 class="mb-0">Médicos</h3>
        </div>
        <div class="col text-right">
          <a href="{{ url('/doctors/create') }}" class="btn btn-sm btn-primary">Registrar medico</a>
        </div>
      </div>

    <!--Se muestra la notificacion correspondiente a las acciones de ABM-->
    <div class="card-body">
      @if(session('notification'))
        <div class="alert alert-success" role="alert">
          {{session('notification')}}
        </div> 
      @endif
    </div>

    <div class="table-responsive">
      <!-- Tabla de especialidades -->
      <table class="table align-items-center table-flush">
        <thead class="thead-light">
          <tr>
            <th scope="col">Nombre</th>
            <th scope="col">DNI</th>
            <th scope="col">Correo electronico</th>
            <th scope="col">Opciones</th>
          </tr>
        </thead>
        <tbody>
            @foreach( $doctors as $doctor)
                <tr>
                  <td>
                    {{$doctor->name}}
                  </td>
                  <td>
                    {{$doctor->dni}}
                  </td>
                  <td>
                    {{$doctor->email}}
                  </td>
                  <td>
                   <!--
                   Se envia una peticion de tipo delete, mediante un form con metodo post.
                   Para que el enlace de tipo <a> y el boton de eliminar queden aliniados se coloca el enlace dentro del formulario.
                   -->                   
                    <form action="{{ url('doctors/'.$doctor->id)}}" method="POST">
                      @csrf
                      @method('DELETE')
                      <a href="{{ url('doctors/'.$doctor->id.'/edit')}}" class="btn btn-sm btn-success">Editar</a>
                      <button class="btn btn-sm btn-danger" class="subtmit">Eliminar</button>
                    </form>
                  </td>
                </tr>  
            @endforeach
         
        </tbody>
      </table>
    </div>
      <div class="col text-left"> 
          <a href="{{ url('/home') }}" class="btn btn-sm btn-default">
            Volver
          </a>
      </div>
  </div>
</div>
@endsection
