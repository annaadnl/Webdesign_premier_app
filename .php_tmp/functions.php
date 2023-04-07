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
    function afficherLeTexte($texte){
        echo $texte;
        echo'<br/>';
    }

    function additionner ($nombre1,$nombre2){
        $somme=$nombre1 + $nombre2;
        return $somme;
    }

    function uppercase ($texte){
        return strtoupper($texte);
    }

    afficherLeTexte('TOTO');
    afficherLeTexte((additionner(1,2)));
    afficherLeTexte(uppercase('sartek la majuscule'))

?>
    
</body>
</html>