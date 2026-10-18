@extends('base')

@section('title', 'Ajouter un étudiant')

@section('content')
    <section class="mx-auto max-w-4xl">
        <a href="{{ route('etudiant.index') }}" class="inline-flex min-h-10 items-center gap-2 rounded-full px-3 text-sm font-medium text-ink/65 transition hover:bg-ink/5 hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-leaf">
            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <path d="m15 18-6-6 6-6" />
            </svg>
            Retour à la liste
        </a>

        <div class="mt-5">
            <p class="font-mono text-xs uppercase tracking-[0.18em] text-leaf">Nouveau dossier</p>
            <h1 class="mt-2 font-display text-4xl leading-tight sm:text-5xl">Ajouter un étudiant</h1>
            <p class="mt-3 text-sm leading-6 text-ink/60 sm:text-base">Renseignez les informations ci-dessous pour créer une fiche dans le registre.</p>
        </div>

        <form action="{{ route('etudiant.store') }}" method="POST" class="mt-8 rounded-3xl border border-ink/10 bg-white p-5 shadow-sm shadow-ink/5 sm:mt-10 sm:p-8">
            @csrf

            @if ($errors->any())
                <div id="form-errors" role="alert" class="mb-7 rounded-2xl border border-rose-200 bg-rose-50 px-5 py-4 text-sm text-rose-800">
                    <p class="font-semibold">Vérifiez les informations signalées ci-dessous.</p>
                    <ul class="mt-2 list-inside list-disc space-y-1">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="grid gap-x-6 gap-y-5 sm:grid-cols-2">
                <div>
                    <label for="nom" class="mb-2 block text-sm font-semibold text-ink">Nom <span class="text-signal" aria-hidden="true">*</span></label>
                    <input id="nom" name="nom" type="text" autocomplete="family-name" required value="{{ old('nom') }}" placeholder="Ex. Kouassi" @error('nom') aria-invalid="true" @enderror aria-describedby="@error('nom') nom-error @enderror" class="field-control @error('nom') border-rose-400 @enderror">
                    @error('nom')
                        <p id="nom-error" class="mt-2 text-sm text-rose-700">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="prenom" class="mb-2 block text-sm font-semibold text-ink">Prénom <span class="text-signal" aria-hidden="true">*</span></label>
                    <input id="prenom" name="prenom" type="text" autocomplete="given-name" required value="{{ old('prenom') }}" placeholder="Ex. Aïcha" @error('prenom') aria-invalid="true" @enderror aria-describedby="@error('prenom') prenom-error @enderror" class="field-control @error('prenom') border-rose-400 @enderror">
                    @error('prenom')
                        <p id="prenom-error" class="mt-2 text-sm text-rose-700">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="age" class="mb-2 block text-sm font-semibold text-ink">Âge <span class="text-signal" aria-hidden="true">*</span></label>
                    <div class="relative">
                        <input id="age" name="age" type="number" step="any" inputmode="decimal" required value="{{ old('age') }}" placeholder="Ex. 16" @error('age') aria-invalid="true" @enderror aria-describedby="age-suffix @error('age') age-error @enderror" class="field-control pr-14 @error('age') border-rose-400 @enderror">
                        <span id="age-suffix" class="pointer-events-none absolute inset-y-0 right-4 flex items-center text-sm text-ink/45">ans</span>
                    </div>
                    @error('age')
                        <p id="age-error" class="mt-2 text-sm text-rose-700">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="email" class="mb-2 block text-sm font-semibold text-ink">Adresse e-mail <span class="text-signal" aria-hidden="true">*</span></label>
                    <input id="email" name="email" type="email" autocomplete="email" required value="{{ old('email') }}" placeholder="exemple@ecole.ci" @error('email') aria-invalid="true" @enderror aria-describedby="@error('email') email-error @enderror" class="field-control @error('email') border-rose-400 @enderror">
                    @error('email')
                        <p id="email-error" class="mt-2 text-sm text-rose-700">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="classe" class="mb-2 block text-sm font-semibold text-ink">Classe <span class="text-signal" aria-hidden="true">*</span></label>
                    <input id="classe" name="classe" type="text" autocomplete="organization-title" required value="{{ old('classe') }}" placeholder="Ex. 3e A" @error('classe') aria-invalid="true" @enderror aria-describedby="@error('classe') classe-error @enderror" class="field-control @error('classe') border-rose-400 @enderror">
                    @error('classe')
                        <p id="classe-error" class="mt-2 text-sm text-rose-700">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="contact" class="mb-2 block text-sm font-semibold text-ink">Téléphone <span class="text-signal" aria-hidden="true">*</span></label>
                    <input id="contact" name="contact" type="tel" autocomplete="tel" required value="{{ old('contact') }}" placeholder="Ex. 07 00 00 00 00" @error('contact') aria-invalid="true" @enderror aria-describedby="@error('contact') contact-error @enderror" class="field-control @error('contact') border-rose-400 @enderror">
                    @error('contact')
                        <p id="contact-error" class="mt-2 text-sm text-rose-700">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <p class="mt-6 text-xs text-ink/50"><span class="text-signal">*</span> Champs obligatoires</p>
            <div class="mt-8 flex flex-col-reverse gap-3 border-t border-ink/10 pt-6 sm:flex-row sm:justify-end">
                <a href="{{ route('etudiant.index') }}" class="inline-flex min-h-12 items-center justify-center rounded-full border border-ink/15 px-6 py-3 text-sm font-semibold text-ink/75 transition hover:border-ink/35 hover:bg-paper focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-leaf">
                    Annuler
                </a>
                <button type="submit" class="inline-flex min-h-12 cursor-pointer items-center justify-center gap-2 rounded-full bg-ink px-6 py-3 text-sm font-semibold text-paper transition hover:bg-leaf focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-leaf">
                    Enregistrer le dossier
                    <svg class="h-4 w-4 text-signal" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M5 12h14M12 5l7 7-7 7" />
                    </svg>
                </button>
            </div>
        </form>
    </section>
@endsection
