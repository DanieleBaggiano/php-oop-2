<?php
require_once 'Product.php';

class Food extends Product
{
    private string $flavor;

    public function __construct(string $title, float $price, string $image, Category $category, string $flavor)
    {
        parent::__construct($title, $price, $image, $category);
        $this->flavor = $flavor;
    }

    public function getFlavor(): string
    {
        return $this->flavor;
    }

    public function getType(): string
    {
        return "Food";
    }
}
