<?php

namespace App\Tests;

use App\Entity\Pdf;
use App\Entity\User;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testGetterSetter(): void
    {
        /** @var User $user */
        $user = new User();

        $lastname = 'Mon Test avec éè des accents.';

        /** @var Pdf $pdf */
        $pdf = new Pdf();
        $user->setLastname($lastname);

        $user->addPdf($pdf);

        $this->assertEquals($lastname, $user->getLastname(), "Test Getter");
        $this->assertInstanceOf(DateTimeImmutable::class, $user->getCreatedAt(), "Date de création");
        $this->assertContains($pdf, $user->getPdfs(), "Insertions pdfs");

        // autres tests
        // ...
    }
}
