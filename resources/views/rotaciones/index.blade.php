@extends('layouts.main', ['activePage' => 'lista_rotaciones', 'titlePage' =>'LISTA DE ROTACIONES'])
@section('content')
<div class="content">
<div class="card">
    <div class="card-header card-header-danger">
        <h4 class="card-title">LISTA DE ROTACIONES</h4>
    </div>
        <table>
            <thead>
                <th>ID</th>
                <th>MOTORISTA</th>
                <th>ASIGNACION DE RUTA</th>
                <th>FECHA</th>
            </thead>
            <tbody>
                @foreach ($rotacion as $item)
                    <tr>
                         <td>{{ $item->id }}</td>
                         <td>{{ $item->motorista}}</td>
                         <td>{{ $item->asignacion_de_ruta }}</td>
                         <td>{{ $item->fecha}}</td>
                        <td>
                            <a href="{{ route ('rotaciones.edit', $item->id)}}" class="btn btn-green"> <i class="large material-icons">edit</i></a>
                        </td>
                        <td>
                            <form action="{{ route('rotaciones.destroy', $item->id)}} "method="POST">
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