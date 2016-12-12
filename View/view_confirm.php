<!--
Created by PhpStorm.
Autor: Victor Puissant Baeyens, 12098
Autor: Paolo De Keyzer, 13201
-->

<!--This will be the view file-->


<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="CSS\bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="CSS\style.css">
    <title>Confirmation</title> <!-- to name the page//-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<h1>Bogota Airlines</h1> <!--to make a big headline//-->
<h2><b>Confirmation des billets</b></h2>

Votre demande à bien été traitée, merci de payer celle-ci au plus vite sur notre compte.
<br>
<?php
$totalprice=0;
for ($i=1;$i<=$reservation->getPlace();$i++){
    if($reservation->getPassengers()[$i-1][1]<25){
        $totalprice=$totalprice+10;

    }

    if ($reservation->getPassengers()[$i-1][1]>25){
        $totalprice=$totalprice+20;
    }


}
if($reservation->assuranceCheck()=='Yes'){
    $totalprice=$totalprice+5;
}

echo "La somme attendue est de ".$totalprice."€ sur le compte 123-123456-12 ";
$totalprice=0;
?>
<br>
<br>
<input action="index.php" method="POST">


    <input type="hidden" name="step" value="4">
    <input class="btn btn-warning" name="cancel" value="Retour à la page d'acceuil">
    <input class="btn btn-primary" name="return" type="submit" value="Retour à la page précedente">


</form>


<script>function redirect() {
        <?php $reservation = new Reservation;
        $_SESSION["reserv"] = $reservation; ?>
        window.location.assign("index.php");
    }</script>


</body>
</html>