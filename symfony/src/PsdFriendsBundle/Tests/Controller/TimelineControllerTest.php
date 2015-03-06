<?php

namespace PsdFriendsBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class TimelineControllerTest extends WebTestCase
{
    public function testTimeline()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/timeLine');
    }

}
