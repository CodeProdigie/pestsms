<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "pest2Db"; 
    $conn = new mysqli($servername, $username, $password, $dbname);
    if($conn->connect_error) {
        die("Connection Failed".$conn->connect_error);
    }

  if (isset($_POST['submit'])) {
    $surname = $_POST['surname'];
	$given_names = $_POST['givennames'];
    $e_mail = $_POST['e_mail'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
	$date_of_birth = $_POST['dateofbirth'];
	$nationality = $_POST['nationality'];
	$region_of_origin = $_POST['region'];
	$speciality = $_POST['speciality'];
	$class_for_admission = $_POST['class'];
	$guardian = $_POST['guardian'];
	$telephone = $_POST['telephone'];
	$address = $_POST['address'];
	
    }
	$sql = "INSERT INTO `studenttb` (`surname`, `givennames`,`gender`,`dateofbirth`,`nationality`,`region`,`speciality`,`class`,`guardian`,`telephone`, `email`,`address`) 
           VALUES ('$surname','$given_names','$gender','$date_of_birth','$nationality','$region_of_origin','$speciality','$class_for_admission','$guardian','$telephone','$e_mail','$address')";
    $result = $conn->query($sql);
    if ($result == TRUE) {
      echo "New record created successfully.";
    }else{
      echo "Error:". $sql . "<br>". $conn->error;
    }
    $conn->close();
   
?> 
