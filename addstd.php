<?php
  include('connection.php');
  session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Selected Student </title>
</head>
<style>
 input {
  width: 300px;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
 }
  #textarea{
    width: 760px;
    height: 200px;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
font-size: 15px;
  }


</style>
<body> 
<h2>Add Students for register</h2>
<form method="POST">
Student USN:
<input type="text" name="usn" id=""  placeholder="Student register number"> <br>
Student Name:
<input type="text" name="name" id=""  placeholder="Student Name"> <br>


Student Email:
<input type="text" name="email" id="" placeholder="Student Email"  > <br>


<input type="submit" name="update" value="Update">
</form>


</body>
<?php 

if (isset($_POST['update'])) {
    $usn = $_POST['usn'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $qu = "select * from add_std where email = '$email'";

    $result = mysqli_query($db,$qu);
    $row = mysqli_num_rows($result);
  if($row>0){
    echo "<script>alert('email already exsist')</script>";

  }else{
  
    $q = "INSERT INTO `add_std`( `usn`, `name`, `email`) 
    VALUES ('$usn','$name','$email')";
     $result = mysqli_query($db,$q);
            
     if($result)
  
     {
echo "<script>alert('Details Added in the list  successfull')</script>";

     }
     else
     {
         echo "<script>alert('Unable to add . Please try again)</script>";
     }
 }

}


?>