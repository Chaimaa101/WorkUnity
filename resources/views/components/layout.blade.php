<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('storage/images/logo.png') }}" type="image/x-icon" />
    <title>{{ env('APP_NAME') }}</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body class=" m-2 sm:m-32 ">
    <header class="w-full top-2 left-0 z-50 fixed">
        <nav
            class="max-w-lg mx-auto bg-white border-1 border-gray-300 rounded-full shadow-lg px-6 py-3 flex space-x-4 items-center relative">

            <a href="{{ route('home') }}" class="flex items-center gap-2">
                <div class="w-30 h-12 bg-rose-100 rounded-lg flex items-center justify-center text-rose-900 font-bold">
                    {{ env('APP_NAME') }}
                </div>
            </a>

            <ul class="flex items-center justify-center gap-8 text-rose-900 font-medium ">
                <a href="{{ route('home') }}">
                 <i class="fas fa-home"></i>
                    Accueil
                </a>
                <a  href="{{ route('employees.create') }}">
                  <i class="fa-solid fa-plus"></i>
                    Ajouter
                </a>
                <a  href="{{ route('employees.create') }}">
                 <i class="fa-solid fa-people-group"></i>
                    Employees
                </a>

            </ul>
        </nav>
    </header>
    <div>
             @if (session('success'))
           <p class="text-sm font-medium text-white px-3 
py-2 rounded-md mb-2 bg-green-300">{{session('success')}}</p>
        {{-- @else
            <p class="text-sm font-medium text-white px-3 
py-2 rounded-md mb-2 bg-red-300">
erreur</p> --}}
        @endif

        {{ $slot }}

    </div>
</body>

</html>
