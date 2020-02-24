<?php


namespace App\Tests;


use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class GenresControllerTest extends WebTestCase
{
    public function testGetAllGenres() {
        $client = static::createClient();

        $client->request('GET', '/genres/');

        $response = $client->getResponse();
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertEquals(149, count(json_decode($response->getContent())));
        $this->assertPostConditions("Pop", json_decode($response->getContent())[13]->name);
    }
}