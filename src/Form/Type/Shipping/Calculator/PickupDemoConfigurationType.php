<?php
/**
 * @author    Matthieu Vion
 * @copyright 2018 Magentix
 * @license   https://opensource.org/licenses/MIT MIT License
 * @link      https://github.com/magentix/pickup-demo-plugin
 */
declare(strict_types=1);

namespace Magentix\SyliusPickupDemoPlugin\Form\Type\Shipping\Calculator;

use Sylius\Bundle\MoneyBundle\Form\Type\MoneyType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Type;

final class PickupDemoConfigurationType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('amount', MoneyType::class, [
                'label' => 'pickup_demo.form.shipping_method.amount',
                'constraints' => [
                    new NotBlank(),
                    new Type(['type' => 'integer']),
                ],
                'empty_data' => '0'
            ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix(): string
    {
        return 'sylius_shipping_calculator_demo_pickup';
    }
}
