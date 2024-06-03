<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Shop online per animali</title>
</head>

<body>
    <?php
    require_once __DIR__ . "/models/category.php";
    require_once __DIR__ . "/models/product.php";
    require_once __DIR__ . "/models/food.php";
    require_once __DIR__ . "/models/toy.php";
    require_once __DIR__ . "/models/bed.php";

    $categoryDog = new Category("Cani", "./img/dog-icon.png");
    $categoryCat = new Category("Gatti", "./img/cat-icon.jpeg");

    $food = new Food("Crocchette per Cani", 19.99, "./img/dog-food.png", $categoryDog, "Pollo");
    $toy = new Toy("Gioco per Gatti", 9.99, "./img/cat-toy.jpeg", $categoryCat, "Plastica");
    $bed = new Bed("Cuccia per Cani", 49.99, "./img/dog-bed.png", $categoryDog, "Large");

    function printProductCard(Product $product)
    {
        echo "<div class='product-card'>";
        echo "<img src='" . $product->getImage() . "' alt='" . $product->getTitle() . "' />";
        echo "<h2>" . $product->getTitle() . "</h2>";
        echo "<p>Prezzo: €" . $product->getPrice() . "</p>";
        echo "<p>Categoria: <img src='" . $product->getCategory()->getIcon() . "' alt='" . $product->getCategory()->getName() . "' /> " . $product->getCategory()->getName() . "</p>";
        echo "<p>Tipo: " . $product->getType() . "</p>";
        echo "</div>";
    }

    printProductCard($food);
    printProductCard($toy);
    printProductCard($bed);
    ?>
</body>

</html>