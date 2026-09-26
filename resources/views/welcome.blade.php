@extends('base')

@section('title', 'Accueil')

@section('content')


<div class="mx-auto bg-gray-200 text-black uppercase text-center text-2xl font-bold m-4 p-4 hover:bg-gray-500 duration-700">
    <h1>Bienvenue sur notre plateforme de gestions Etudiants</h1>
</div>

<section class="bg-linear-to-br from-indigo-600 via-blue-600 to-cyan-500 text-white">
    <div class="mx-auto grid max-w-7xl gap-10 px-4 py-20 sm:px-6 lg:grid-cols-2 lg:px-8">
        <div class="flex flex-col justify-center">
            <span class="mb-4 inline-flex w-fit rounded-full border border-white/20 bg-white/10 px-3 py-1 text-sm font-medium text-indigo-100">
                Gestion scolaire moderne
            </span>
            <h1 class="text-4xl font-extrabold tracking-tight sm:text-5xl">
                Gérez vos étudiants en toute simplicité.
            </h1>
            <p class="mt-5 max-w-xl text-lg text-indigo-100">
                Une solution claire et rapide pour suivre les inscriptions, les classes et les contacts de vos élèves.
            </p>
            <div class="mt-8 flex flex-wrap gap-4">
                <a href="{{ route('etudiant.create') }}" class="rounded-xl bg-white px-6 py-3 font-semibold text-indigo-700 shadow hover:bg-slate-100">
                    Ajouter un étudiant
                </a>
                <a href="{{ route('etudiant.index') }}" class="rounded-xl border border-white/30 bg-white/10 px-6 py-3 font-semibold text-white hover:bg-white/20">
                    Voir la liste
                </a>
            </div>
        </div>

    </div>
</section>

@endsection
