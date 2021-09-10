<?php

declare(strict_types=1);

namespace App;

final class BeefShawarma extends Shawarma
{
    public function __construct(float $cost = 75, array $ingredients = ['чесночный соус', 'говяжий окорок',
        'огурцы маринованные', 'маринованный лук с барбарисом и зеленью', 'салат коул слоу', 'тандырный лаваш',
        'помидоры свежие', 'хумус', 'соус тахин'], string $title = 'Шаурма говяжья')
    {
        parent::__construct($cost, $ingredients, $title);
    }

    public function getCost(): float
    {
        return $this->cost;
    }

    public function getIngredients(): array
    {
        return $this->ingredients;
    }

    public function getTitle(): string
    {
        return $this->title;
    }
}
