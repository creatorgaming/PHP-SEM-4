<!-- This program sorts and array. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sort Array</title>
</head>
<body>
    <form action="sortArray.php" method="post">
        <input type="text" name="array" placeholder="Enter array each element seperated using space" style="width:40%;">
        <input type = "submit" name="submit" style="margin-top: 10px;">
    </form>
</body>
</html>
<?php  
    if(isset($_POST['submit'])){
        $array = explode(' ',$_POST['array']);
        sort($array);
        print_r($array);
    }
?>