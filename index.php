<!-- Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
L'e-commerce vende prodotti per animali.
I prodotti sono categorizzati, le categorie sono Cani o Gatti.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia).
Bonus (non opzionale):
organizzate il progetto come visto stamattina a lezione usando varie sottocartelle per inserire classi, layout e dati. -->


<?php
class Prodotti
{
    protected $name;
    protected $category;
    protected $image;
    protected $price;
    protected $description;

    public function __construct(string $name, string $category, float $price)
    {
        $this->name = $name;
        $this->category = $category;
        $this->price = $price;
    }

    /* Getters */

    public function getName()
    {
        return $this->name;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getDesc()
    {
        return $this->description;
    }

    /* Setters */

    public function setImage($image)
    {
        $this->image = $image;
    }

    public function setDesc($description)
    {
        $this->description = $description;
    }
}


class Cani extends Prodotti
{
    static protected $type = 'Per Cani';

    public function __construct(string $name, string $category, float $price)
    {
        $this->name = $name;
        $this->category = $category;
        $this->price = $price;
    }

    public function getStaticDog()
    {
        return self::$type;
    }
}

class Gatti extends Prodotti
{
    static protected $type = 'Per Gatti';

    public function __construct(string $name, string $category, float $price)
    {
        $this->name = $name;
        $this->category = $category;
        $this->price = $price;
    }

    public function getStaticCat()
    {
        return self::$type;
    }
}

$ciotolaBlu = new Cani('Ciotola Blu', 'Accessori', 69.99);
$ciotolaBlu->setDesc('Lorem, ipsum dolor.');

$mangineCani = new Cani('Purina Two', 'Alimentazione', 28.99);
$mangineCani->setDesc('Gnam!!');

$tiragraffi = new Gatti('Tiragraffi a torre', 'Accessori', 89.99);
$tiragraffi->setDesc('Per le unghie del tuo micio!');

$briscola = new Gatti('Briscola Per Gatti', 'Giochi', 9.95);
$briscola->setDesc('Non so bene nemmeno io come funziona');
?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <header>
        <nav class="navbar navbar-expand navbar-light bg-light">
            <div class="nav navbar-nav">
                <a class="nav-item nav-link active" href="#" aria-current="page">Home <span class="visually-hidden">(current)</span></a>
                <a class="nav-item nav-link" href="#">About Us</a>
            </div>
        </nav>
    </header>
    <div class="jumbo">
        <div class="p-5 mb-4 bg-light rounded-3 text-center ">
            <div class="container py-5">
                <h1 class="display-5 fw-bold">Custom jumbotron</h1>
                <p class=" fs-4">Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.</p>
                <button class="btn btn-primary btn-lg" type="button">About Us</button>
            </div>
        </div>
    </div>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-6 my-2">
                    <div class="card text-start">
                        <img class="card-img-top" src="https://picsum.photos/200/300" alt="Title" height="400">
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $ciotolaBlu->getName() ?></h4>
                            <p class="card-text"><?php echo $ciotolaBlu->getCategory() ?></p>
                            <p class="card-text"><?php echo $ciotolaBlu->getStaticDog() ?></p>
                            <p class="card-text"><?php echo $ciotolaBlu->getDesc() ?></p>
                            <h5 class="card-text"><?php echo $ciotolaBlu->getPrice() ?>€</h5>
                        </div>
                    </div>
                </div>
                <div class="col-6 my-2">
                    <div class="card text-start">
                        <img class="card-img-top" src="https://picsum.photos/200/300" alt="Title" height="400">
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $tiragraffi->getName() ?></h4>
                            <p class="card-text"><?php echo $tiragraffi->getCategory() ?></p>
                            <p class="card-text"><?php echo $tiragraffi->getStaticCat() ?></p>
                            <p class="card-text"><?php echo $tiragraffi->getDesc() ?></p>
                            <h5 class="card-text"><?php echo $tiragraffi->getPrice() ?>€</h5>
                        </div>
                    </div>
                </div>
                <div class="col-6 my-2">
                    <div class="card text-start">
                        <img class="card-img-top" src="https://picsum.photos/200/300" alt="Title" height="400">
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $mangineCani->getName() ?></h4>
                            <p class="card-text"><?php echo $mangineCani->getCategory() ?></p>
                            <p class="card-text"><?php echo $mangineCani->getStaticDog() ?></p>
                            <p class="card-text"><?php echo $mangineCani->getDesc() ?></p>
                            <h5 class="card-text"><?php echo $mangineCani->getPrice() ?>€</h5>
                        </div>
                    </div>
                </div>
                <div class="col-6 my-2">
                    <div class="card text-start">
                        <img class="card-img-top" src="https://picsum.photos/200/300" alt="Title" height="400">
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $briscola->getName() ?></h4>
                            <p class="card-text"><?php echo $briscola->getCategory() ?></p>
                            <p class="card-text"><?php echo $briscola->getStaticCat() ?></p>
                            <p class="card-text"><?php echo $briscola->getDesc() ?></p>
                            <h5 class="card-text"><?php echo $briscola->getPrice() ?>€</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer style="background-color: #333;">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4"></div>
            <div class="col-4"></div>
        </div>
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>