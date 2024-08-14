@extends('layout.main_template')
@section('content')
    

<style>
    *{box-sizing: border-box}

    form{
        width: 300px;
        padding-inline: 20px ;
        padding-block:20px ;
        border-radius:12px;
        margin-block: Auto;
        margin-inline: Auto;
        background-color: goldenrod;
    }

    form label{
        width: 140px;
        height: 10px;
        font-weight: bold;
        font-family: 'Courier New', Courier, monospace;
        display: inline-block;
    }

    form button{
        width: 100%;
        padding: 8px 12px;
        margin-block-start: 30px;
        border-radius: 3px;
        border: 2px solid black;
        display: block;
        color: rgb(8, 8, 8);
        font-weight: bold;
        background-color:
    }
</style>
    <h2>Registrar cliente</h2>
    <br>
    <form action="{{route('clients.store')}}" method="POST">
        @csrf
        	<label for="">Nombre</label>
            <input type="text" name="name" required>
            <label for="">Apellido paterno</label>
            <input type="text" name="last_name" required>
            <label for="">Apellido materno</label>
            <input type="text" name="s_lastname" required>
            <label for="">Email</label>
            <input type="text" name="email" required>
            <label for="">Telefono</label>
            <input type="number" name="phone" required>
            <label for="">Estado</label>
            <input type="text" name="state" required>
            <label for="">Ciudad</label>
            <input type="text" name="twon" required>

            </select>
    <button type="submit">Registrar</button>
    </form>
@endsection