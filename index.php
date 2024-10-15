<?php
    
    class Category {
        public $name;
        public $icon;

        function __construct(string $name, string $icon) {
            $this->name = $name;
            $this->icon = $icon;
        }
    }
    

    class Product {
        public $title;
        public $price;
        public $image;
        public $category;

        function __construct(string $title, float $price, string $image, Category|null $category) {
            $this->title = $title;
            $this->price = $price;
            $this->image = $image;
            $this->setCategory($category);
        }

        public function getCategory(){
            return $this->category;
        }

        public function setCategory(Category|null  $category) {
            $this->category = $category;
        }
    }

    class Food extends Product{
        public $ingredients;

        function __construct(string $title, float $price, string $image, Category|null $category = null, string $ingredients = null) {
            parent:: __construct($title, $price, $image, $category);

            $this->ingredients = $ingredients;
        }
    }

    class Toy extends Product{
        public $materials;

        function __construct(string $title, float $price, string $image, Category|null $category = null, string $materials = null) {
            parent:: __construct($title, $price, $image, $category);

            $this->materials = $materials;
        }
    }

    class PetBed extends Product{
        public $size;

        function __construct(string $title, float $price, string $image, Category|null $category = null, string $size = null) {
            parent:: __construct($title, $price, $image, $category);

            $this->size = $size;
        }
    }


    $dogs = new Category('Cani', '🐕');
    $cats = new Category('Gatti', '🐈');

    $catsProduct = new Product(
        'Prodotto per Gatti',
        10.50,
        'https://img.poweredcache.net/www.quattrozampeinfamiglia.it/wp-content/uploads/2023/11/Gatti-giganti-1.jpg?rs=fit&w=900&h=600&ssl=1&format=webp',
        $cats
    );

    $catsFood = new Food(
        'Cibo per Gatti',
        15.99,
        'https://molinopisoni.it/56502-large_default/purina-felix-le-ghiottonerie-selezioni-deliziose-in-gelatina-12x85g.jpg',
        $cats,
        'Carne', 'Carote', 'Pomodoro'
    );

    $catsToy = new Toy(
        'Gioco per Gatti',
        20.99,
        'https://www.ulissequalityshop.com/wp-content/uploads/2017/04/camon-palestrina-gatti-gioco-appeso.jpg',
        $cats,
        'Plastic, Polyester'
    );

    $catsBed = new PetBed(
        'Cuccia per Gatti',
        30.99,
        'https://m.media-amazon.com/images/I/71hK+WBbldL._AC_UF894,1000_QL80_.jpg',
        $cats,
        'small'
    );

    $dogsProduct = new Product(
        'Prodotto per Cani',
        10.50,
        'https://exclusion.it/wp-content/uploads/2024/02/cani-da-lavoro.jpeg',
        $dogs
    );

    $dogsFood = new Food(
        'Cibo per Cani',
        15.99,
        'https://www.ilcarlinoamodomio.it/wp-content/uploads/2020/07/crocchette-cani.jpg',
        $dogs,
        'Carne', 'Carote', 'Pomodoro'
    );

    $dogsToy = new Toy(
        'Gioco per Cani',
        12.99,
        'https://www.amoreanimaleshop.it/wp-content/uploads/2017/01/Ferribiella-Classic-Kong-Portabiscotto.jpg',
        $dogs,
        'Plastic, Polyester'
    );

    $dogsBed = new PetBed(
        'Cuccia per Cani',
        90.99,
        'https://static.zoomalia.com/prod_img/112/xl_4529431c87f273e507e6040fcb07dcb45091548319881.jpg',
        $dogs,
        'Extra Large'
    );

    $products = [
        $catsProduct,
        $catsFood,
        $catsToy,
        $catsBed,
        $dogsProduct,
        $dogsFood,
        $dogsToy,
        $dogsBed
    ]

    
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sito per animali</title>
    </head>

    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!--Fontawesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <body>

        <main>
            <div class="container">
                <div classs="row g-3">
                    <?php
                        foreach ($products as $product) {
                    ?>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                <div class="card">
                                    <img src="<?php echo $product->image; ?>" class="card-img-top" alt="<?php echo $product->title; ?>">
                                    <div class="card-body">
                                        <h2>
                                            <?php echo $product->title; ?>
                                        </h2>
                                        <h6>
                                            <i class="fa-solid fa-tag"></i>
                                            <?php echo $product->category->icon; ?> 
                                            <?php echo $product->category->name; ?> 
                                        </h6>
                                        <hr>
                                        <h5>
                                            € <?php echo $product->price; ?>
                                        </h5>

                                        <h6>
                                            Category: <?php echo get_class($product); ?> 
                                        </h6>


                                    </div>
                                </div>
                            </div>

                    <?php
                        }
                    ?>
                </div>
            </div>
        </main>
            
    </body>
</html>