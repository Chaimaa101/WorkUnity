<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('storage/images/logo.png') }}" type="image/x-icon" />
    <title>{{ env('APP_NAME') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="  overflow-x-hidden">
    <header class="w-full mt-3">
        <nav
            class="max-w-sm mx-auto bg-white border-1 border-gray-300 rounded-full shadow-lg px-6 py-6 flex space-x-4 items-center relative">

            <ul class="flex items-center justify-center gap-8 text-rose-900 font-medium ">
                <a href="{{ route('home') }}">
                    <i class="fas fa-home"></i>
                    Accueil
                </a>
                <a href="{{ route('employees.create') }}">
                    <i class="fa-solid fa-plus"></i>
                    Ajouter
                </a>
                <a href="{{ route('home') }}">
                    <i class="fa-solid fa-people-group"></i>
                    Employees
                </a>

            </ul>
        </nav>
    </header>
    <div class="m-2 sm:m-10">
       
        {{ $slot }}

    </div>
</body>

</html>
