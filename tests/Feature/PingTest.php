<?php

it('returns 200 from ping endpoint', function () {
    $response = $this->getJson('/api/ping');

    $response->assertStatus(200)
             ->assertJsonStructure(['message']);
});

it('returns 200 from pong endpoint', function () {
    $response = $this->getJson('/api/pong');

    $response->assertStatus(200)
             ->assertJsonStructure(['message']);
});
