<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('storage/images/logo.png') }}" type="image/x-icon" />
    <title>{{ env('APP_NAME') }}</title>
    @vite('resources/css/app.css')
</head>

<body>
   <header class="w-full top-2 left-0 z-50 fixed">
      <nav

        class="max-w-7xl mx-auto bg-white rounded-full shadow-md px-6 py-3 flex justify-between items-center relative"
      >
   
        <a to="/" class="flex items-center gap-2">
          <div class="w-30 h-12 bg-sky-200 rounded-lg flex items-center justify-center text-sky-900 font-bold">
            {{ env('APP_NAME') }}
          </div>
        </a>

        
        <ul class="hidden lg:flex items-center gap-8 text-sky-900 font-medium relative">
          <a href="{{ route('home') }}" >
              Accueil 
          </a>
          <a href="{{ route('add') }}" >
              Ajouter 
          </a>
          <a href="{{ route('liste') }}" >
              Employees  
          </a>
          <a to="/" >
              Accueil 
          </a>
        </ul>
</nav>
    </header>
<div class="m-32">
  {{ $slot }}

</div>
</body>

</html>
