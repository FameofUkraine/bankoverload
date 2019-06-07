<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simple calculator</title>
</head>
<body>
    <?php
        if (isset($_POST['x'])&&isset($_POST['y'])&&isset($_POST['operator']))
        {
        $x=$_POST['x'];
        $y=$_POST['y'];
        $operation=$_POST['operator'];
        if ($operation=='plus')
            {
            print "$x + $y =" ;
            print $x + $y;
            }
        else if ($operation=="minus")
            {
            print "$x - $y = ";
            print $x - $y;
            }
        else if ($operation=="multiple")
            {
             print "$x * $y = ";
             print $x * $y;
            }
        else if ($operation=="divide")
            {
             if ($y==0)
             print "error";
        else print "$x / $y = ";
             print $x / $y;
            }
        }
        else {
            ?>
            <form method="POST">
                <label>
                    <input type="text" name="x">
                </label>
                <label>
                    <select name="operator">
                        <option value="plus"> + </option>
                        <option value="minus"> - </option>
                        <option value="multiple"> * </option>
                        <option value="divide"> / </option>
                    </select>
                </label>
                <label>
                    <input type="text" name="y">
                </label>
                <input type="submit" value="=">
            </form>
            <?php
            }
    ?>

</body>
</html>