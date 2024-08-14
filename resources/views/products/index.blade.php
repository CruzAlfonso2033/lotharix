@extends('layout.main_template')
@section('content')
    <h2>Pagina Producto</h2>
    <br>
    <button><a href="{{route('products.create')}}">Registrar Producto</a></button>
    <br>



    <table>
        <thead>
            <th>Nombre Producto</th>
            <th>Cantidad</th>
            <th>Precio Unitario</th>
            <th>Marca</th>
            <th>Imagen</th>
        </thead>
        <br>
        <tbody>
            @foreach ($products as $p)
            <tr>
                <td>{{$p->nameProduct}}</td>
                <td>{{$p->stock}}</td>
                <td>{{$p->unit_price}}</td>
                <td>{{$p->brand->brand}}</td>
                <td>{{$p->image}}</td>

                <td>
                    <button> <a href="{{route('products.show', $p)}}">Mostrar</a></button>
                    <button> <a href="{{route('products.edit', $p)}}">Editar</a></button>
                    <form action="{{route('products.destroy', $p)}}" method="POST">
                     @method("DELETE")
                     @csrf
                     <button type="submit">Eliminar</button>
                    </form>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
