<?php
namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AdminControllerTest extends WebTestCase
{
    public function testBackoffice()
    {
        $client = static::createClient();

        $client->request('GET', '/backoffice');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }
}