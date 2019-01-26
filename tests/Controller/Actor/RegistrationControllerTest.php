<?php

namespace Test\App\Controller\Actor;

use App\DataFixtures\Actor\ConfirmTokenFixtures;
use App\DataFixtures\CityFixtures;
use App\Tests\HttpTestCase;

/**
 * @group functional
 */
class RegistrationControllerTest extends HttpTestCase
{
    public function provideRequestsForLoggedInUser(): iterable
    {
        yield ['GET', '/register'];
        yield ['POST', '/register', [
            'emailAddress' => 'new@mobilisation-eu.code',
            'firstName' => 'Rémi',
            'lastName' => 'Gardien',
            'birthday' => ['year' => 1988, 'month' => 11, 'day' => 27],
            'plainPassword' => ['first' => 'test123', 'second' => 'test123'],
            'address' => '3 random street',
            'country' => 'FR',
            'zipCode' => '92270',
            'city' => CityFixtures::CITY_02_UUID,
        ]];
        yield ['GET', '/register/check-email'];
        yield ['GET', '/register/resend-confirmation'];
        yield ['GET', '/register/resend-confirmation/check-email'];
        yield ['GET', '/register/confirm/'.ConfirmTokenFixtures::TOKEN_04_UUID];
    }

    /**
     * @dataProvider provideRequestsForLoggedInUser
     */
    public function testLoggedInUserCannotRegister(string $method, string $uri, array $parameters = []): void
    {
        $this->authenticateActor('remi@mobilisation-eu.code');

        $this->client->request($method, $uri, $parameters);
        $this->assertAccessDeniedResponse();
    }

    public function testRegister(): void
    {
        $crawler = $this->client->request('GET', '/register');
        $this->assertResponseSuccessFul();

        $this->client->submit($crawler->selectButton('Register')->form([
            'emailAddress' => 'new@mobilisation-eu.code',
            'firstName' => 'Rémi',
            'lastName' => 'Gardien',
            'birthday' => ['year' => 1988, 'month' => 11, 'day' => 27],
            'plainPassword' => ['first' => 'test123', 'second' => 'test123'],
            'address' => null,
            'city' => CityFixtures::CITY_02_UUID,
        ]));
        $this->assertIsRedirectedTo('/register/check-email');
        $this->assertMailSent([
            'to' => 'new@mobilisation-eu.code',
            'subject' => 'Welcome Rémi, please confirm your registration.',
            'body' => "@string@
                        .contains('Welcome Rémi!')
                        .matchRegex('#href=\"http://localhost/register/confirm/".self::UUID_PATTERN."#\"')",
        ]);

        $this->client->followRedirect();
        $this->assertResponseSuccessFul();
        $this->assertResponseContains('A mail has been sent to confirm your account.');
        $this->assertActorConfirmed('new@mobilisation-eu.code', false);
    }

