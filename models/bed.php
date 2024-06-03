<?php
require_once 'Product.php';

class Bed extends Product
{
    private string $size;

    public function __construct(string $title, float $price, string $image, Category $category, string $size)
    {
        parent::__construct($title, $price, $image, $category);
        $this->size = $size;
    }

    public function getSize(): string
    {
        return $this->size;
    }

    public function getType(): string
    {
        return "Bed";
    }
}
