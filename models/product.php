<?php
class Product
{
    private string $title;
    private float $price;
    private string $image;
    private Category $category;

    public function __construct(string $title, float $price, string $image, Category $category)
    {
        $this->title = $title;
        $this->price = $price;
        $this->image = $image;
        $this->category = $category;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getImage(): string
    {
        return $this->image;
    }

    public function getCategory(): Category
    {
        return $this->category;
    }

    public function getType(): string
    {
        return "Product";
    }
}
