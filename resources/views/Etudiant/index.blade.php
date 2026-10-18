@extends('base')

@section('title', 'Liste des étudiants')

@section('content')
@php
$studentCount = $etudiants->count();
$classCount = $etudiants->pluck('classe')->filter()->unique()->count();
$averageAge = $studentCount > 0 ? number_format($etudiants->avg('age'), 1, ',', ' ') : '—';
@endphp

<section class="student-index space-y-8">
    <header class="index-enter relative isolate overflow-hidden rounded-4xl bg-ink px-6 py-8 text-paper shadow-xl shadow-ink/10 sm:px-10 sm:py-10 lg:px-12 lg:py-12">
        <span class="pointer-events-none absolute -right-20 -top-36 z-0 h-80 w-80 rounded-full border border-white/10" aria-hidden="true"></span>
        <span class="pointer-events-none absolute -right-8 -top-24 z-0 h-56 w-56 rounded-full border border-white/10" aria-hidden="true"></span>
        <div class="relative flex flex-col gap-7 sm:flex-row sm:items-end sm:justify-between">
            <div class="max-w-2xl">
                <p class="inline-flex items-center gap-2 font-mono text-[0.65rem] uppercase tracking-[0.2em] text-signal">
                    <span class="h-1.5 w-1.5 rounded-full bg-signal" aria-hidden="true"></span>
                    Le registre · Gestion scolaire
                </p>
                <h1 class="mt-4 font-display text-4xl leading-[1.05] sm:text-5xl lg:text-6xl">Les étudiants<span class="text-signal">.</span></h1>
                <p class="mt-4 max-w-xl text-sm leading-6 text-paper/65 sm:text-base">
                    Tous vos dossiers au même endroit. Retrouvez une information et gardez chaque fiche à jour.
                </p>
            </div>
            <a href="{{ route('etudiant.create') }}" class="inline-flex min-h-12 items-center justify-center gap-2 self-start rounded-full bg-signal px-5 py-3 text-sm font-semibold text-ink transition duration-300 hover:-translate-y-0.5 hover:bg-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-signal sm:self-auto">
                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" aria-hidden="true">
                    <path d="M12 5v14M5 12h14" />
                </svg>
                Ajouter un étudiant
            </a>
        </div>
    </header>

    <section aria-label="Aperçu du registre" class="grid gap-4 sm:grid-cols-3">
        <article class="index-stat rounded-2xl border border-ink/[0.07] bg-white p-5 shadow-sm shadow-ink/3 sm:p-6">
            <div class="flex items-center justify-between">
                <p class="text-sm font-medium text-ink/60">Dossiers inscrits</p>
                <span class="grid h-10 w-10 place-items-center rounded-xl bg-mist text-leaf" aria-hidden="true">
                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                        <circle cx="9" cy="7" r="4" />
                        <path d="M20 8v6m3-3h-6" />
                    </svg>
                </span>
            </div>
            <p class="mt-5 font-display text-4xl leading-none">{{ $studentCount }}</p>
            <p class="mt-2 text-xs text-ink/45">dans votre registre</p>
        </article>

        <article class="index-stat rounded-2xl border border-ink/[0.07] bg-white p-5 shadow-sm shadow-ink/3 sm:p-6">
            <div class="flex items-center justify-between">
                <p class="text-sm font-medium text-ink/60">Classes représentées</p>
                <span class="grid h-10 w-10 place-items-center rounded-xl bg-signal/15 text-ink" aria-hidden="true">
                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M3 21h18M5 21V7l8-4v18M19 21V11l-6-4" />
                        <path d="M9 9v.01M9 12v.01M9 15v.01M9 18v.01" />
                    </svg>
                </span>
            </div>
            <p class="mt-5 font-display text-4xl leading-none">{{ $classCount }}</p>
            <p class="mt-2 text-xs text-ink/45">groupes suivis</p>
        </article>

        <article class="index-stat rounded-2xl border border-ink/[0.07] bg-white p-5 shadow-sm shadow-ink/3 sm:p-6">
            <div class="flex items-center justify-between">
                <p class="text-sm font-medium text-ink/60">Âge moyen</p>
                <span class="grid h-10 w-10 place-items-center rounded-xl bg-ink/5 text-ink/70" aria-hidden="true">
                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10" />
                        <path d="M12 6v6l4 2" />
                    </svg>
                </span>
            </div>
            <p class="mt-5 font-display text-4xl leading-none">{{ $averageAge }}@if ($studentCount > 0)<span class="ml-1.5 font-sans text-base text-ink/45">ans</span>@endif</p>
            <p class="mt-2 text-xs text-ink/45">sur l’ensemble des dossiers</p>
        </article>
    </section>

    @if (session('success'))
    <div role="status" class="flex items-start gap-3 rounded-2xl border border-leaf/20 bg-leaf/10 px-5 py-4 text-sm text-ink">
        <svg class="mt-0.5 h-5 w-5 shrink-0 text-leaf" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <path d="m5 12 4 4L19 6" />
        </svg>
        {{ session('success') }}
    </div>
    @elseif (session('update'))
    <div role="status" class="flex items-start gap-3 rounded-2xl border border-leaf/20 bg-leaf/10 px-5 py-4 text-sm text-ink">
        <svg class="mt-0.5 h-5 w-5 shrink-0 text-leaf" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <path d="m5 12 4 4L19 6" />
        </svg>
        {{ session('update') }}
    </div>
    @elseif (session('delete'))
    <div role="status" class="flex items-start gap-3 rounded-2xl border border-signal/30 bg-signal/10 px-5 py-4 text-sm text-ink">
        <svg class="mt-0.5 h-5 w-5 shrink-0 text-signal" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <path d="M12 9v4m0 4h.01" />
            <circle cx="12" cy="12" r="10" />
        </svg>
        {{ session('delete') }}
    </div>
    @endif

    <div class="overflow-hidden rounded-3xl border border-ink/10 bg-white shadow-sm shadow-ink/5">
        <div class="flex flex-col gap-2 border-b border-ink/10 px-5 py-5 sm:flex-row sm:items-center sm:justify-between sm:px-7">
            <div>
                <h2 class="font-display text-xl">Tous les dossiers</h2>
                <p class="mt-1 text-sm text-ink/55">Informations scolaires et coordonnées.</p>
            </div>
            <span class="font-mono text-[0.65rem] uppercase tracking-[0.14em] text-ink/40">Annuaire étudiant</span>
        </div>

        @if ($etudiants->isEmpty())
        <div class="px-6 py-16 text-center sm:px-10">
            <span class="mx-auto grid h-14 w-14 place-items-center rounded-2xl bg-mist text-leaf">
                <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                    <circle cx="9" cy="7" r="4" />
                    <path d="M19 8v6m3-3h-6" />
                </svg>
            </span>
            <h3 class="mt-5 font-display text-2xl">Le registre est encore vide</h3>
            <p class="mx-auto mt-2 max-w-md text-sm leading-6 text-ink/60">Ajoutez le premier dossier pour commencer à organiser les informations de vos étudiants.</p>
            <a href="{{ route('etudiant.create') }}" class="mt-6 inline-flex min-h-11 items-center justify-center rounded-full bg-ink px-5 py-2.5 text-sm font-semibold text-paper transition hover:bg-leaf focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-leaf">
                Créer le premier dossier
            </a>
        </div>
        @else
        <div class="overflow-x-auto">
            <table class="w-full min-w-190 text-left">
                <caption class="sr-only">Liste des étudiants et actions disponibles</caption>
                <thead class="bg-paper/75">
                    <tr class="font-mono text-[0.65rem] uppercase tracking-[0.12em] text-ink/55">
                        <th scope="col" class="px-6 py-4 font-medium sm:px-7">Nom complet</th>
                        <th scope="col" class="px-4 py-4 font-medium">Âge</th>
                        <th scope="col" class="px-4 py-4 font-medium">Email</th>
                        <th scope="col" class="px-4 py-4 font-medium">Classe</th>
                        <th scope="col" class="px-4 py-4 font-medium">Contact</th>
                        <th scope="col" class="px-6 py-4 text-right font-medium sm:px-7">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-ink/[0.07]">
                    @foreach ($etudiants as $etudiant)
                    <tr class="transition-colors hover:bg-paper/55">
                        <th scope="row" class="px-6 py-4 font-medium sm:px-7">
                            <a href="{{ route('etudiant.show', $etudiant->id) }}" class="group flex w-fit items-center gap-3 rounded-lg focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-leaf">
                                <span class="grid h-10 w-10 shrink-0 place-items-center rounded-full bg-mist font-display text-lg text-leaf">{{ mb_strtoupper(mb_substr($etudiant->prenom, 0, 1)) }}{{ mb_strtoupper(mb_substr($etudiant->nom, 0, 1)) }}</span>
                                <span>
                                    <span class="block text-sm text-ink group-hover:text-leaf">{{ $etudiant->prenom }} {{ $etudiant->nom }}</span>
                                    <span class="mt-0.5 block text-xs font-normal text-ink/50">Consulter le dossier</span>
                                </span>
                            </a>
                        </th>
                        <td class="whitespace-nowrap px-4 py-4 text-sm text-ink/70">{{ $etudiant->age }} ans</td>
                        <td class="px-4 py-4 text-sm text-ink/70">{{ $etudiant->email }}</td>
                        <td class="px-4 py-4">
                            <span class="inline-flex rounded-full bg-mist px-3 py-1.5 text-xs font-medium text-ink/75">{{ $etudiant->classe }}</span>
                        </td>
                        <td class="whitespace-nowrap px-4 py-4 text-sm text-ink/70">{{ $etudiant->contact }}</td>
                        <td class="px-6 py-4 sm:px-7">
                            <div class="flex items-center justify-end gap-1.5">
                                <a href="{{ route('etudiant.show', $etudiant->id) }}" aria-label="Voir le dossier de {{ $etudiant->prenom }} {{ $etudiant->nom }}" title="Voir le dossier" class="grid h-9 w-9 place-items-center rounded-full text-ink/60 transition hover:bg-mist hover:text-leaf focus-visible:outline-2 focus-visible:outline-leaf">
                                    <x-heroicon-o-eye class="h-5 w-5" />
                                </a>
                                <a href="{{ route('etudiant.edit', $etudiant->id) }}" aria-label="Modifier {{ $etudiant->prenom }} {{ $etudiant->nom }}" title="Modifier" class="grid h-9 w-9 place-items-center rounded-full text-ink/60 transition hover:bg-signal/15 hover:text-ink focus-visible:outline-2 focus-visible:outline-signal">
                                    <x-heroicon-o-pencil-square class="h-5 w-5" />
                                </a>
                                <form action="{{ route('etudiant.destroy', $etudiant->id) }}" method="POST" onsubmit="return confirm('Supprimer ce dossier étudiant ?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" aria-label="Supprimer {{ $etudiant->prenom }} {{ $etudiant->nom }}" title="Supprimer" class="grid h-9 w-9 cursor-pointer place-items-center rounded-full text-ink/60 transition hover:bg-rose-50 hover:text-rose-700 focus-visible:outline-2 focus-visible:outline-rose-600">
                                        <x-heroicon-o-trash class="h-5 w-5" />
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @endif
    </div>
</section>
@endsection
