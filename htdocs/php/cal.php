<!DOCTYPE html>
<html>
<head>
	<title>PHP Cal</title>
</head>
<body>
    <?php
    
    if (isset($_POST['submit'])) {
        $a = $_POST['No1'];
        $b = $_POST['No2'];
        $c = $_POST['sign'];
        // if ($c == '+') {
        //     $d = $a + $b;
        // } 

        // elseif ($c == '-') {
        //     $d = $a - $b;
        // }

        // elseif ($c == '*') {
        //     $d = $a * $b;
        // }

        // elseif ($c == '/') {
        //     $d = $a / $b;
        // }
        
      //  echo $a + $b;
    }

    ?>

    <form action="add.php" method="post">
        <label>No 1 :</label>
        <input type="number" name="No1" id="No1" value="<?php //echo $a ?>">
        
        <label>No 2 :</label>
        <input type="number" name="No2" value="<?php //echo $b ?>">
        
        <input type="text" name="sign" value="<?php //echo $c ?>">
        
        <input type="submit" value="Submit" name="submit">
        
        <label>Ans :</label>
        <input type="number" name="No3" value="<?php //echo $d; ?>">
    </form>

 </body>
</html> 