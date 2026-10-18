{{-- resources/views/Etudiant/partials/footer.blade.php --}}
<footer class="site-footer relative mt-auto overflow-hidden bg-ink text-paper" role="contentinfo">

    {{-- Filet tricolore --}}
    <div class="grid h-1.5 grid-cols-3" aria-hidden="true">
        <span class="bg-signal"></span>
        <span class="bg-paper"></span>
        <span class="bg-leaf"></span>
    </div>

    {{-- Halos décoratifs --}}
    <div class="pointer-events-none absolute -left-24 top-24 h-72 w-72 rounded-full bg-signal/20 blur-3xl" aria-hidden="true"></div>
    <div class="pointer-events-none absolute -right-24 bottom-32 h-72 w-72 rounded-full bg-leaf/20 blur-3xl" aria-hidden="true"></div>

    <div class="relative mx-auto max-w-7xl px-5 pt-12 sm:px-8 md:px-10 md:pt-20">

        {{-- Bandeau d'action --}}
        <div class="grid items-center gap-8 rounded-3xl border border-paper/10 bg-paper/[0.04] p-7 backdrop-blur-sm sm:p-10 md:grid-cols-12 md:gap-6 md:p-14">
            <div class="md:col-span-8">
                <p class="inline-flex items-center gap-2 font-mono text-xs uppercase tracking-widest text-paper/60">
                    <span class="h-1.5 w-1.5 rounded-full bg-signal" aria-hidden="true"></span>
                    Registre des étudiants
                </p>
                <h2 class="mt-4 font-display text-4xl leading-[1.05] sm:text-5xl md:text-6xl">
                    Chaque dossier,<br>
                    <em class="text-signal">à sa place.</em>
                </h2>
            </div>

            <div class="md:col-span-4 md:justify-self-end">
                <a href="{{ route('etudiant.create') }}"
                    class="group inline-flex min-h-12 w-full items-center justify-between gap-4 rounded-full bg-signal px-7 py-3.5 text-sm font-semibold text-ink transition duration-300 hover:bg-paper focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-signal sm:w-auto sm:justify-center">
                    Inscrire un étudiant
                    <svg class="h-5 w-5 transition-transform duration-300 group-hover:translate-x-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M5 12h14" />
                        <path d="m12 5 7 7-7 7" />
                    </svg>
                </a>
            </div>
        </div>

        {{-- Colonnes --}}
        <div class="grid gap-12 py-14 sm:grid-cols-2 lg:grid-cols-12 lg:gap-8">

            {{-- Marque --}}
            <div class="sm:col-span-2 lg:col-span-5">
                <div class="flex items-center gap-3">
                    <span class="grid h-11 w-11 place-items-center rounded-xl bg-paper/10 text-signal ring-1 ring-paper/15">
                        <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M21.42 10.922a1 1 0 0 0-.019-1.838L12.83 5.18a2 2 0 0 0-1.66 0L2.6 9.08a1 1 0 0 0 0 1.832l8.57 3.908a2 2 0 0 0 1.66 0z" />
                            <path d="M22 10v6" />
                            <path d="M6 12.5V16a6 3 0 0 0 12 0v-3.5" />
                        </svg>
                    </span>
                    <p class="font-display text-2xl">Gestion des étudiants</p>
                </div>
                <p class="mt-5 max-w-sm text-sm leading-relaxed text-paper/70">
                    Admissions, informations scolaires et suivi des étudiants,
                    réunis dans un registre clair et facile à tenir.
                </p>
            </div>

            {{-- Navigation --}}
            <nav aria-label="Liens du pied de page" class="lg:col-span-3">
                <h3 class="font-mono text-xs uppercase tracking-widest text-paper/50">Navigation</h3>
                <ul class="mt-5 space-y-1 text-sm">
                    <li>
                        <a href="{{ route('home') }}" class="group flex min-h-11 items-center gap-3 rounded-lg text-paper/85 transition hover:text-signal focus-visible:outline-2 focus-visible:outline-signal">
                            <svg class="h-[18px] w-[18px] text-paper/40 transition group-hover:text-signal" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                                <path d="M9 22V12h6v10" />
                            </svg>
                            <span class="link-slide">Accueil</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('etudiant.index') }}" class="group flex min-h-11 items-center gap-3 rounded-lg text-paper/85 transition hover:text-signal focus-visible:outline-2 focus-visible:outline-signal">
                            <svg class="h-[18px] w-[18px] text-paper/40 transition group-hover:text-signal" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                                <circle cx="9" cy="7" r="4" />
                                <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                                <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                            </svg>
                            <span class="link-slide">Liste des étudiants</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('etudiant.create') }}" class="group flex min-h-11 items-center gap-3 rounded-lg text-paper/85 transition hover:text-signal focus-visible:outline-2 focus-visible:outline-signal">
                            <svg class="h-[18px] w-[18px] text-paper/40 transition group-hover:text-signal" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                                <circle cx="9" cy="7" r="4" />
                                <line x1="19" x2="19" y1="8" y2="14" />
                                <line x1="22" x2="16" y1="11" y2="11" />
                            </svg>
                            <span class="link-slide">Ajouter un étudiant</span>
                        </a>
                    </li>
                </ul>
            </nav>

            {{-- Contact --}}
            <address class="not-italic lg:col-span-4">
                <h3 class="font-mono text-xs uppercase tracking-widest text-paper/50">Contact</h3>
                <p class="mt-5 text-sm text-paper/70">Développé par <span class="font-medium text-paper">Adam Poussi</span></p>
                <ul class="mt-4 grid gap-3">
                    @foreach ([['+2250758280357', '07 58 28 03 57'], ['+2250504273212', '05 04 27 32 12']] as [$tel, $affiche])
                    <li>
                        <a href="tel:{{ $tel }}"
                            class="group flex min-h-12 items-center gap-3 rounded-xl border border-paper/10 bg-paper/[0.04] px-4 font-mono text-sm transition hover:border-signal/60 hover:bg-signal/10 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-signal">
                            <svg class="h-[18px] w-[18px] text-signal" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z" />
                            </svg>
                            {{ $affiche }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </address>
        </div>

        {{-- Barre basse --}}
        <div class="flex flex-col gap-4 border-t border-paper/15 py-6 text-xs text-paper/55 sm:flex-row sm:items-center sm:justify-between">
            <p class="font-mono">&copy; {{ now()->year }} Gestion des étudiants. Tous droits réservés.</p>
            <a href="#top"
                class="group inline-flex min-h-11 w-fit items-center gap-2 rounded-full border border-paper/15 px-4 font-mono transition hover:border-paper/40 hover:text-paper focus-visible:outline-2 focus-visible:outline-signal">
                Haut de page
                <svg class="h-4 w-4 transition-transform duration-300 group-hover:-translate-y-0.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <path d="m5 12 7-7 7 7" />
                    <path d="M12 19V5" />
                </svg>
            </a>
        </div>
    </div>

    {{-- Mot-symbole décoratif --}}
    <p class="footer-wordmark pointer-events-none select-none whitespace-nowrap px-4 pb-4 text-center font-display leading-[0.9]" aria-hidden="true">Gestion des étudiants</p>
</footer>