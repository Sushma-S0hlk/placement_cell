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
<h2>Apply for  Company</h2>
<form method="POST">
Student USN:
<input type="text" name="usn" id=""  placeholder="student usn" required> <br>
Student Name:
<input type="text" name="name" id=""  placeholder="student name" required> <br>
Company Name:
<input type="text" name="companyname" id=""  placeholder="company name" required> <br>
Email:
<input type="text" name="email" id=""  placeholder="Email" required> <br>
Post Name:
<input type="text" name="post" id="" placeholder="post name"  required> <br>
Stream:
<input type="text" name="stream" id="" placeholder="Stream"   required> <br>
Passing Year:
<input type="text" name="pyear" id="" placeholder="passing year" required > <br>

<input type="submit" name="update" value="Update">
</form>
</body>
<?php 

if (isset($_POST['update'])) {
   $usn =$_POST['usn'];
    $name = $_POST['name'];
    $company = $_POST['companyname'];
    $email = $_POST['email'];
    $stream = $_POST['stream'];
    $post = $_POST['post'];
    $pyear = $_POST['pyear'];
    $qu = "select * from add_std where companyname = '$company'";

          $result = mysqli_query($db,$qu);
          $row = mysqli_num_rows($result);
        if($row>0){
          echo "<script>alert('email already exsist')</script>";
        }else{

  
    $q = "INSERT INTO `apply_std`( `usn`,`name`,`companyname`, `email`,`post`, `stream`, `pyear`) 
    VALUES ('$usn','$name','$company','$email','$post','$stream','$pyear')";
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