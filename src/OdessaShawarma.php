<?php

declare(strict_types=1);

namespace App;

final class OdessaShawarma extends Shawarma
{
    public function __construct(float $cost = 69, array $ingredients = ['огурцы маринованные', 'картофель жареный',
        'чесночный соус', 'тандырный лаваш', 'маринованный лук с барбарисом и зеленью', 'мясо куриное',
        'салат коул слоу', 'корейская морковь'], string $title = 'Шаурма Одесская')
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
