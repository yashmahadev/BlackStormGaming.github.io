<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <form action="#" method="post">
        <label>No 1 :</label>
        <input type="number" name="No1" id="No1">
        <label>No 2 :</label>
        <input type="number" name="No2" id="No2">
        <button type="submit" name="submit">+</button>
    </form>

<?php

if (isset($_post['submit'])){
    $a = $_post['No1'];
    $b = $_post['No2'];
    echo $a + $b;
}

if (isset($_POST['b1'])) {
        $a = $_POST['t1'];
        $b = $_POST['t2'];
        echo $a + $b;



?>

</body>
</html>