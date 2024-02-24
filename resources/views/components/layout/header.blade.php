<!--Para que se vea el logo tienes que crear en public, la carpeta images y metes el logo-->
<!-- Mobile designe-->
<header class="sm:hidden bg-header text-white
	flex flex-col justify-around items-center h-15v">
    <img class="p-4 w-1/12 h-1/2" src="{{asset("images/logo.png")}}" alt="logo"/>
    <button class="btn glass text-white">Acceder</button>
    <button class="btn glass">>Registrarme</button>
</header>

<header class="hidden bg-header text-white
	    sm:flex flex-row justify-around items-center h-15v">
    <img class="p-4 h-full" src="{{asset("images/logo.png")}}" alt="logo"/>
    <h1 class="text-4xl">Proyecto de laravel</h1>
    <div>
        @guest
            <a href="{{route("login")}}" class="btn glass text-white">Acceder</a>
            <a href="{{route("register")}}" class="btn glass text-white">Registrarme</a>
        @endguest
        @auth
            <div class="flex flex-row">
                <h3 class="text-xl m-5"> {{auth()->user()->name}}</h3>
                <form action="{{route("logout")}}" method="post">
                    @csrf
                    <button class="btn glass text-white" type="submit">Logout</button>
                </form>
            </div>
        @endauth

    </div>
</header>
