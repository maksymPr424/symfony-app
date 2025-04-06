<?php

namespace App\Form;

use App\Entity\Category;
use App\Entity\Product;
use App\Entity\Tag;
use App\Form\DataTransformer\TagTransformer;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductType extends AbstractType
{

    public function __construct(private readonly TagTransformer $transformer)
    {
        
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'required' => true,
                'help' => 'Write a product name',
                'attr' => [
                    'class'=>'myclass'
                ]
                
            ])
            ->add('price', NumberType::class, [
                'required' => true,
                
            ])
            ->add('description', TextareaType::class, [
                'required' => true,
                
            ])
            ->add('category', EntityType::class, [
                'class' => Category::class,
                'query_builder' => function ($repository) {
                    return $repository->createQueryBuilder('p')->orderBy('p.name', 'ASC');
                },
                'choice_label' => 'name',
                'required' => false,
                'empty_data' => '',
                'placeholder' => 'Category select'
            ])
            ->add('tag', TextType::class, [
                'label' => 'Tags',
                'required' => false,
            ]);

        $builder->get('tag')->addModelTransformer($this->transformer);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Product::class,
        ]);
    }
}
