<!--En route se pone el nombre de nuestro CRUD de la carpeta que queramos ir y
esta llama al método index donde le indicaremos la ruta-->
<nav class="h-10v bg-nav flex flex-row justify-center items-center
	space-x-3 p-1">
    <a href="/" class="btn btn-sm  btn-neutral">Home</a>
    <a href="#" class="btn  btn-sm  btn-primary">About</a>
    <a href="#" class="btn  btn-sm  btn-info">Contacto</a>
    <a href="#" class="btn  btn-sm  btn-neutral">Proyectos</a>
    @auth
        <a href="{{route("productos.index")}}" class="btn  btn-sm  btn-primary">Miau</a>
        <a href="#" class="btn  btn-sm  btn-info">Profesores</a>
    @endauth
</nav>
