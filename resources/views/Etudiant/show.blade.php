@extends('base')

@section('title', 'Voir un étudiant')

@section('content')


<section class="mx-auto max-w-full rounded-2xl shadow p-4">

   <a href="{{ route('etudiant.index') }}" class="p-2 my-4  bg-indigo-500 rounded-md shadow text-white "> ← Retour</a>
   <br><br>
    <div class="mb-8">
        <p class="text-sm font-semibold uppercase tracking-[0.2em] text-indigo-600">Étudiant</p>
        <h1 class="mt-2 text-3xl font-bold text-slate-900">Informations étudiant</h1>
   </div>

    

    <div class="my-6">
        <div class="flex flex-col gap-4 text-xl">
    
            <div class="flex items-center gap-4">
                <span class="text-gray-700 font-medium">Nom :</span>
                <p>{{ $etudiant->nom }}</p>
            </div>
    
            <div class="flex items-center gap-4">
                <span class="text-gray-700 font-medium">Prénom :</span>
                <p>{{ $etudiant->prenom }}</p>
            </div>
    
            <div class="flex items-center gap-4">
                <span class="text-gray-700 font-medium">Âge :</span>
                <p>{{ $etudiant->age }} ans</p>
            </div>
    
            <div class="flex items-center gap-4">
                <span class="text-gray-700 font-medium">Email :</span>
                <p>{{ $etudiant->email }}</p>
            </div>
    
            <div class="flex items-center gap-4">
                <span class="text-gray-700 font-medium">Classe :</span>
                <p>{{ $etudiant->classe }}</p>
            </div>
    
            <div class="flex items-center gap-4">
                <span class="text-gray-700 font-medium">Contact :</span>
                <p>{{ $etudiant->contact }}</p>
            </div>
    
        </div>
    </div>

</section>

@endsection
