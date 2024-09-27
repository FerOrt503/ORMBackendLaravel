<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Enloquent Relaciones</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-gradient-to-b from-gray-100 to-gray-300 min-h-screen flex items-center justify-center">

    <div class="container mn-auto">
        <div class="text-center py-8">
            <h1 class="text-6xl font-bold text-gray-800 drop-shadow-lg">
                Eloquent: Relaciones
            </h1>
        </div>

        <div class="mt-6 text-center">
            <ul class="list-inline text-2xl space-x-4">
                @foreach ($users as $user)
                    <li class="inline-block">
                        <a href="{{route('profile',$user->id)}}" class="text-purple-500 hover:text-purple-700 underline">{{ $user->name }}</a>
                    </li>
                    @endforeach
            </ul>
        </div>
    </div>

</body>

</html>
