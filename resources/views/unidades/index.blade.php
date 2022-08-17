@extends('layouts.main')
@section('content')
<head>
    <div class="container">
     <style type="text/css">
         #tabla {
          width: 800px;
          height: 900px;
          margin: auto;
          border :#D9D9D9  2px solid;
          border-radius: 20px;
          background-color: #D9D9D9;
         }
      </style>
 
    </div>
     </head>>
        <div class="container center">
            <h1>Listado de Unidades</h1>
        <div class="row" id="tabla">
        <table>
            <thead>
                <th>ID</th>
                <th>MATRICULA</th>
                <th>MODELO</th>
                <th>MARCA</th>
                <th>MODELO DEL MOTOR</th>
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
                            <a href="{{ route ('unidades.edit', $item->id)}}" class="btn green darken-4"> <i class="large material-icons">edit</i></a>
                        </td>
                        <td>
                            <form action="{{ route('unidades.destroy', $item->id)}} >
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn red darken-4"><i class="material-icons">delete</i></button>
                            </form>
                            </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection