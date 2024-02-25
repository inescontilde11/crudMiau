@extends("layouts.layout")

@section("contenido")
    <div class="flex items-center justify-center h-full p-5 rounded-2xl">
        <div class="w-full max-w-md h-full">
            <!--Formulario que al aceptar creas un alumno (a través de la ruta alumnos.store)-->
            <form action="{{route('productos.store')}}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                @csrf <!--Token para asegurarnos de que el formulario que se ejecuta es nuestro y no un ataque-->
                <!--Enseña los errores-->
                <x-input-label for="id">Id</x-input-label>
                <x-text-input type="text" name="id"/>
                <x-input-error class="mt-2" :messages="$errors->get('id')"/><br>

                <x-input-label for="nombre">Nombre</x-input-label>
                <x-text-input type="text" name="nombre"/>
                <x-input-error class="mt-2" :messages="$errors->get('nombre')"/><br>

                <x-input-label for="precio">Precio</x-input-label>
                <x-text-input type="text" name="precio"/>
                <x-input-error class="mt-2" :messages="$errors->get('precio')"/><br>

                <x-primary-button>Enviar</x-primary-button>
            </form>
        </div>
    </div>
@endsection
@section("titulo")
    Crear Artículo
@endsection
@section("descripcion")
    Crear Artículo
@endsection
