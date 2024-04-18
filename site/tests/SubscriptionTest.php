<?php

namespace App\Tests;

use App\Entity\Subscription;
use PHPUnit\Framework\TestCase;

class SubscriptionTest extends TestCase
{
    public function testGetterSetter(): void
    {
        $subscription = new Subscription();

        $title = random_bytes(5);
        $description = random_bytes(10);

        $subscription->setTitle($title)
            ->setDescription($description)
            ;

        $this->assertEquals($title, $subscription->getTitle());
        $this->assertEquals($description, $subscription->getDescription());
    }
}
