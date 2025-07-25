<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Provincias de Argentina</title>
    <!--Style/Scripts-->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-200">
    <main class="grid place-items-center">
        <h1 class="text-3xl font-semibold m-4">Lista de provincias de Argentina</h1>
        
        <table class="bg-white rounded mb-4">
            <thead>
                <tr>
                    <th class="p-2">ID</th>
                    <th class="p-2">Nombre</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($provincias as $provincia)
                    <tr>
                        <td class="p-2">{{ $provincia->id }}</td>
                        <td class="p-2">{{ $provincia->nombre }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </main>
</body>
</html>