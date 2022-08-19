<?php
  include('connection.php');
  session_start();


if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
  }

  if(isset($_POST['sub']))
 
				{
					
	$name = $_POST['name']; 
  $mobile = $_POST['mobile']; 
  $email = $_POST['email'];  
  $address = $_POST['address']; 
  $role = $_POST['role']; 
  $password = $_POST['password'];  
  $url = $_POST['url'];

  $q =" INSERT INTO `company`( `name`, `mobile`, `address`,`role`, `email`, `password`, `url`)
   VALUES ('$name','$mobile','$address','$role','$email','$password','$url') ";


$result = mysqli_query($db,$q);
            
                  if($result)
               
                  {
                    header("Location: company.php");
          echo "<script>alert('Registration Successfull')</script>";

        
                  }
                  else
                  {
                      echo "<script>alert(' Registration Fail')</script>";
                  }
              }
   