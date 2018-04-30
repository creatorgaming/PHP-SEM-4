<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Translator</title>
</head>
<body>
    <form method="get">
        <select name="lang">
            <option value="hindi">Hindi</option>
            <option value="german">Deutsch</option>
            <option value="spanish">Spanish</option>
        </select><br>
        <input type="submit" name="submit">
    </form>
</body>
</html>
<?php
    if(isset($_GET['submit'])){
        echo "<br>";
        switch($_GET['lang']){
            case "hindi":
                echo "Hello ==> नमस्ते";
                break;
            case "german":
                echo "Hello ==> Hallo";
                break;
            case "spanish":
                echo "Hello ==> Hola";
                break;
            default:
                echo "Translation Not Avaiable";
        }
    }
?>