    public function provideBadRegistrations(): iterable
    {
        yield [
            'emailAddress' => 'remi@mobilisation-eu.code',
            'firstName' => 'Rémi',
            'lastName' => 'Gardien',
            'birthday' => ['year' => 1988, 'month' => 11, 'day' => 27],
            'plainPassword' => ['first' => null, 'second' => null],
            'address' => '123 random street',
            'city' => CityFixtures::CITY_02_UUID,
            'errors' => [
                'An actor is already registered with this email.',
                'Please enter a password.',
            ],
        ];

        yield [
            'emailAddress' => 'REMI@MOBILISATION-EU.CODE',
            'firstName' => 'Rémi',
            'lastName' => 'Gardien',
            'birthday' => ['year' => 1988, 'month' => 11, 'day' => 27],
            'plainPassword' => ['first' => '', 'second' => ''],
            'address' => '123 random street',
            'city' => CityFixtures::CITY_02_UUID,
            'errors' => [
                'An actor is already registered with this email.',
                'Please enter a password.',
            ],
        ];

        yield [
            'emailAddress' => 'unknown@test',
            'firstName' => 'Rémi',
            'lastName' => 'Gardien',
            'birthday' => ['year' => 1988, 'month' => 11, 'day' => 27],
            'plainPassword' => ['first' => '123', 'second' => '123'],
            'address' => '123 random street',
            'city' => 'abcdef',
            'errors' => [
                'This email address is not valid.',
                'Password must be at least 6 characters long.',
                'This city is not valid.',
            ],
        ];

        yield [
            'emailAddress' => null,
            'firstName' => null,
            'lastName' => null,
            'birthday' => ['year' => null, 'month' => 11, 'day' => 27],
            'plainPassword' => ['first' => 'test123', 'second' => '123test'],
            'address' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce aliquet ligula ut elit consectetur, quis vulputate felis vestibulum. Vivamus rutrum metus leo, in dignissim lectus fringilla nec.',
            'city' => null,
            'errors' => [
                'Please enter your email address.',
                'Please enter your first name.',
                'Please enter your last name.',
                'This date is not valid.',
                'Passwords do not match.',
                'This city is not valid.',
                'The address can not exceed 150 characters.',
            ],
        ];
    }

    /**
     * @dataProvider provideBadRegistrations
     * @group debug
     */
    public function testRegisterFailure(
        ?string $emailAddress,
        ?string $firstName,
        ?string $lastName,
        array $birthday,
        array $password,
        ?string $address,
        ?string $cityUuid,
        array $errors
    ): void {
        $crawler = $this->client->request('GET', '/register');
        $this->assertResponseSuccessFul();

        $this->client->submit($crawler->selectButton('Register')->form([
            'emailAddress' => $emailAddress,
            'firstName' => $firstName,
            'lastName' => $lastName,
            'birthday' => $birthday,
            'plainPassword' => $password,
            'address' => $address,
            'city' => $cityUuid,
        ]));
        $this->assertResponseSuccessFul();
        $this->assertResponseContains($errors);
    }

    public function testResendConfirmationSuccess(): void
    {
        $this->assertActorConfirmed('patrick@mobilisation-eu.code', false);

        $crawler = $this->client->request('GET', '/register/resend-confirmation');
        $this->assertResponseSuccessFul();

        $this->client->submit($crawler->selectButton('Resend confirmation mail')->form([
            'emailAddress' => 'patrick@mobilisation-eu.code',
        ]));
        $this->assertIsRedirectedTo('/register/resend-confirmation/check-email');
        $this->assertMailSent([
            'to' => 'patrick@mobilisation-eu.code',
            'subject' => 'Welcome Patrick, please confirm your registration.',
            'body' => "@string@
                        .contains('Welcome Patrick!')
                        .matchRegex('#href=\"http://localhost/register/confirm/".self::UUID_PATTERN."#\"')",
        ]);

        $this->client->followRedirect();
        $this->assertResponseSuccessFul();
        $this->assertResponseContains('A new mail has been sent with a link to confirm your account.');
        $this->assertActorConfirmed('patrick@mobilisation-eu.code', false);
    }

    public function testResendConfirmationUnknownEmail(): void
    {
        $crawler = $this->client->request('GET', '/register/resend-confirmation');
        $this->assertResponseSuccessFul();

        $this->client->submit($crawler->selectButton('Resend confirmation mail')->form([
            'emailAddress' => 'unknown@mobilisation-eu.code',
        ]));
        $this->assertIsRedirectedTo('/register/resend-confirmation/check-email');
        $this->assertNoMailSent();

        $this->client->followRedirect();
        $this->assertResponseSuccessFul();
        $this->assertResponseContains('A new mail has been sent with a link to confirm your account.');
    }

