
@extends('layouts.app')

@section('content')
    


    <h2>SUMAR 2 NUMEROS</h2>
    <br>

    <form action="{{ url('/suma') }}" method="post">
        @csrf
        <label for="">Numero 1</label>
        <input type="text" name="num1">
        <br>
        <br>

        <label for="">Numero 2</label>
        <input type="text" name="num2">
        <br>
        <br>

        <button type="submit" name="suma">Suma</button>
    </form>

    @if (isset($resultado))
    <h3>El resultado essss: <strong>{{ $resultado }}</strong></h3>
    @endif

@endsection