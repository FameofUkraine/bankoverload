<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simple calculator using switch</title>
</head>
<body>
<?php
echo "<pre>";
var_dump($_POST);
var_dump($_REQUEST);

if (isset($_REQUEST['x']) && isset($_REQUEST['y']) && isset($_REQUEST['test'])) {
    $result = 0;
    switch ($_REQUEST['test']) {
        case 'plus':
            $result = $_REQUEST['x'] + $_REQUEST['y'];
            break;
        case 'minus':
            $result = $_REQUEST['x'] - $_REQUEST['y'];
            break;
        case 'multiple':
            $result = $_REQUEST['x'] * $_REQUEST['y'];
            break;
        case 'divide':
            $result = $_REQUEST['x'] / $_REQUEST['y'];
            break;
        default:
            $result = "error";
    }


    var_dump($result);
    die();
}



echo "<form method=post>";
echo "<input type=text name=x>";
echo "</br>";
echo "<input type=text name=y>";
echo "</br>";
echo "<input type=radio name=test value=plus>+";
echo "<input type=radio name=test value=minus>-";
echo "<input type=radio name=test value=multiple>*";
echo "<input type=radio name=test value=divide>/";
echo "</br>";
echo "<input type=submit name=submit value=Cчитать>";
echo "</form>";


?>

</body>
</html>