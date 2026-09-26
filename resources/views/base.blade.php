<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="/ressources/css/app.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('title')</title>
</head>

<body class="bg-slate-100 text-slate-800 antialiased">

    <nav class="bg-slate-900 shadow-lg">
        <div class="mx-auto flex max-w-7xl items-center justify-between px-4 py-4 sm:px-6 lg:px-8">
            <a href="{{ route('home') }}" class="text-xl font-bold tracking-tight text-white">Etudiants</a>
            <div class="flex items-center gap-4">
                <a href="{{ route('home') }}" class="text-sm font-medium text-slate-300 transition hover:text-white">Accueil</a>
                <a href="{{ route('etudiant.index') }}" class="text-sm font-medium text-slate-300 transition hover:text-white">Liste Etudiants</a>
                <a href="{{ route('etudiant.create') }}" class="rounded-md bg-indigo-600 px-4 py-2 text-sm font-semibold text-white shadow hover:bg-indigo-500">Ajouter</a>
            </div>
        </div>
    </nav>


    <main class="m-4">
        @yield('content')
    </main>
</body>

</html>
