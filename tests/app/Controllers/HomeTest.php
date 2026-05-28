<?php

namespace App\Tests\Controllers;

use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\FeatureTestTrait;

class HomeTest extends CIUnitTestCase
{
    use FeatureTestTrait;

    // Test 1: Homepage bumubukas (200 OK)
    public function testHomePage(): void
    {
        $result = $this->get('/');
        $result->assertStatus(200);
    }

    // Test 2: May "rippleHUB" sa page
    public function testHomePageContainsTitle(): void
    {
        $result = $this->get('/');
        $result->assertSee('rippleHUB');
    }

    // Test 3: May "Reserve a Seat" button
    public function testHomePageContainsCTA(): void
    {
        $result = $this->get('/');
        $result->assertSee('Reserve a Seat');
    }

    // Test 4: Hindi 404
    public function testHomePageIsNotMissing(): void
    {
        $result = $this->get('/');
        $this->assertNotEquals(404, $result->response()->getStatusCode());
    }
}