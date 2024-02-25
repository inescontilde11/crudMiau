@extends("layouts.layout")

@section("contenido")
    <div class="flex items-center justify-center h-full p-5 rounded-2xl">
        <div class="w-full max-w-md h-full">

            <form action="{{route('productos.update', $producto->id)}}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                @csrf
                <!--PATCH se utiliza para los update (php artisan route:list --name=alumno)-->
                @method("PATCH")
                <x-input-label for="nombre">Nombre</x-input-label>
                <x-text-input type="text" name="nombre" value="{{$producto->nombre}}"/>
                <x-input-error class="mt-2" :messages="$errors->get('nombre')"/><br>

                <x-input-label for="precio">Precio</x-input-label>
                <x-text-input type="text" name="precio" value="{{$producto->precio}}"/>
                <x-input-error class="mt-2" :messages="$errors->get('precio')"/><br>

                <x-primary-button>Actualizar</x-primary-button>
            </form>
        </div>
    </div>
@endsection
@section("titulo")
    Editar producto
@endsection
@section("descripcion")
    Editar producto
@endsection
