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

function factorial ($n) {
    if ($n==1) {
        return "1";
    }
    return factorial($n - 1) . " " . $n;
}
    $result = factorial(10);











/*$menu = array (
    'Home' => 'home.php',
    'About' => 'about.php',
    'Gallery' => 'gallery.php',
    'Services' => 'services.php',
    'Contact' => 'contact.php'
);
foreach ($menu as $link => $href) {
    echo '<li><a href=\'href\'>', $link, '</a></li>';
} */

?>

</body>
</html>




