<?php

	if(isset($_POST['submit'])){
	$server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server,$username,$password);


    if (!$con)  
        die("Connection to this database failed due to" . mysqli_connect_error);
    
    echo "Connect Successfully .";


    $Crew = $_POST['Crew'];
    $player1 = $_POST['Player1'];
    $player2 = $_POST['Player2'];
    $player3 = $_POST['Player3'];
    $player4 = $_POST['Player4'];
    $Email = $_POST['Email'];


    $sql = "INSERT INTO `reg`.`reg` (`crew`, `player1`, `player2`, `player3`, `player4`, `email`, `entrydate`) VALUES ('$Crew', '$player1', '$player2', '$player3', '$player4', '$Email', current_timestamp());";

    // echo $sql;
    
    if ($con -> query($sql) == true) {
        echo "SuccessFully Inserted";
    }
    else {
        echo "error : $sql <br> $con->error";
    }

    $con -> close();
}

?>

