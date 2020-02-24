<?php


namespace App\Tests;


use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AlbumControllerTest extends WebTestCase
{
    public function testGetPagedAlbums() {
        $client = static::createClient();
        $client->request('GET', '/albums?_page=1&_limit=5');
        $response = $client->getResponse();

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertEquals(1, json_decode($response->getContent())->page);
        $this->assertEquals(5, json_decode($response->getContent())->limit);
        $this->assertEquals(5, json_decode($response->getContent())->count);
        $this->assertEquals(5, count(json_decode($response->getContent())->data));
    }

    public function testGetAlbum() {
        $client = static::createClient();
        $client->request('GET', '/albums/1/');
        $response = $client->getResponse();

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertEquals("Test Album 0", json_decode($response->getContent())->name);
    }

    public function testCreateAlbum() {
        $client = static::createClient();
        $response = $client->request('POST', '/albums/', [
            'json' => ['name' => 'Madonna',
                        'artists' => [2],
                        'year' => '1986',
                        'generes' => [14],
                        'type' => 1,
                        'support' => 1],
        ]);

        ///var_dump($response);

        //$this->assertEquals(201, $response->getStatusCode());
    }

    //updateAlbum

    //deleteAlbum*/
}