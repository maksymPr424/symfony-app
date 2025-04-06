<?php
// src/Form/DataTransformer/tagToNumberTransformer.php
namespace App\Form\DataTransformer;

use App\Entity\Tag;
use App\Repository\TagRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;

class TagTransformer implements DataTransformerInterface
{
    public function __construct(
        private EntityManagerInterface $entityManager,
        private TagRepository $tagRepository,
    ) {
    }

    public function transform($tags): string
    {

        if (null === $tags || count($tags) === 0) {
            return '';
        }

        $tagNames = [];
        
        foreach ($tags as $tag) {
            $tagNames[] = $tag->getName(); 
        }

        return implode(', ', $tagNames);
    }

    public function reverseTransform(mixed $value = null): ArrayCollection
    {
        if (null === $value) {
            return new ArrayCollection();
        }

        $items = explode(',', $value);
        $items = array_map('trim', $items);
        $items = array_unique($items);
        

        $tags = new ArrayCollection();

        foreach ($items as $item) {
            $tag = $this->tagRepository->findOneBy(['name' => strtolower($item)]);
            if (!$tag) {
                $tag = (new Tag())->setName(strtolower($item));
            }
            
            $tags->add($tag);
        }

        return $tags;
    }
}