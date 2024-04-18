<?php

namespace App\Tests;

use App\Entity\Pdf;
use App\Entity\User;
use PHPUnit\Framework\TestCase;

class PdfTest extends TestCase
{
    public function testGetterSetter(): void
    {
        $pdf = new Pdf();
        $user = new User();

        $lastname = random_bytes(10);
        $title = random_bytes(5);

        $user->setLastname($lastname);

        $pdf
            ->setTitle($title)
            ->setOwner($user)
        ;

        $this->assertEquals($title, $pdf->getTitle());
        $this->assertEquals($lastname, $pdf->getOwner()->getLastname(), "Get owner lastname");
    }
}
