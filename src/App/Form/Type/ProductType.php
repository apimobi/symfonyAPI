<?php
namespace App\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class ProductType Form
 *
 * @category Form
 * @package  App\Form\
 */
class ProductType extends AbstractType
{
    public function getName()
    {
      return null;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'about',
                TextType::class,
                [
                    'label'  => 'about',
                    'constraints' => [
                    new Assert\NotBlank(),
                    ],
                ]
            )
            ->add(
                'author',
                IntegerType::class,
                [
                    'label' => 'author',
                ]
            )
            ->add(
                'datePublished',
                DateType::class,
                [
                    'label' => 'datePublished',
                ]
            )
            ->add(
                'keywords',
                TextType::class,
                [
                    'label' => 'keywords',
                ]
            )
            ->add(
                'text',
                TextType::class,
                [
                    'label' => 'text',
                ]
            )
            ->add(
                'aggregateRating',
                NumberType::class,
                [
                    'label' => 'aggregateRating',
                ]
            )
            ->add(
                'url',
                TextType::class,
                [
                    'label' => 'url',
                ]
            )
            ->add(
                'image',
                TextType::class,
                [
                    'label' => 'image',
                ]
            )
            ->add('Valider', SubmitType::class);
    }

}
