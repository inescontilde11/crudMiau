@extends("layouts.layout")

@section("contenido")
    <table>
        <tr>
            <th>Código</th>
            <th>Nombre</th>
            <th>Precio</th>
        </tr>
        @foreach($productos as $producto)
            <tr>
                <td>{{$producto->codigo}}</td>
                <td>{{$producto->nombre}}</td>
                <td>{{$producto->precio}}</td>
            </tr>
        @endforeach
    </table>
    <a href="{{route('productos.create')}}"><button class="btn btn-secondary w-full">Nuevo Artículo</button></a>
@endsection
@section("titulo")

@endsection
