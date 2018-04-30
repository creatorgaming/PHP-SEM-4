<!-- 
    Create a script to construct the following pattern, using nested for loop.
    *
    * *
    * * *
    * * * *
    * * * * * 
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pattern Maker</title>
</head>
<body>
    <form method="get">
        <?php 
            print("
            *<br>
            * *<br>
            * * *<br>
            * * * *<br>
            * * * * * <br>
            ");
        ?>
        <input type="number" name="num" placeholder="Size of Pattern">
        <input type="submit" name="submit">
    </form>
</body>
</html>
<?php
    if(isset($_GET['submit'])){
        echo "<br>Requested Pattern ... <br>";
        $n = $_GET["num"];
        for($i = 0 ; $i < $n ; $i++){
            for($j = 0 ; $j <= $i; $j++){
                echo "* ";
            }
            echo "<br>";
        }
    }
?>