<?php

declare(strict_types=1);

namespace App;

class Shawarma
{
    protected float $cost;
    protected array $ingredients;
    protected string $title;

    public function __construct(float $cost, array $ingredients, string $title)
    {
        $this->setCost($cost);
        $this->setIngredients($ingredients);
        $this->setTitle($title);
    }

    public function getCost(): float //возвращает цену шаурмы
    {
        return $this->cost;
    }

    public function setCost(float $cost): void
    {
        $this->cost = $cost;
    }

    public function getIngredients(): array // возвращает массив из ингредиентов шаурмы (строки)
    {
        return $this->ingredients;
    }

    public function setIngredients(array $ingredients): void
    {
        $this->ingredients = $ingredients;
    }

    public function getTitle(): string //возвращает название шаурмы
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }
}
