<?php

declare(strict_types=1);

namespace App;

final class LambShawarma extends Shawarma
{
    public function __construct(float $cost = 85, array $ingredients = ['острый соус',
        'огурцы маринованные', 'кинза', 'помидоры свежие', 'маринованный лук с барбарисом и зеленью',
        'мясо баранины', 'лаваш арабский'], string $title = 'Шаурма баранья')
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
