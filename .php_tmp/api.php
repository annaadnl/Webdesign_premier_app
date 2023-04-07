<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<?php

// préparation de l'appel d'API - PHP curl
$curl = curl_init();

// paramètrage de l'appel d'API
curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.thecatapi.com/v1/images/search',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
));

// On exécute l'appel d'API
$response = curl_exec($curl);

// On ferme la liaison avec l'API
curl_close($curl);

// on décode la réponse de l'API
$responseJson = json_decode($response);

// On extrait l'objet chat de la réponse d'API
$cat = $responseJson[0];
$imgUrl=$cat->url;
// var_dump($imgUrl);

?>


<body>
  
<img src="<?php echo $imgUrl ?>" alt="image de chat"/>

</body>
</html>