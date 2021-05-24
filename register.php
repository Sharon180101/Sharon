<?php

 $con = mysqli_connect('localhost','root');
 if($con){
     echo "sucessfull";
 }
 else{
     echo "failed";
 }


mysqli_select_db($con ,'userinfo');

$name = $_POST['name'];
$church = $_POST['church'];
$performance =$_POST['performance'];
$age = $_POST['age'];

$query = "INSERT INTO `info`(`name`, `church`, `performance`, `age`) VALUES ('$name','$church', '$performance', '$age')";

mysqli_query($con ,$query);

header('location:form.php');


?>