@extends('layouts.main', ['activePage' => 'lista_unidades', 'titlePage' =>'LISTA UNIDADES'])
@section('content')
<div class="content">
<div class="card">
    <div class="card-header card-header-danger">
        <h4 class="card-title">LISTA DE UNIDADES</h4>
    </div>
        <table>
            <thead>
                <th>ID</th>
                <th>MATRICULA</th>
                <th>MODELO</th>
                <th>MARCA</th>
                <th>MODELO MOTOR</th>
                <th>COMBUSTIBLE</th>
                <th>ACCIONES</th>
            </thead>
            <tbody>
                @foreach ($unidad as $item)
                    <tr>
                         <td>{{ $item->id }}</td>
                         <td>{{ $item->matricula }}</td>
                         <td>{{ $item->modelo }}</td>
                         <td>{{ $item->marca }}</td>
                         <td>{{ $item->modelo_del_motor }}</td>
                         <td>{{ $item->combustible }}</td>
                        <td>
                            <a href="{{ route ('unidades.edit', $item->id)}}" class="btn btn-green"> <i class="large material-icons">edit</i></a>
                        </td>
                        <td>
                            <form action="{{ route('unidades.destroy', $item->id)}} "method="POST">
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