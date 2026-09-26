@extends('base')

@section('title', 'Ajouter un étudiant')

@section('content')

<section class="mx-auto max-w-full rounded-2xl shadow p-4">
   <a href="{{ route('home') }}" class="p-2  bg-indigo-500 rounded-md shadow text-white "> ← Retour </a>
   <br><br>
    <div class="mb-8">
        <p class="text-sm font-semibold uppercase tracking-[0.2em] text-indigo-600">Étudiant</p>
        <h1 class="mt-2 text-3xl font-bold text-slate-900">Ajouter un nouvel étudiant</h1>
   </div>

    

    <form action="{{ route('etudiant.store') }}" method="POST" class="my-6">
        @csrf

        <div class="grid gap-6 md:grid-cols-2">

                <div>
                    <label for="nom"  class="py-2 text-gray-700 font-medium block mb-2"> Nom:</label>
                    <input type="text" id="nom" name="nom" class="w-full rounded-xl border border-slate-300 shadow px-4 py-3 bg-slate-50 text-slate-900 focus:border-indigo-400 focus:outline-none focus:ring-2 focus:ring-indigo-200" required value="{{ old('nom') }}" placeholder="entrer le nom" >
                </div>

                <div>
                    <label for="prenom"  class="py-2 text-gray-700 font-medium block mb-2"> Prenom:</label>
                    <input type="text" id="prenom" name="prenom" class="w-full rounded-xl border border-slate-300 shadow px-4 py-3 bg-slate-50 text-slate-900 focus:border-indigo-400 focus:outline-none focus:ring-2 focus:ring-indigo-200" required value="{{ old('prenom') }}" placeholder="entrer le prenom" >
                </div>

                <div>
                    <label for="age"  class="py-2 text-gray-700 font-medium block mb-2"> Age:</label>
                    <input type="text" id="age" name="age" class="w-full rounded-xl border border-slate-300 shadow px-4 py-3 bg-slate-50 text-slate-900 focus:border-indigo-400 focus:outline-none focus:ring-2 focus:ring-indigo-200" required value="{{ old('age') }}" placeholder="entrer l'age" >
                </div>

                <div>
                    <label for="email"  class="py-2 text-gray-700 font-medium block mb-2"> Email:</label>
                    <input type="email" id="email" name="email" class="w-full rounded-xl border border-slate-300 shadow px-4 py-3 bg-slate-50 text-slate-900 focus:border-indigo-400 focus:outline-none focus:ring-2 focus:ring-indigo-200" required value="{{ old('email') }}" placeholder="adresse email" >
                </div>

                <div>
                    <label for="classe"  class="py-2 text-gray-700 font-medium block mb-2"> Classe:</label>
                    <input type="text" id="classe" name="classe" class="w-full rounded-xl border border-slate-300 shadow px-4 py-3 bg-slate-50 text-slate-900 focus:border-indigo-400 focus:outline-none focus:ring-2 focus:ring-indigo-200" required value="{{ old('classe') }}" placeholder="entrer la classe" >
                </div>

                <div>
                    <label for="contact"  class="py-2 text-gray-700 font-medium block mb-2"> Contact:</label>
                    <input type="tex" id="contact" name="contact" class="w-full rounded-xl border border-slate-300 shadow px-4 py-3 bg-slate-50 text-slate-900 focus:border-indigo-400 focus:outline-none focus:ring-2 focus:ring-indigo-200" required value="{{ old('contact') }}" placeholder="numéro de téléphone" >
                </div>
         </div>

         <div class="flex items-center gap-3 justify-end pt-8">
            <button class="rounded-xl bg-slate-100 text-slate-900 font-medium border border-slate-300 py-3 px-5  hover:bg-slate-200">
                <a href="#">Annuler</a>
            </button>
            <button type="submit" class="rounded-xl bg-indigo-700 text-white font-medium  py-3 px-5  hover:bg-indigo-500">Enregistrer
            </button>
         </div>
    </form>
</section>

@endsection
