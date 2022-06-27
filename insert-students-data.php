<?php
 
 $student_id=$_POST['student_id'];
 $firstname=$_POST['firstname'];
 $lastname=$_POST['lastname'];
 $dob=$_POST['dob'];
 $email=$_POST['email'];
 $department=$_POST['department'];


 /*
if($email == "hackmail.com"){

    echo "Please you can't be registerd";
}else{

    echo "You can be registerd";
}

*/
//Connecting database

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phpexercises";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO students VALUES ('','$student_id','$firstname','$lastname','$dob','$email','$department')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

?>