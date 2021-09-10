<?php

declare(strict_types=1);

namespace App;

class ShawarmaCalculator
{
    private array $order = [];
    private float $price = 0;
    private array $ingredients = [];

    public function add(Shawarma $shawarma)
    {
        $this->order[] = $shawarma;
        $this->price += $shawarma->getCost();

        foreach ($shawarma->getIngredients() as $i) {
            if (!in_array($i, $this->ingredients)) {
                $this->ingredients[] = $i;
            }
        }
    }

    public function ingredients(): array // возвращает массив из ингредиентов шаурмы (строки)
    {
        return $this->ingredients;
    }

    public function price(): float //возвращает цену шаурмы
    {
        return $this->price;
    }
}
