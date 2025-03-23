<?php

test('Prueba de que la pagina home se renderiza', function () {
    $response = $this->get('/');
    $response->assertStatus(200);
});
