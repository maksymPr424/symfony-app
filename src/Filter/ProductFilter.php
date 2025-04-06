<?php
namespace App\Filter;

class ProductFilter {
    private ?string $name = null;

    public function getName(): ?string {
        return $this->name;
    }

    public function setName(?string $name): ?ProductFilter {
        $this->name = $name;

        return $this;
    }
}