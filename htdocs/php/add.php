<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add php</title>
</head>
<body>
    <?php
        $x = $_POST['No1'];
        $y = $_POST['No2'];

    echo "Here Is Sum Values :" . $x  . " + " . $y . " Click This Button To Show Answer";

    
    // if (isset($_POST['submit'])) {
    //     $a = $_POST['No1'];
    //     $b = $_POST['No2'];
    //     $c = $_POST['sign'];
    
    ?>
    <!-- <button type="submit" name="Btn" onclick="ans.php">Click</button> -->

    <button onclick="window.location.href='ans.php'">Click</button>

</body>
</html>