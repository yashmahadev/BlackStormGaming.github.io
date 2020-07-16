<?php

	//$user = "root";
//	$pass = "";
//	$db = "reg";
  //  $mysqli = new mysqli('localhost','root','password','reg');
 //   if ($mysqli -> connect_error) {
//        die('error' . ('.mysqli -> connect_errorno.')'.$mysqli -> connect_error')
//    }
//    else {
 //       echo "Connected Success.";
 //   }
	//$db = new mysqli('localhost','$user','$pass','$db') or die("Not Connected");
	if(isset($_POST['submit'])){
	$server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server,$username,$password);


    if (!$con)  
        die("Connection to this database failed due to" . mysqli_connect_error);
    
    echo "Connect Successfully .";


    $Crew = $_POST['Crew'];
    $Player1 = $_POST['Player1'];
    $Player2 = $_POST['Player2'];
    $Player3 = $_POST['Player3'];
    $Player4 = $_POST['Player4'];
    $Email = $_POST['Email'];


    $sql = "INSERT INTO `reg`.`reg` (`crew`, `player1`, `player2`, `player3`, `player4`, `email`, `entrydate`) VALUES ('$Crew', '$Player1', '$Player2', '$Player3', '$Player4', '$Email', current_timestamp());";

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