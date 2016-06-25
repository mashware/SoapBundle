<?php
namespace Mash\SoapBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * Class DefaultControllerTest
 * @package Mash\SoapBundle\Tests\Controller
 */
class DefaultControllerTest extends WebTestCase
{
    /**
     * Test index
     * @return void
     */
    public function testIndex()
    {
        $client = static::createClient();

        $client->request('GET', '/');

        $this->assertContains('Hello World', $client->getResponse()->getContent());
    }
}
