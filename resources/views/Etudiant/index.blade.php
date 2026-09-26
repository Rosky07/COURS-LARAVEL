@extends('base')

@section('title', 'Accueil')

@section('content')

    <div class="bg-gray-200 text-black uppercase text-center text-2xl font-bold m-4 p-4 hover:bg-gray-500 duration-700">
        <h1>Listes des Etudiants</h1>
    </div>

    @if (session('success'))
        <div class="w-full bg-green-100 text-green-500 my-4 p-4">
            {{ session('success') }}
        </div>
    @elseif(session('update'))
        <div class="w-full bg-blue-100 text-blue-500 my-4 p-4">
            {{ session('update') }}
        </div>
    @elseif(session('delete'))
        <div class="w-full bg-red-100 text-red-500 my-4 p-4">
            {{ session('delete') }}
        </div>
    @endif

    <section class="mx-auto max-w-full rounded-2xl shadow p-4">
        <div class="overflow-x-auto rounded-2xl shadow border border-slate-200">
            <table class="min-w-full divide-y divide-slate-200 bg-white">
                <thead class="bg-slate-50">
                    <tr>
                        <th class="px-4 py-3 text-left text-sm font-semibold uppercase tracking-wider text-slate-600">Nom</th>
                        <th class="px-4 py-3 text-left text-sm font-semibold uppercase tracking-wider text-slate-600">Prenom</th>
                        <th class="px-4 py-3 text-left text-sm font-semibold uppercase tracking-wider text-slate-600">Age</th>
                        <th class="px-4 py-3 text-left text-sm font-semibold uppercase tracking-wider text-slate-600">Email</th>
                        <th class="px-4 py-3 text-left text-sm font-semibold uppercase tracking-wider text-slate-600">Classe</th>
                        <th class="px-4 py-3 text-left text-sm font-semibold uppercase tracking-wider text-slate-600">Contact</th>
                        <th class="px-4 py-3 text-left text-sm font-semibold uppercase tracking-wider text-slate-600">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @forelse ($etudiants as $etudiant)
                        <tr class="hover:bg-slate-50 transition">
                            <td class="px-4 py-3 text-sm text-slate-800">{{ $etudiant->nom }}</td>
                            <td class="px-4 py-3 text-sm text-slate-800">{{ $etudiant->prenom }}</td>
                            <td class="px-4 py-3 text-sm text-slate-800">{{ $etudiant->age }} ans</td>
                            <td class="px-4 py-3 text-sm text-slate-800">{{ $etudiant->email }}</td>
                            <td class="px-4 py-3 text-sm text-slate-800">{{ $etudiant->classe }}</td>
                            <td class="px-4 py-3 text-sm text-slate-800">{{ $etudiant->contact }}</td>
                            <td class="px-4 py-3 text-right text-sm space-x-2 flex items-center">

                                <a href="{{ route('etudiant.show', $etudiant->id) }}" title="Voir"
                                   class="inline-block p-2 rounded-md bg-blue-500 text-white text-xs font-medium shadow hover:bg-blue-600">
                                    <x-heroicon-o-eye class="w-5 h-5" />
                                </a>

                                <a href="{{ route('etudiant.edit', $etudiant->id) }}" title="Modifier"
                                   class="inline-block p-2 rounded-md bg-indigo-500 text-white text-xs font-medium shadow hover:bg-indigo-600">
                                    <x-heroicon-o-pencil-square class="w-5 h-5" />
                                </a>

                                <form action="{{ route('etudiant.destroy', $etudiant->id) }}" method="POST"
                                      class="inline-block" onsubmit="return confirm('Supprimer cet étudiant ?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" title="Supprimer"
                                            class="bg-red-500 inline-block p-2 text-white text-xs font-medium shadow hover:bg-red-600 rounded-md cursor-pointer">
                                        <x-heroicon-o-trash class="w-5 h-5" />
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="py-6 text-center text-sm text-slate-500">
                                Aucun étudiant enregistré !
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </section>
@endsection