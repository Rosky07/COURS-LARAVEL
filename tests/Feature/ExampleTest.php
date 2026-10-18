<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_the_footer_logo_and_links_are_rendered(): void
    {
        $response = $this->get('/');
        $content = $response->getContent();

        $this->assertStringContainsString('É', $content);
        $this->assertStringContainsString('Gestion des étudiants', $content);
        $this->assertStringContainsString('Liste des étudiants', $content);
        $this->assertStringContainsString('Ajouter un étudiant', $content);
    }
}
