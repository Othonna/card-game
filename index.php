<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RPG FF7</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

</head>

<body>



</body>

</html>

<?php


spl_autoload_register(function ($class) {

    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);

    require_once  $class . '.php';
});

use Inventory\Item;
use Personna\TypeOf\Hunter;
use Personna\TypeOf\Magnus;
use Personna\TypeOf\Warrior;
use Inventory\Potion\Potion;
use Inventory\Weapons\Sword;
use Inventory\Weapons\MagicStaff;

$barret = new Hunter('Barret');
$cloud = new Warrior('Cloud');
$aeris = new Magnus('Aerith');

$potion = new Item('Potion');
$sword = new Sword('Buster Sword', 40);
$sword2 = new Sword('Excalibur', 50);
$arc = new Item('Arc');
$potion = new Potion('Potion');




$barret->rangeAttack($aeris);
$aeris->catSpell($cloud);

$barret->consume($potion);


$barret->pick($potion);
$cloud->pick($sword2)->pick($potion);

$cloud->equip($sword);


$players = [$cloud, $barret, $aeris];

// Gain d'expérience
$barret->attack($cloud);



$cloud->attack($barret);
$cloud->attack($barret);
$cloud->attack($barret);





?>

<div class="container">
    <div class="row p-5">
        <?php foreach ($players as $player) { ?>

            <div class="col-lg-4 box-sizing">
                <div class='card'>
                    <div class="card__inner">
                        <div class="card__face card__face--front">
                            <div class="background-face">
                                <img src="images/Background/logo_ff7.png" alt="">
                            </div>
                        </div>

                        <div class="card__face card__face--back">

                            <div class="card__content">
                                <div class="card-body">
                                    <div class="card-header row">
                                        <div class="name mt-2">
                                            <h2 class="p-0 m-0"><?= $player->getName(); ?></h2>
                                        </div>

                                        <div class="power-circle row mt-2">
                                            <span class="circle bg-danger text-white ml-1 px-1 text-center">
                                                <?= $player->getHealth(); ?>
                                            </span>
                                            <span class="circle bg-dark text-white ml-1 px-1 text-center">
                                                <?= $player->getStrength(); ?>
                                            </span>
                                            <span class="circle bg-primary text-white ml-1 text-center">
                                                <?= $player->getMana(); ?>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="img">
                                        <img class="picture" src="<?= $player->getImage(); ?>">
                                    </div>

                                    <div class="card-footer">
                                        <span class="inventory text-left">
                                            <?= $player->getInventory(); ?>
                                        </span>
                                        <span>
                                            Level: <?= $player->getLevel(); ?>
                                        </span>
                                        <span>
                                            Exp: <?= $player->getExp(); ?>
                                        </span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <?php }

        // JS click event
        /* $name = "Cloud";
        echo "PHP Output " . $name; */
        // var_dump($player);
        /* $array = ["summer", " spring", " winter"];
        for ($i = 0; $i <= 2; $i++) {
            echo $array[$i];
        } */
        ?>
        <!-- <script type="text/javascript">
            /* var name = <?php echo json_encode($name); ?>;
            document.write("<br/> JS OutPut : " + name); */

            var array = <?php echo json_encode($players); ?>;
            for (var i = 0; i <= array.length; i++) {
                document.write(array[i]);
            }
        </script> -->


        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="script.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>

    </div>
</div>