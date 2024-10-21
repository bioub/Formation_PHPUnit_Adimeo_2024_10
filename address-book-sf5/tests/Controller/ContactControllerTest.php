<?php

namespace App\Tests\Controller;

use App\Entity\Contact;
use App\Repository\ContactRepository;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ContactControllerTest extends WebTestCase
{
    public function testContactListIsAccessible(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/contacts/');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('body', 'Romain');
    }

    public function testContactListIsAccessibleWithMock(): void
    {
        $client = static::createClient();

        $mockRepository = $this->createMock(ContactRepository::class);

        $mockRepository->expects($this->once())
            ->method('findAll')
            ->willReturn([
                (new Contact())->setId(1)->setFirstName('Toto')->setLastName('Titi'),
            ]);

        $client->getContainer()->set(ContactRepository::class, $mockRepository);

        $crawler = $client->request('GET', '/contacts/');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('body', 'Toto');
    }
}
