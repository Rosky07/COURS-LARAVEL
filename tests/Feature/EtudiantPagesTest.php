<?php

namespace Tests\Feature;

use App\Models\Etudiant;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class EtudiantPagesTest extends TestCase
{
    use RefreshDatabase;

    public function test_student_list_and_create_form_render(): void
    {
        $this->get(route('etudiant.index'))
            ->assertOk()
            ->assertSee('Le registre est encore vide');

        $this->get(route('etudiant.create'))
            ->assertOk()
            ->assertSee('Ajouter un étudiant')
            ->assertSee('name="age"', false)
            ->assertSee('name="contact"', false);
    }

    public function test_student_details_and_edit_form_render(): void
    {
        $etudiant = Etudiant::create([
            'nom' => 'Kouassi',
            'prenom' => 'Aïcha',
            'age' => 16,
            'email' => 'aicha@example.com',
            'classe' => '3e A',
            'contact' => '0700000000',
        ]);

        $this->get(route('etudiant.show', $etudiant))
            ->assertOk()
            ->assertSee('Aïcha Kouassi')
            ->assertSee('aicha@example.com');

        $this->get(route('etudiant.edit', $etudiant))
            ->assertOk()
            ->assertSee('Enregistrer les modifications')
            ->assertSee('value="aicha@example.com"', false);
    }
}
