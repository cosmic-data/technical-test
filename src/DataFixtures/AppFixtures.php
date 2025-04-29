<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;


class AppFixtures extends Fixture
{
    public function __construct(
        private readonly UserPasswordHasherInterface $userPasswordHash,
    ) {
    }

    public function load(ObjectManager $manager): void
    {
        $user1 = new User();
        $user1->setEmail('user1@site.com');
        $user1->setFirstName('user1');
        $user1->setLastName('user1');
        $user1->setPassword(
            $this->userPasswordHash->hashPassword($user1, 'user1')
        );

        $manager->persist($user1);
        $manager->flush();

        $user2 = new User();
        $user2->setEmail('user1@site.com');
        $user2->setFirstName('user2');
        $user2->setLastName('user2');
        $user2->setPassword(
            $this->userPasswordHash->hashPassword($user2, 'user2')
        );

        $manager->persist($user2);
        $manager->flush();
    }
}
