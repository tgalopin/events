<?php

namespace App\DataFixtures;

use App\Entity\Administrator;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AdministratorFixtures extends Fixture
{
    public const DEFAULT_PASSWORD = 'secret!12345';

    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager)
    {
        $superAdministartor = new Administrator();
        $superAdministartor->setEmailAddress('superadmin@mobilisation-eu.code');
        $superAdministartor->setPassword($this->encoder->encodePassword($superAdministartor, self::DEFAULT_PASSWORD));
        $superAdministartor->setRoles(['ROLE_SUPER_ADMIN']);

        $administrator = new Administrator();
        $administrator->setEmailAddress('admin@mobilisation-eu.code');
        $administrator->setPassword($this->encoder->encodePassword($administrator, self::DEFAULT_PASSWORD));
        $administrator->setGoogleAuthenticatorSecret('53YNXH6LFUOBT7LC');

        $manager->persist($superAdministartor);
        $manager->persist($administrator);

        $manager->flush();
    }
}
