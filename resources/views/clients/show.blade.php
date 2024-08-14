@extends('layout.main_template')
@section('content')
    <h2>Detalles del cliente:{{$client->name}} {{$client->last_name}} {{$client->s_lastname}}</h2>
    <br>
    <h3>Email: {{$client->email}}</h3>
    <h3>Telefono: {{$client->phone}}</h3>
    <h3>Estado:{{$client->state}}</h3>
    <h3>Pueblo: {{$client->twon}}</h3>
    <h3>Foto: {{$client->photo}}</h3>
    @endsection
