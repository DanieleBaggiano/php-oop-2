<?php
require_once 'Product.php';

class Toy extends Product
{
    private string $material;

    public function __construct(string $title, float $price, string $image, Category $category, string $material)
    {
        parent::__construct($title, $price, $image, $category);
        $this->material = $material;
    }

    public function getMaterial(): string
    {
        return $this->material;
    }

    public function getType(): string
    {
        return "Toy";
    }
}
