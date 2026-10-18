@extends('base')

@section('title', 'Accueil')

@section('content')
    <section class="relative isolate overflow-hidden rounded-[2rem] bg-ink text-paper shadow-xl shadow-ink/10">
        <div class="pointer-events-none absolute -right-28 -top-32 -z-10 h-96 w-96 rounded-full bg-leaf/25 blur-3xl" aria-hidden="true"></div>
        <div class="pointer-events-none absolute -bottom-44 left-1/3 -z-10 h-96 w-96 rounded-full bg-signal/15 blur-3xl" aria-hidden="true"></div>

        <div class="grid gap-12 px-6 py-12 sm:px-10 sm:py-16 lg:grid-cols-[1.1fr_0.9fr] lg:items-center lg:gap-8 lg:px-16 lg:py-20">
            <div class="max-w-2xl">
                <p class="inline-flex items-center gap-2 rounded-full border border-paper/15 bg-paper/[0.06] px-4 py-2 font-mono text-[0.68rem] uppercase tracking-[0.16em] text-paper/75">
                    <span class="h-2 w-2 rounded-full bg-signal" aria-hidden="true"></span>
                    Un registre, enfin simple
                </p>
                <h1 class="mt-7 font-display text-5xl leading-[1.02] tracking-tight sm:text-6xl lg:text-7xl">
                    Les dossiers bien tenus.<br>
                    <em class="font-normal text-signal">L’esprit plus léger.</em>
                </h1>
                <p class="mt-6 max-w-xl text-base leading-7 text-paper/70 sm:text-lg sm:leading-8">
                    Retrouvez les informations essentielles de chaque étudiant dans un espace clair, pensé pour aller droit au but.
                </p>
                <div class="mt-9 flex flex-col gap-3 sm:flex-row">
                    <a href="{{ route('etudiant.index') }}" class="group inline-flex min-h-12 items-center justify-center gap-3 rounded-full bg-signal px-6 py-3 text-sm font-semibold text-ink transition hover:bg-paper focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-signal">
                        Parcourir les étudiants
                        <svg class="h-4 w-4 transition-transform group-hover:translate-x-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M5 12h14M12 5l7 7-7 7" />
                        </svg>
                    </a>
                    <a href="{{ route('etudiant.create') }}" class="inline-flex min-h-12 items-center justify-center rounded-full border border-paper/25 px-6 py-3 text-sm font-semibold text-paper transition hover:border-paper hover:bg-paper/10 focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-paper">
                        Ajouter un étudiant
                    </a>
                </div>
                <p class="mt-8 font-mono text-xs tracking-wide text-paper/45">Admissions <span class="px-2 text-signal">·</span> Classes <span class="px-2 text-signal">·</span> Contacts</p>
            </div>

            <div class="relative mx-auto w-full max-w-md lg:justify-self-end" aria-hidden="true">
                <div class="absolute -right-2 top-4 h-full w-full rotate-3 rounded-[2rem] border border-paper/15 bg-paper/[0.04] sm:-right-5"></div>
                <div class="relative rounded-[2rem] border border-paper/15 bg-[#20362b] p-5 shadow-2xl sm:p-7">
                    <div class="flex items-center justify-between border-b border-paper/10 pb-5">
                        <div>
                            <p class="font-mono text-[0.65rem] uppercase tracking-[0.18em] text-paper/45">Votre espace</p>
                            <p class="mt-1 font-display text-2xl">Le registre</p>
                        </div>
                        <span class="grid h-11 w-11 place-items-center rounded-2xl bg-signal text-ink">
                            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20" />
                                <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z" />
                                <path d="M8 7h8M8 11h8" />
                            </svg>
                        </span>
                    </div>
                    <div class="space-y-3 pt-5">
                        <div class="flex items-center gap-4 rounded-2xl border border-paper/10 bg-paper/[0.04] p-4">
                            <span class="grid h-10 w-10 shrink-0 place-items-center rounded-xl bg-leaf/20 text-leaf">
                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                                    <circle cx="9" cy="7" r="4" />
                                    <path d="M22 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75" />
                                </svg>
                            </span>
                            <span class="min-w-0 flex-1">
                                <span class="block text-sm font-medium">Informations centralisées</span>
                                <span class="mt-1 block text-xs text-paper/50">Un dossier par étudiant</span>
                            </span>
                            <svg class="h-4 w-4 shrink-0 text-signal" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m9 18 6-6-6-6" />
                            </svg>
                        </div>
                        <div class="flex items-center gap-4 rounded-2xl border border-paper/10 bg-paper/[0.04] p-4">
                            <span class="grid h-10 w-10 shrink-0 place-items-center rounded-xl bg-signal/15 text-signal">
                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="3" y="4" width="18" height="17" rx="2" />
                                    <path d="M16 2v4M8 2v4M3 10h18" />
                                </svg>
                            </span>
                            <span class="min-w-0 flex-1">
                                <span class="block text-sm font-medium">Suivi sans détour</span>
                                <span class="mt-1 block text-xs text-paper/50">Classe, âge et coordonnées</span>
                            </span>
                            <svg class="h-4 w-4 shrink-0 text-signal" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m9 18 6-6-6-6" />
                            </svg>
                        </div>
                    </div>
                    <div class="mt-5 flex items-center gap-3 rounded-2xl bg-paper px-4 py-3.5 text-ink">
                        <span class="grid h-8 w-8 place-items-center rounded-full bg-leaf/15 text-leaf">
                            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m5 12 4 4L19 6" />
                            </svg>
                        </span>
                        <span class="text-sm font-medium">Tout l’essentiel, au même endroit</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section aria-label="Fonctionnalités" class="grid gap-4 pt-8 sm:grid-cols-3 sm:pt-10">
        <article class="rounded-2xl border border-ink/10 bg-white/65 p-5 sm:p-6">
            <span class="font-mono text-xs text-leaf">01 / ORGANISER</span>
            <h2 class="mt-3 font-display text-xl">Des dossiers lisibles</h2>
            <p class="mt-2 text-sm leading-6 text-ink/65">Les informations utiles réunies dans une fiche claire pour chaque étudiant.</p>
        </article>
        <article class="rounded-2xl border border-ink/10 bg-white/65 p-5 sm:p-6">
            <span class="font-mono text-xs text-leaf">02 / RETROUVER</span>
            <h2 class="mt-3 font-display text-xl">Une vue d’ensemble</h2>
            <p class="mt-2 text-sm leading-6 text-ink/65">Consultez la liste et accédez rapidement aux détails ou à la modification d’un dossier.</p>
        </article>
        <article class="rounded-2xl border border-ink/10 bg-white/65 p-5 sm:p-6">
            <span class="font-mono text-xs text-leaf">03 / METTRE À JOUR</span>
            <h2 class="mt-3 font-display text-xl">Un suivi sans friction</h2>
            <p class="mt-2 text-sm leading-6 text-ink/65">Ajoutez et actualisez les coordonnées au fil de la vie scolaire.</p>
        </article>
    </section>
@endsection
