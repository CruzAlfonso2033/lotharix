@extends('layout.main_template')
@section('content')
    <h2>Detalles del Producto:{{$product->nameProduct}}</h2>
    <br>
    <h3>Cantidad: {{$product->stock}}</h3>
    <h3>Precio:{{$product->unit_price}}</h3>
    <h3>Imagen: {{$product->image}}</h3>

    @endsection
