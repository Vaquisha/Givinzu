<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Inicio - VinZu 1.0 - @yield('titulo')</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    </head>
    <body class=" bg-gray-300">
            {{-- p -> Padding espacio del cuador --}}
        <header class="p-4 border-b shadow" style="background: rgb(17, 14, 95)">
            <div class="container mx-auto d-flex justify-content-between align-items-center">
              <h1 class="fs-7 font-weight-bold text-white mr-auto">
                VinZu 1.0
              </h1>
          {{-- gap-4 -> damos espacion entre ambas etiquetas --}}
              <nav class="ml-auto d-flex gap-4">
                <a class="font-weight-bold 
                text-uppercase text-white 
                text-sm-center 
                text-decoration-none" href="#">Iniciar Sesión</a>
                <a class="font-weight-bold 
                text-uppercase text-white 
                text-sm-center 
                text-decoration-none" href="/crear-cuenta">Crear Cuenta</a>
              </nav>
            </div>
          </header>
          {{-- Inyectamos todo el Contenido de Cada una de las Vistas --}}
            <main>
                @yield('contenido')
            </main>

            <footer class="container text-center p-5 text-sm-right font-weight-bold" style="color: gray" >
                Vinzu 1.0 - Todos los Derechos Reservados
                {{-- Encontramos mas, se les llama Helpers --}}
                {{now()->year}}
            </footer>

        <script 
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" 
        crossorigin="anonymous"></script>
    </body>
</html>

