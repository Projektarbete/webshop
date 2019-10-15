<?php

header("Content-Type: application/json; charset=UTF-8");

$animals = [
"Amurleopard",
"Javanoshörning",
"Kaliforniatumlare",
"Cross River-gorilla",
"Vithövdad langur",
"Sumatratiger",
"Bergsgorilla",
"Sumatraelefant",
"Karettsköldpadda",
"Havslädersköldpadda"
];

$price = [
"100 000 000 SEK",
"50 000 000 SEK",
"25 000 000 SEK",
"10 000 000 SEK",
"5 000 000 SEK",
"1 000 000 SEK",
"100 000 SEK",
"10 000 SEK",
"5000 SEK",
"2000 SEK"
];

$description = [
    "Oerhört vacker päls",
    "Mäktigt djur",
    "Exklusivt för vår webbshop. Få kvar",
    "Kan hjälpa dig med det mesta",
    "Sällsynt djur som kan fungera som barnvakt",
    "Smidig, bra jaktkompis",
    "Fredlig, mild och social",
    "Stor",
    "Mycket vackert skal",
    "Världens största sköldpadda"
];

$images = [
"<img src=images/leopard.jpg>",
"<img src=images/rhino.jpg>",
"<img src=images/vaquita.jpg>",
"<img src=images/crossriver.jpg>",
"<img src=images/colobinae.jpg>",
"<img src=images/tiger.jpg>",
"<img src=images/gorilla.jpg>",
"<img src=images/elephant.jpg>",
"<img src=images/caretta.jpg>",
"<img src=‎images/leatherback.jpg>"
];

$product = [];
$products = [];
for ($i=0; $i < 10; $i++){
    $product = array(
    "namn" => $animals[$i],
    "pris" => $price[$i],
    "beskrivning" => $description[$i],
    "bild" => $images[$i]
);
$products[] = $product;
}
$json = json_encode($products, JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);
echo $json;
 
?>