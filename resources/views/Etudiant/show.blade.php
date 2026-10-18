@extends('base')

@section('title', 'Dossier de ' . $etudiant->prenom)

@section('content')
    <section class="mx-auto max-w-4xl">
        <div class="flex flex-wrap items-center justify-between gap-4">
            <a href="{{ route('etudiant.index') }}" class="inline-flex min-h-10 items-center gap-2 rounded-full px-3 text-sm font-medium text-ink/65 transition hover:bg-ink/5 hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-leaf">
                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <path d="m15 18-6-6 6-6" />
                </svg>
                Tous les étudiants
            </a>
            <a href="{{ route('etudiant.edit', $etudiant->id) }}" class="inline-flex min-h-11 items-center justify-center gap-2 rounded-full border border-ink/15 bg-white px-5 py-2.5 text-sm font-semibold text-ink transition hover:border-leaf/40 hover:bg-mist focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-leaf">
                <x-heroicon-o-pencil-square class="h-4 w-4" />
                Modifier le dossier
            </a>
        </div>

        <div class="mt-7 overflow-hidden rounded-3xl border border-ink/10 bg-white shadow-sm shadow-ink/5">
            <div class="relative overflow-hidden bg-ink px-6 py-8 text-paper sm:px-10 sm:py-10">
                <div class="pointer-events-none absolute -right-12 -top-28 h-64 w-64 rounded-full bg-leaf/25 blur-3xl" aria-hidden="true"></div>
                <div class="relative flex flex-col gap-5 sm:flex-row sm:items-center">
                    <span class="grid h-16 w-16 shrink-0 place-items-center rounded-2xl bg-signal font-display text-2xl text-ink">
                        {{ mb_strtoupper(mb_substr($etudiant->prenom, 0, 1)) }}{{ mb_strtoupper(mb_substr($etudiant->nom, 0, 1)) }}
                    </span>
                    <div>
                        <p class="font-mono text-xs uppercase tracking-[0.18em] text-paper/55">Fiche étudiant</p>
                        <h1 class="mt-2 font-display text-3xl leading-tight sm:text-4xl">{{ $etudiant->prenom }} {{ $etudiant->nom }}</h1>
                        <p class="mt-2 inline-flex rounded-full border border-paper/15 bg-paper/[0.07] px-3 py-1 text-xs text-paper/75">{{ $etudiant->classe }}</p>
                    </div>
                </div>
            </div>

            <div class="p-6 sm:p-10">
                <h2 class="font-mono text-xs uppercase tracking-[0.16em] text-ink/50">Informations personnelles</h2>
                <dl class="mt-5 grid overflow-hidden rounded-2xl border border-ink/10 sm:grid-cols-2">
                    <div class="border-b border-ink/10 p-5 sm:border-r">
                        <dt class="text-xs font-medium uppercase tracking-wider text-ink/50">Nom</dt>
                        <dd class="mt-2 text-base font-medium">{{ $etudiant->nom }}</dd>
                    </div>
                    <div class="border-b border-ink/10 p-5">
                        <dt class="text-xs font-medium uppercase tracking-wider text-ink/50">Prénom</dt>
                        <dd class="mt-2 text-base font-medium">{{ $etudiant->prenom }}</dd>
                    </div>
                    <div class="border-b border-ink/10 p-5 sm:border-r">
                        <dt class="text-xs font-medium uppercase tracking-wider text-ink/50">Âge</dt>
                        <dd class="mt-2 text-base font-medium">{{ $etudiant->age }} <span class="text-sm font-normal text-ink/55">ans</span></dd>
                    </div>
                    <div class="border-b border-ink/10 p-5">
                        <dt class="text-xs font-medium uppercase tracking-wider text-ink/50">Classe</dt>
                        <dd class="mt-2 text-base font-medium">{{ $etudiant->classe }}</dd>
                    </div>
                    <div class="border-b border-ink/10 p-5 sm:border-r sm:border-b-0">
                        <dt class="text-xs font-medium uppercase tracking-wider text-ink/50">Adresse e-mail</dt>
                        <dd class="mt-2 break-all text-base font-medium">
                            <a href="mailto:{{ $etudiant->email }}" class="rounded-sm transition hover:text-leaf focus-visible:outline-2 focus-visible:outline-leaf">{{ $etudiant->email }}</a>
                        </dd>
                    </div>
                    <div class="p-5">
                        <dt class="text-xs font-medium uppercase tracking-wider text-ink/50">Téléphone</dt>
                        <dd class="mt-2 text-base font-medium">
                            <a href="tel:{{ $etudiant->contact }}" class="rounded-sm transition hover:text-leaf focus-visible:outline-2 focus-visible:outline-leaf">{{ $etudiant->contact }}</a>
                        </dd>
                    </div>
                </dl>
            </div>
        </div>
    </section>
@endsection
