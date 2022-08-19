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
					$usn = $_POST['usn'];
          $email = $_POST['email'];
          $password = $_POST['password'];
          $query = "select * from add_std where email = '$email'";
          $result = mysqli_query($db,$query);
          $row = mysqli_num_rows($result);
          $qu = "select * from registation where email = '$email'";
          $res = mysqli_query($db,$qu);
        
          if($row>0){
          
            $q = "INSERT INTO `registration`(`name`,`usn`,`email`,`password`) 
            VALUES ('$name','$usn','$email','$password')";
           if($res>0){
            echo "<script>alert(' Registration Fail')</script>";
           }
           else
                {
                  $result = mysqli_query($db,$q);
                  echo "<script>alert('Registration Successfull')</script>";
                  header ("Location:student.php");
                 }
           
        }
        else{
          echo "<script>alert('You cant register')</script>";
        }
     
           
					
		
        }  	
?>
