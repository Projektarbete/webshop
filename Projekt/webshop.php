<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Webshop</title>
    <link href="https://fonts.googleapis.com/css?family=Viga&display=swap" rel="stylesheet">
</head>
<body>
<h1>Emmys och Matildas shop</h1>
<h2>Exklusiva och utrotningshotade djur</h2>
<div class="hej">
<?php

$url = "http://localhost/Backend/Projekt/api.php";
$json = file_get_contents($url);
$array = json_decode($json, true); 
echo "<ul>";
foreach($array as $key => $value){
    echo "<li>";
    echo $value['namn'];
    echo "</li>";
    echo "<li>";
    echo $value['pris'];
    echo "</li>";
    echo "<li>";
    echo $value['beskrivning'];
    echo "</li>";
    echo $value['bild'];  
};
echo "</ul>";
?>
</div>

  
</body>
</html>

