@extends('layouts.plantilla')

@section('content')
  
<div class="card shadow">
    <div class="card-header border-0">
      <div class="row align-items-center">
        <div class="col">
          <h3 class="mb-0">Registrar nueva especialidad</h3>
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
    	<form action="{{ url('specialties') }}" method="post">
    		@csrf
    		<div class="form-group">
    			<label for="name">Nombre de la especialidad</label>
    			<input type="text" name="name" class="form-control" value="{{ old('name')}}" required>
    		</div>

    		<div class="form-group">
    			<label for="description">Descripcion</label>
    			<input type="text" name="description" class="form-control" value="{{ old('description')}}">
    		</div>      
	          <button type="submit" class="btn btn-sm btn-primary">
	          	Guardar
	          </button>
          </form>
    	</div>
	</div>
@endsection