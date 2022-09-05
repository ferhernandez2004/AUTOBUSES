@extends('layouts.main', ['activePage' => 'lista_empleados', 'titlePage' =>'LISTA EMPLEADOS'])
@section('content')
<div class="content">
<div class="card">
    <div class="card-header card-header-danger">
        <h4 class="card-title">LISTA DE EMPLEADOS</h4>
    </div>
        <table>
            <thead>
                <th>ID</th>
                <th>NOMBRES</th>
                <th>APELLIDOS</th>
                <th>EMAIL</th>
                <th>TELEFONO</th>
                <th>DUI</th>
                <th>NIT</th>
                <th>DIRECCION</th>
                <th>LICENCIA</th>
                <th>ACCIONES</th>
            </thead>
            <tbody>
                @foreach ($motorista as $item)
                    <tr>
                         <td>{{ $item->id }}</td>
                         <td>{{ $item->nombres }}</td>
                         <td>{{ $item->apellidos }}</td>
                         <td>{{ $item->email}}</td>
                         <td>{{ $item->telefono }}</td>
                         <td>{{ $item->dui }}</td>
                         <td>{{ $item->nit }}</td>
                         <td>{{ $item->direccion }}</td>
                         <td>{{ $item->licencia }}</td>
                        <td>
                            <a href="{{ route ('motoristas.edit', $item->id)}}" class="btn green darken-4"> <i class="large material-icons">edit</i></a>
                        </td>
                        <td>
                            <form action="{{ route('motoristas.destroy', $item->id)}} "method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"><i class="material-icons">delete</i></button>
                            </form>
                            </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
   </div>
</div>
@endsection