<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
$bmw = array(
    "model" => "X5",
    "speed" => 120,
    "doors" => 5,
    "year" => "2006"
);
$toyota = array(
    "model" => "Carina",
    "speed" => 130,
    "doors" => 4,
    "year" => "2007"
);
$opel = array(
    "model" => "Corsa",
    "speed" => 140,
    "doors" => 5,
    "year" => "2007"
);
$cars = array();
$cars[] = $bmw;
$cars[] = $toyota;
$cars[] = $opel;

echo "<p>BMW - " . $bmw["model"] . " - " . $bmw["speed"] . " - " . $bmw["doors"] . " - " . $bmw["year"] . "</p>";
echo "<p>TOYOTA - " . $toyota["model"] . " - " . $toyota["speed"], " - " . $toyota["doors"]," - " . $toyota["year"] . "</p>";
echo "<p>OPEL - " . $opel["model"] . " - " . $opel["speed"] . " - " . $opel["doors"] . " - " . $opel["year"] . "</p>";
echo "<p>", $cars[0] ["model"], " : ", $cars[0]["year"],
"</p?>";
echo "<p>", $cars[1] ["model"], " : ", $cars[1]["year"],
"</p?>";
echo "<p>", $cars[2] ["model"], " : ", $cars[2]["year"],
"</p?>";


?>
</body>
</html>
