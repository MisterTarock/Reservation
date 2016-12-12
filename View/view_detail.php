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
    <title>Détails</title> <!-- to name the page//-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<h1>Bogota Airlines</h1> <!--to make a big headline//-->
<h2><b>Détail des Réservations</b></h2>

Afin de pouvoir vous fournir un vol le plus agréable possible, nous désirons connaître
quelques informations sur vous.
<br>
<br>

<div id="reserv">
    <form action="index.php" method="POST">
        <?php


        for ($i=0;$i<$reservation->getPlace();$i++){

            echo'<div class="form-group">';
            if ($reservation->getNameErr()!=[] && isset($reservation->getNameErr()[$i]) && $reservation->getNameErr()[$i] != "")
            {
                echo "<span class='error'> ".$reservation->getNameErr()[$i]."</span><br>";
            }
                echo'<label for="exampleInputName'.$i.'">Nom</label>';
                echo'<input type="name" class="form-control" id="exampleInputName'.$i.'" name="exampleInputName'.$i.'" placeholder="Nom"';
                if (!empty($reservation->getPassengers()[$i][0])){
                    echo 'value='.$reservation->getPassengers()[$i][0].'>';
                }
                else{
                    echo '>';
                }
                echo'</div>';
            echo'<div class="form-group">';
            if ($reservation->getAgeErr()!=[] && isset($reservation->getAgeErr()[$i]) && $reservation->getAgeErr()[$i] != "")
            {
                echo "<span class='error'> ".$reservation->getAgeErr()[$i]."</span><br>";
            }
                echo'<label for="exampleInputAge'.$i.'">Age</label>';
                echo'<input type="number" class="form-control" type="number" min="1" max="125" id="exampleInputAge'.$i.'" name="exampleInputAge'.$i.'" placeholder="Age" ';
                if (!empty($reservation->getPassengers()[$i][1])){
                    echo 'value='.$reservation->getPassengers()[$i][1].'>';
                }
                else{
                    echo '>';
                }
                echo'</div>';}




        ?>

        <input type="hidden" name="step" value="2">
        <input class="btn btn-primary" name="return" type="submit" value="Retour à la page précedente">
        <input class="btn btn-primary" name="submit"type="submit" value="Etape suivante">
        <br>
        <input class="btn btn-danger" name="cancel" type="submit" value="Annuler la réservation">

    </form>

</div>











</body>
</html>