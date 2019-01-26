<?php

namespace App\Admin;

use App\Entity\Administrator;
use App\Form\EventListener\PasswordEncoderListener;
use App\Form\RepeatedPasswordType;
use Scheb\TwoFactorBundle\Security\TwoFactor\Provider\Google\GoogleAuthenticator;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\DoctrineORMAdminBundle\Filter\ChoiceFilter;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class AdministratorAdmin extends AbstractAdmin
{
    private $passwordEncoderListener;
    private $googleAuthenticator;

    private const ROLES = [
        'Super administrator' => 'ROLE_SUPER_ADMIN',
        'Dashboard administrator' => 'ROLE_ADMIN',
        'Actors administrator' => 'ROLE_ADMIN_ACTORS',
        'Groups administrator' => 'ROLE_ADMIN_GROUPS',
    ];

    public function __construct(
        $code,
        $class,
        $baseControllerName,
        PasswordEncoderListener $passwordEncoderListener,
        GoogleAuthenticator $googleAuthenticator
    ) {
        parent::__construct($code, $class, $baseControllerName);

        $this->passwordEncoderListener = $passwordEncoderListener;
        $this->googleAuthenticator = $googleAuthenticator;
    }

    /**
     * @param Administrator $administrator
     */
    public function prePersist($administrator)
    {
        $administrator->setGoogleAuthenticatorSecret($this->googleAuthenticator->generateSecret());
    }

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('emailAddress', EmailType::class, [
                'label' => 'Email address',
            ])
            ->add('roles', ChoiceType::class, [
                'label' => 'Roles',
                'expanded' => true,
                'multiple' => true,
                'choices' => self::ROLES,
            ])
            ->add('plainPassword', RepeatedPasswordType::class, [
                'required' => $this->isCurrentRoute('create'),
            ])
        ;

        if (!$this->isCurrentRoute('create')) {
            $formMapper->add('googleAuthenticatorSecret', TextType::class, [
                'label' => 'Google Authenticator key',
                'required' => false,
            ]);
        }

        $formMapper
            ->getFormBuilder()
            ->addEventSubscriber($this->passwordEncoderListener)
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('emailAddress', null, [
                'label' => 'Email address',
                'show_filter' => true,
            ])
            ->add('roles', ChoiceFilter::class, [
                'label' => 'Roles',
                'show_filter' => true,
                'field_type' => ChoiceType::class,
                'field_options' => [
                    'multiple' => true,
                    'choices' => self::ROLES,
                ],
            ])
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('emailAddress', null, [
                'label' => 'Email address',
            ])
            ->add('_action', null, [
                'virtual_field' => true,
                'actions' => [
                    'qrcode' => [
                        'template' => 'admin/administrator/_list_qrcode.html.twig',
                    ],
                    'edit' => [],
                    'delete' => [],
                ],
            ])
        ;
    }
}
