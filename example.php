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
    $a = $b = $c = $d = 4;
    echo $a++, "<br>";
    $a = 2;
    echo ++$b, "<br>";
    $a = 5;
    echo $c--, "<br>";
    $a = 3;
    echo --$d, "<br>";
    $a = 4;
?>

<?php
    $d = "Hello";
    $d = $d."world";
    echo $d;
    echo "<br>";
    $d .= "! ! !";
    echo $d;
?>

<?php
    $value = (7 + 7);
    $value +=5;
    echo "<br>";
    echo $value;
?>

</body>
</html>
