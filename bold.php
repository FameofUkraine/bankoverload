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

function bold($string)
{
    return '<b>' . $string . '</b>';
}

echo bold("red");
echo bold("ferrari");

if (bold(21) === "<b>22</b>") {
    echo "blue";
} else if (bold(22) === "<b>21</b>") {
    echo "audi";
}


?>

</body>
</html>
