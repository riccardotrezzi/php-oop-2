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
        protected $category;

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
        'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.quattrozampeinfamiglia.it%2Fgatti-giganti-quali-sono-perche-sceglierli-e-come-curarli%2F&psig=AOvVaw2DyHidIsSa7tl-Y_B7Ef1f&ust=1729095594176000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCKDw6ZflkIkDFQAAAAAdAAAAABAE',
        $gatti
    );

    $catsFood = new Food(
        'Cibo per Gatti - Felix',
        15.99,
        'https://www.google.com/url?sa=i&url=https%3A%2F%2Fmolinopisoni.it%2Fcibo-umido-gatti%2F2287-purina-felix-le-ghiottonerie-selezioni-deliziose-in-gelatina-12x85g&psig=AOvVaw3DElInntzojUhTcji4G313&ust=1729093965616000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCMiR8Y_fkIkDFQAAAAAdAAAAABAE',
        $gatti,
        'Carne', 'Carote', 'Pomodoro'
    );

    $catsToy = new Toy(
        'Gioco per Gatti',
        20.99,
        'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.ulissequalityshop.com%2Fprodotto%2Fcamon-palestrina-in-peluche-con-gioco-per-gatti%2F&psig=AOvVaw12UcyWWbJ8Gw-ylhBd-ZFj&ust=1729095190905000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCJDo99bjkIkDFQAAAAAdAAAAABAJ',
        $gatti,
        'Plastic, Polyester'
    );

    $catsBed = new PetBed(
        'Cuccia per Gatti',
        30.99,
        'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.amazon.it%2FInterno-Inferiore-Antiscivolo-Domestici-capannone%2Fdp%2FB0CKSRJ2XK&psig=AOvVaw0-glZM1A_31SLPb3aE5zrv&ust=1729095307110000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCOjSj4_kkIkDFQAAAAAdAAAAABAE',
        $gatti,
        'small'
    );

    $dogsProduct = new Product(
        'Prodotto per Cani',
        10.50,
        'https://www.google.com/url?sa=i&url=https%3A%2F%2Fexclusion.it%2Fangeli-a-4-zampe-i-1000-modi-di-un-cane-per-aiutarci%2F&psig=AOvVaw2_y0SNljIjX8HHyRSTVyY3&ust=1729095760966000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCNDcoeflkIkDFQAAAAAdAAAAABAE',
        $cani
    );

    $dogsFood = new Food(
        'Cibo per Cani',
        15.99,
        'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.dm-drogeriemarkt.it%2Fcesar-cibo-umido-in-salsa-per-cani-con-pollo-e-verdure-p5900951253461.html&psig=AOvVaw2vvxvRvlyvIPrSKfquB2K0&ust=1729095781559000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCOCdtfDlkIkDFQAAAAAdAAAAABAE',
        $cani,
        'Carne', 'Carote', 'Pomodoro'
    );

    $dogsToy = new Toy(
        'Gioco per Cani',
        12.99,
        'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.amoreanimaleshop.it%2Fferribiella-classic-kong-portabiscotto%2F&psig=AOvVaw0dtxA-UUxBTDwG_EHY82Z8&ust=1729095803808000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCPDU8vrlkIkDFQAAAAAdAAAAABAE',
        $cani,
        'Plastic, Polyester'
    );

    $dogsBed = new PetBed(
        'Cuccia per Cani',
        90.99,
        'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.zoomalia.it%2Fnegozio-di-animali%2Fcuccia-in-legno-per-cani-premium-domus-p-112.html&psig=AOvVaw2x5VBkIB6DB0CwIZNHoXg_&ust=1729095832080000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCMic7YjmkIkDFQAAAAAdAAAAABAJ',
        $cani,
        'Extra Large'
    );

    
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

    <body>
        <div class="container">
            <div>

            </div>
        </div>
    </body>
</html>