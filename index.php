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

    var_dump($dogs);
    var_dump($cats);

    $catsFood = new Food(
        'Cibo per Gatti - Felix',
        15.99,
        'https://www.google.com/url?sa=i&url=https%3A%2F%2Fmolinopisoni.it%2Fcibo-umido-gatti%2F2287-purina-felix-le-ghiottonerie-selezioni-deliziose-in-gelatina-12x85g&psig=AOvVaw3DElInntzojUhTcji4G313&ust=1729093965616000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCMiR8Y_fkIkDFQAAAAAdAAAAABAE',
        $gatti,
        'Carne', 'Carote', 'Pomodoro'
    );

    var_dump($catsProduct);

    $catsToy = new Toy(
        'Gioco per Gatti',
        20.99,
        'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.ulissequalityshop.com%2Fprodotto%2Fcamon-palestrina-in-peluche-con-gioco-per-gatti%2F&psig=AOvVaw12UcyWWbJ8Gw-ylhBd-ZFj&ust=1729095190905000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCJDo99bjkIkDFQAAAAAdAAAAABAJ',
        $gatti,
        'Plastic, Polyester'
    );

    var_dump($catsToy);

    $catsBed = new PetBed(
        'Cuccia per Gatti',
        30.99,
        'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.amazon.it%2FInterno-Inferiore-Antiscivolo-Domestici-capannone%2Fdp%2FB0CKSRJ2XK&psig=AOvVaw0-glZM1A_31SLPb3aE5zrv&ust=1729095307110000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCOjSj4_kkIkDFQAAAAAdAAAAABAE',
        $gatti,
        'Extra Large'
    );

    var_dump($catsToy);

    
?>