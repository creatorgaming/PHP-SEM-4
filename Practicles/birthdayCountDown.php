<!-- 
    Create a simple 'birthday countdown' script, the script will count the number of days between current day and birth day. 
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Birthday Count Down</title>
</head>
<body>
    <form method="post">
        Enter your birthdate : 
        <input type="date" name="b-date"><br>
        <input type="submit" name="submit">
    </form>
</body>
</html>
<?php
    if(isset($_POST['submit'])){
        $bdate = strtotime($_POST['b-date']);
        $dateDifference = ($bdate - time()) / (60 * 60 * 24);
        if($dateDifference >= 0 )
            echo ($dateDifference)." days left "." for your birthday";
        else{
            $dayOfBirthYear = date('z',$bdate);
            $currentDayOfYear = getdate()['yday'];
            $currentYear = date('Y',$birthday);
            if((int)$currentYear/4 == 0)
                echo $currentDayOfYear-$dayOfBirthYear." Days Left";
            else 
                echo $currentDayOfYear-$dayOfBirthYear." Days Left";
        }
    }
?>