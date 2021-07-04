<?php
/**
 * This file is part of PasswordStrength
 *
 * Copyright(c) Akira Kurozumi <info@a-zumi.net>
 *
 *  https://a-zumi.net
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plugin\PasswordStrength\Form\Extension;


use Eccube\Common\EccubeConfig;
use Eccube\Form\Type\RepeatedPasswordType;
use Rollerworks\Component\PasswordStrength\Validator\Constraints\PasswordStrength;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RepeatedPasswordTypeExtension extends AbstractTypeExtension
{
    /**
     * @var EccubeConfig
     */
    private $eccubeConfig;

    public function __construct(EccubeConfig $eccubeConfig)
    {
        $this->eccubeConfig = $eccubeConfig;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault(
            'options', [
                'constraints' => [
                    new PasswordStrength([
                        'minLength' => $this->eccubeConfig['eccube_password_min_len'],
                        'minStrength' => $this->eccubeConfig['eccube_password_min_strength']
                    ])
                ]
            ]
        );
    }

    /**
     * @return string
     */
    public function getExtendedType(): string
    {
        return RepeatedPasswordType::class;
    }

    /**
     * @return iterable
     */
    public static function getExtendedTypes(): iterable
    {
        yield RepeatedPasswordType::class;
    }
}
