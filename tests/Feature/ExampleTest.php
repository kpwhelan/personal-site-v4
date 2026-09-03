<?php

test('redirects visitors to Project 407', function () {
    $response = $this->get(route('home'));

    $response->assertRedirect('https://project-407.com');
    $response->assertStatus(301);
});
