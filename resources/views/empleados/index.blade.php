
 @extends('layouts.app')

 @section('content')
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<table class="table table-bordered table-hover">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Foto</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido Paterno</th>
            <th scope="col">Apellido Materno</th>
            <th scope="col">Correo</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($empleados as $empleado)
        <tr>
            <td scope="row">{{$loop->iteration}}</td>
            <th><img src="{{asset('storage').'/'.$empleado->Foto}}" alt="" width="200"></th>
            <th>{{$empleado->Nombre}}</th>
            
            <th>{{$empleado->ApellidoPaterno}}</th>
            <th>{{$empleado->ApellidoMaterno}}</th>
            <th>{{$empleado->Correo}}</th>
            <th>
                <a class="btn btn-primary" href="{{url('/empleados/'.$empleado->id.'/edit')}}">Editar</a>
         
            <form action="{{ url('/empleados/'.$empleado->id)}}" method="post">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button class="btn btn-danger" type="submit" onclick="return confirm('¿Borrar?')">Borrar</button>
            </form>
            </th>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection