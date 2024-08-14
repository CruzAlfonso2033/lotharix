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
        background-color: rgb(163, 224, 124);
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
    <h2>Actualizar Producto:{{$client->name}}</h2>
    <br>
    <form action="{{route('clients.update', $client->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        	<label for="">Nombre</label>
            <input type="text" name="name" value="{{$client->name}}">
            <label for="">Apellido paterno</label>
            <input type="text" name="last_name" value="{{$client->last_name}}">
            <label for="">Apellido materno</label>
            <input type="text" name="s_lastname" value="{{$client->s_lastname}}">
            <label for="">Email</label>
            <input type="text" name="email" value="{{$client->email}}">
            <label for="">Telefono</label>
            <input type="number" name="phone" value="{{$client->phone}}">
            <label for="">Estado</label>
            <input type="text" name="state" value="{{$client->state}}">
            <label for="">Municipio</label>
            <input type="text" name="twon" value="{{$client->twon}}">
            <br>
            <label for="">Imagen</label>
            <input type="file" name="photo">
    <button type="submit">Actualizar</button>
    </form>
@endsection