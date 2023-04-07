<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // Je définis ma vitesse max
        define('VITESSE_MAX',50);
        // je définis ma vitesse
        $vitesse=60;

        if($vitesse > VITESSE_MAX){
            echo 'Vous roulez trop vite <br/> <hr>';
        } else {
            echo 'Vous roulez tranquillement <br/>  <hr>';
        }

        echo '<br/>Enchainement de conditions <br/>';
        $classePerso='nain';
        if ($classePerso === 'elfe'){
            echo 'Vous êtes un elfe';
            echo '<br/>';
            echo 'j\'ai des grande oreille';
        }

        if ($classePerso === 'humain'){
            echo 'Vous êtes un humain';
            echo '<br/>';
            echo 'j\'ai le pied léger';
        }

        if ($classePerso === 'nain'){
            echo 'Vous êtes un nain';
            echo '<br/>';
            echo 'j\'aime la bière';
        }
        else{
            echo 'Vous n\'hexistez pas';
        }
    ?>
    
</body>
</html>