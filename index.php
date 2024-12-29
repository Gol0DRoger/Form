<?php
$submit=false;
//we have two do our job using procedural or object oriented manner.
if(isset($_POST['Name'])){

//$insert = false;
$server = "localhost";
$username = "root";
$password = "" ;
$con = mysqli_connect($server, $username, $password);
if(!$con){
    die("connection is failed due to ".mysqli_connect_error());
}//you can use die() to stop further execution and display an error message.
//echo "Success conecting to the DB.";

$Name =$_POST['Name']; 
$Age =$_POST['Age']; 
$Gender =$_POST['Gender']; 
$Phone_Number =$_POST['Phone_Number'];
$Email_ID=$_POST['Email_ID'];


/*$Name = isset($_POST['Name']) ? $_POST['Name'] : '';
$Age = isset($_POST['Age']) ? $_POST['Age'] : '';
$Gender = isset($_POST['Gender']) ? $_POST['Gender'] : '';
$Phone_Number = isset($_POST['Phone Number']) ? $_POST['Phone Number'] : '';
$Email_ID = isset($_POST['Email ID']) ? $_POST['Email ID'] : '';*/

$sql = "INSERT INTO `trip`.`trip` (`Name`, `Age`, `Gender`, `Phone_Number`, `Email_ID`, `DT`) VALUES ('$Name', '$Age', '$Gender', '$Phone_Number', '$Email_ID', current_timestamp())";
//connecting to datatbase , here name of data bsace and table is same.
//echo $sql;

if($con->query($sql) == true){
   // echo "Data inserted successfully";
   $submit = true;
}else{
    echo "error: $sql <br> $con->error";
}
//close the database connection.
$con->close();
if($submit == true){
header("Location: Rough.html");
exit();
    }
}

?>