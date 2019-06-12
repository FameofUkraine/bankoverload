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
    echo "<form method=post action=switch.php>";
    echo "<input type=text name=x>";
    echo "</br>";
    echo "<input type=text name=y>";
    echo "</br>";
    echo "<input type=radio name=test value=plus>+";
    echo "<input type=radio name=test value=minus>-";
    echo "<input type=radio name=test value=multiple>*";
    echo "<input type=radio name=test value=divide>/";
    echo "</br>";
    echo "<input type=submit name=sabmit value=Cчитать>";
    echo "</form>";
        if (isset($_REQUEST['x'])&&isset($_REQUEST['y'])&&isset($_REQUEST['operator']))
    {switch ($_REQUEST['operator'])
        {
            case 'plus':
                echo $_REQUEST['x']+$_REQUEST['y'];
                break;
            case 'minus':
                echo $_REQUEST['x']-$_REQUEST['y'];
                break;
            case 'multiple':
                echo $_REQUEST['x']*$_REQUEST['y'];
                break;
            case 'divide':
                echo $_REQUEST['x']/$_REQUEST['y'];
                break;
            default:
                echo "error";
        }
    }
    ?>
</body>
</html>