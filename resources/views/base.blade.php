<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#f5f3ec" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,400..600;1,9..144,400..600&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('title') — Gestion des étudiants</title>
</head>

<body id="top" class="flex min-h-screen flex-col antialiased">
    <header class="relative z-10 border-b border-ink/10 bg-paper/95">
        <nav aria-label="Navigation principale" class="mx-auto flex max-w-7xl flex-wrap items-center justify-between gap-x-6 gap-y-4 px-5 py-4 sm:px-8 lg:px-10">
            <a href="{{ route('home') }}" class="group inline-flex items-center gap-3 rounded-lg focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-leaf">
                <span class="grid h-10 w-10 place-items-center rounded-xl bg-ink text-signal transition-transform group-hover:-rotate-3" aria-hidden="true">
                    <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21.42 10.922a1 1 0 0 0-.019-1.838L12.83 5.18a2 2 0 0 0-1.66 0L2.6 9.08a1 1 0 0 0 0 1.832l8.57 3.908a2 2 0 0 0 1.66 0z" />
                        <path d="M22 10v6" />
                        <path d="M6 12.5V16a6 3 0 0 0 12 0v-3.5" />
                    </svg>
                </span>
                <span>
                    <span class="block font-display text-lg font-semibold leading-tight">Étudiants</span>
                    <span class="mt-0.5 block font-mono text-[0.625rem] uppercase tracking-[0.18em] text-ink/55">Registre scolaire</span>
                </span>
            </a>

            <div class="flex items-center gap-1 sm:gap-2">
                <a href="{{ route('home') }}"
                    @class([ 'rounded-full px-3 py-2 text-sm font-medium transition sm:px-4' , 'bg-ink/5 text-ink'=> request()->routeIs('home'),
                    'text-ink/65 hover:bg-ink/5 hover:text-ink' => !request()->routeIs('home'),
                    ])
                    @if (request()->routeIs('home')) aria-current="page" @endif>
                    Accueil
                </a>
                <a href="{{ route('etudiant.index') }}"
                    @class([ 'rounded-full px-3 py-2 text-sm font-medium transition sm:px-4' , 'bg-ink/5 text-ink'=> request()->routeIs('etudiant.index', 'etudiant.create', 'etudiant.show', 'etudiant.edit'),
                    'text-ink/65 hover:bg-ink/5 hover:text-ink' => !request()->routeIs('etudiant.index', 'etudiant.create', 'etudiant.show', 'etudiant.edit'),
                    ])
                    @if (request()->routeIs('etudiant.index', 'etudiant.create', 'etudiant.show', 'etudiant.edit')) aria-current="page" @endif>
                    Étudiants
                </a>
                <a href="{{ route('etudiant.create') }}" class="ml-1 inline-flex min-h-10 items-center gap-2 rounded-full bg-signal px-4 text-sm font-semibold text-ink transition hover:bg-ink hover:text-paper focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-signal sm:ml-2 sm:px-5">
                    <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" aria-hidden="true">
                        <path d="M12 5v14M5 12h14" />
                    </svg>
                    <span class="hidden sm:inline">Ajouter</span>
                    <span class="sm:hidden">Nouveau</span>
                </a>
            </div>
        </nav>
    </header>

    <main class="mx-auto w-full max-w-7xl flex-1 px-5 py-8 sm:px-8 sm:py-10 lg:px-10 lg:py-12">
        @yield('content')
    </main>

    @include('Etudiant.partials.footer')
</body>

</html>