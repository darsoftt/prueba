@extends('layouts.app')

@section('content')

<br><br>

<form action="" method="POST">
<label for="">Nombre</label>
<input type="text" name="nombre">
<label for="">Precio</label>
<input type="text" name="precio">
<label for="">Cantidad</label>
<input type="text" name="cantidad">
</form>

<table class="table">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Cantidad</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tabla as $fila)
        <tr>
            <td>{{ $fila->Nombre }}</td>
            <td>{{ $fila->Cantidad }}</td>
            <td>{{ $fila->Precio }}</td>

        </tr>
        @endforeach
    </tbody>
</table>


@endsection

