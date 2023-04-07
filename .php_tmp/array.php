<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // je déclare mon tableau  
        $monTableau = array('voiture',5,'toto',78, 'document');
        $tableauAssociatif = array (
            'clef'=>'valeur',
            'prenom'=>'Samy',
            'nom'=>'Michel',
            'age'=>18,
        );

        echo '<pre>';
        print_r($tableauAssociatif);
        echo '</pre>';

        // echo $monTableau[3];

        foreach ($monTableau as $valeur){  
            echo $valeur.'</br>';
        }

        $tailleTableau = sizeof($tableauAssociatif);
        echo $tailleTableau;

        for($i=0 ; $i<$tailleTableau; $i++){
            echo '<br/>';
            echo $i;
        }
    ?>
</body>
</html>