    public function provideResendConfirmationFailures(): iterable
    {
        yield [
            'email' => 'leonard@mobilisation-eu.code',
            'alreadyConfirmed' => false,
            'redirectedTo' => '/login',
            'errors' => ['A mail has already been sent in the last 2 hours'],
        ];

        yield [
            'email' => 'remi@mobilisation-eu.code',
            'alreadyConfirmed' => true,
            'redirectedTo' => '/login',
            'errors' => ['Your account is already confirmed.'],
        ];
    }

    /**
     * @dataProvider provideResendConfirmationFailures
     */
    public function testResendConfirmationFailure(
        string $email,
        bool $alreadyConfirmed,
        string $redirectedTo,
        array $errors
    ): void {
        $this->assertActorConfirmed($email, $alreadyConfirmed);

        $crawler = $this->client->request('GET', '/register/resend-confirmation');
        $this->assertResponseSuccessFul();

        $this->client->submit($crawler->selectButton('Resend confirmation mail')->form([
            'emailAddress' => $email,
        ]));
        $this->assertIsRedirectedTo($redirectedTo);
        $this->assertNoMailSent();

        $this->client->followRedirect();
        $this->assertResponseSuccessFul();
        $this->assertResponseContains($errors);
        $this->assertActorConfirmed($email, $alreadyConfirmed);
    }

    public function testConfirmSuccess(): void
    {
        $this->assertActorConfirmed('leonard@mobilisation-eu.code', false);

        $this->client->request('GET', '/register/confirm/'.ConfirmTokenFixtures::TOKEN_04_UUID);
        $this->assertIsRedirectedTo('/login');
        $this->assertMailSent([
            'to' => 'leonard@mobilisation-eu.code',
            'subject' => 'Welcome Léonard, your registration is now complete.',
            'body' => "@string@
                        .contains('Welcome Léonard!')
                        .contains('Your registration is now complete.')
                        .contains('href=\"http://localhost/login\"')",
        ]);

        $this->client->followRedirect();
        $this->assertResponseSuccessFul();
        $this->assertResponseContains('Your registration is now complete.');
        $this->assertActorConfirmed('leonard@mobilisation-eu.code', true);
    }

    public function provideConfirmationFailures(): iterable
    {
        // token is already consumed
        yield [
            'email' => 'remi@mobilisation-eu.code',
            'alreadyConfirmed' => true,
            'token' => ConfirmTokenFixtures::TOKEN_01_UUID,
            'redirectedTo' => '/login',
            'errors' => ['Your account is already confirmed.'],
        ];

        // token is expired but user is now confirmed
        yield [
            'email' => 'titouan@mobilisation-eu.code',
            'alreadyConfirmed' => true,
            'token' => ConfirmTokenFixtures::TOKEN_02_UUID,
            'redirectedTo' => '/login',
            'errors' => ['Your account is already confirmed.'],
        ];

        // token is expired
        yield [
            'email' => 'patrick@mobilisation-eu.code',
            'alreadyConfirmed' => false,
            'token' => ConfirmTokenFixtures::TOKEN_05_UUID,
            'redirectedTo' => '/register/resend-confirmation',
            'errors' => ['This link is no longer valid.'],
        ];
    }

    /**
     * @dataProvider provideConfirmationFailures
     */
    public function testConfirmationFailure(
        string $email,
        bool $alreadyConfirmed,
        string $token,
        string $redirectedTo,
        array $errors
    ): void {
        $this->assertActorConfirmed($email, $alreadyConfirmed);

        $this->client->request('GET', "/register/confirm/$token");
        $this->assertIsRedirectedTo($redirectedTo);

        $this->client->followRedirect();
        $this->assertResponseSuccessFul();
        $this->assertResponseContains($errors);
        $this->assertActorConfirmed($email, $alreadyConfirmed);
    }

    private function assertActorConfirmed(string $email, bool $expected): void
    {
        $actorRepository = $this->getActorRepository();
        $actorRepository->clear();

        $this->assertSame($expected, $actorRepository->findOneByEmail($email)->isConfirmed());
    }
}
