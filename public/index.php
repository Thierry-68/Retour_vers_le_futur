<?php

require_once("../src/Model/FutureTimeModel.php");
/**
 * Crée deux variables $presentTime et $destinationTime, qui seront des objets DateTime.
 *  $presentTime devra correspondre à la date actuelle (le moment du départ)
 *  et $destinationTime la date et heure de destination, choisi celle que tu veux.
 */

$listDateTime = [];
$currentDateTime = new DateTime();
$currentDateTime->setDate(2050, 04, 20);
$listDateTime[] = new FutureTime($currentDateTime, "DESTINATION TIME");
$currentDateTime->setDate(2021, 04, 20);
$listDateTime[] = new FutureTime($currentDateTime, "PRESENTE TIME");

/**
 * Affiche ensuite ces deux dates en suivant exactement 
 * le format de l'image ci-dessous
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retour vers le futur</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Retour vers le futur</h1>
    <div class="container">
        <?php foreach ($listDateTime as $key => $value) { ?>
            <section>
                <div class="containerTime">
                    <div class="date">
                        <div class="month">
                            <?= $value->getMonth(); ?>
                        </div>
                        <div class="day">
                            <?= $value->getDay(); ?>
                        </div>
                        <div class="year">
                            <?= $value->getYear(); ?>
                        </div>
                    </div>
                    <div class="label">
                        <label for="">AM</label>
                        <label for="">PM</label>
                    </div>
                    <div class="containerTime">
                        <div class="hour">
                            <?= $value->getHour(); ?>
                        </div>
                        <div class="min">
                            <?= $value->getMin(); ?>
                        </div>
                    </div>
                </div>
                <h5><?= $value->getTitle(); ?></h5>
            </section>
        <?php } ?>
        
            <?php 
            $avt=$listDateTime[0];
            $avtDate=new DateTime($avt->getYear().'-'.$avt->getMonth()."-".$avt->getDay());
            $aps=$listDateTime[1];
            $apsDate=new DateTime($aps->getYear().'-'.$aps->getMonth()."-".$aps->getDay());
            $diffPeriode=date_diff($avtDate,$apsDate);
            $tempsMinute=(($diffPeriode->y)*365*24*60)+(($diffPeriode->m)*30*24*60)+(($diffPeriode->d)*24*60)+(($diffPeriode->h)*60)+(($diffPeriode->i));
            $litre=$tempsMinute/10000;
          ?>
         <section>
                <div class="containerTime">
                    <div class="date">
                        <div class="month">
                            <?= $diffPeriode->format("%m"); ?>
                        </div>
                        <div class="day">
                            <?= $diffPeriode->format("%d"); ?>
                        </div>
                        <div class="year">
                        <?= $diffPeriode->format("%y"); ?>
                        </div>
                    </div>
                    <div class="label">
                        <label for="">AM</label>
                        <label for="">PM</label>
                    </div>
                    <div class="containerTime">
                        <div class="hour">
                        <?= $diffPeriode->format("%h"); ?>
                        </div>
                        <div class="min">
                        <?= $diffPeriode->format("%i"); ?>
                        </div>
                    </div>
                </div>
                <h5>Difference soit <?= $litre ?> litre(s)</h5>
            </section>
    </div>
</body>

</html>