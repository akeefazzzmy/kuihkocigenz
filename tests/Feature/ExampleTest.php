<?php

test('the landing page showcases santan banjir koci and ordering details', function () {
    $this->withoutVite();

    $response = $this->get('/');

    $response
        ->assertOk()
        ->assertSee('lang="ms"', false)
        ->assertSee('Pulut hitam.')
        ->assertSee('Santan banjir.')
        ->assertSee('koci-carousel/koci-12.jpg')
        ->assertSee('Desa Pinggiran Putra')
        ->assertSee('Lalamove')
        ->assertSee('Grab')
        ->assertSee('Self pickup')
        ->assertSee('id="primary-navigation"', false)
        ->assertSee('aria-roledescription="karusel"', false)
        ->assertSee('data-carousel-index="11"', false)
        ->assertDontSee('1,200+');
});
