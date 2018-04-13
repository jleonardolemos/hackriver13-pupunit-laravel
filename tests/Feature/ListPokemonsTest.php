<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ListPokemonsTest extends TestCase
{
    use RefreshDatabase;

    public function testCanISeeTheList()
    {
        $pokemon = factory(\App\Pokemon::class)->create();
        $pokemons = collect(
            $this->get(route('pokemons.index'))->getData()
        );

        $this->assertContains($pokemon->name, $pokemons->pluck('name'));
    }
}
