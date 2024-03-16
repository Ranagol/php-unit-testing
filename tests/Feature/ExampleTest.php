<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     * In this example, a GET request is sent to the root URL, and the returned response is assigned
     * to the $response variable. On the following line, we check if the response has a success
     * code of 200 with the assertStatus() assertion.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
