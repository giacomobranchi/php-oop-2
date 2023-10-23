<!-- Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
L'e-commerce vende prodotti per animali.
I prodotti sono categorizzati, le categorie sono Cani o Gatti.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia).
Bonus (non opzionale):
organizzate il progetto come visto stamattina a lezione usando varie sottocartelle per inserire classi, layout e dati. -->


<?php
require_once __DIR__ . '/Traits/Namable.php';
class Prodotti
{
    use Namable;
    protected $name;
    protected $category;
    protected $image;
    protected $price;
    protected $description;

    public function __construct(string $name, string $category, float $price)
    {
        $this->name = $name;
        $this->category = $category;
        if ($price <= 0) {
            throw new RangeException("Price can't be negative!");
        } elseif (is_string($price)) {
            throw new InvalidArgumentException("Insert a Number!");
        }
        $this->price = $price;
    }

    /* Getters */

    /* public function getName()
    {
        return $this->name;
    } */

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



    public function getStaticDog()
    {
        return self::$type;
    }
}

class Gatti extends Prodotti
{
    static protected $type = 'Per Gatti';



    public function getStaticCat()
    {
        return self::$type;
    }
}

require __DIR__ . '/database/db.php';

include __DIR__ . '/partials/head.php'
?>


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
<?php
include __DIR__ . '/partials/foot.php';
