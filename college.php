<?php  
include('connection.php');
session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=2.0">
    <title>SPC</title>
</head>
<style>
    body{
      background-image: url("1p.jpg");
      background-size: cover;

    }
      ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
 
  background-image: url("1p.jpg");
      background-size: cover;
}
li {
  float: left;
}
li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
li a:hover:not(.active) {
  background-color: #111;
}
 .grid-container {
      display: grid;
      height: 100%;
      align-content: start;
      grid-template-columns: auto auto auto;
      grid-gap: 10px;
      margin-top: 100px;
      padding: 10px;
      padding-left: 440px; 
    }
    .grid-container > div {
        border-radius: 15px 50px;
        border-style: solid;
        width: 380px;
      background-color: rgba(255, 255, 255, 0.8);
      text-align: center;
      padding: 30px 0;
      margin-left: 10px;
      font-size: 20px;
    }
    div a{
    font-size:14px; 
    text-decoration: none;
    color: #111; }
    input {
  width: 300px;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
  
.h { background-color:#A8DBF0;
color: white;
border: none;
font-size: 15px;
}
.h:hover {background-color: #87CEEB}

    </style>
<body >
    <ul >
        <li><a href="index.php">Home</a></li>
        <li><a href="index.php">About</a></li>
        <li><a href="index.php">Contact</a></li>
        <li style=" display: block; color: white; text-align: center; padding: 14px 16px; margin-left: 300px; font-size: 18 px;"
        ></li>
              </ul>
<form action="" method="POST">
  <div >
    <div class="grid-container">
     <div class="col-lg-3 col-md-6"><h4>College login</h4>
            <input type="email" name="email" id="" placeholder="email" required> <br>
            <input type="password" name="password" id="" placeholder="password" required> <br>
            <input type="submit" value="Login" name="sub" class="h"><br>
        </div>
</div>
    </div>
  </form>
    </body>
</html>
<?php
 include('connection.php');
  if(isset($_POST['sub']))
  {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $get_data = "SELECT * FROM admin WHERE email = '$email'";
    $result = mysqli_query($db,$get_data);
    if(mysqli_num_rows($result)){
        $un = mysqli_fetch_array($result);
        if($un['password'] == $password){
            $_SESSION["reg_id"] = $un['s_number'];
            $_SESSION["name"] = $un['name'];
            $_SESSION["email"] = $un['email'];
            header("Location: collegeportal.php");
        }
        
        else{
            echo "<script> alert('Wrong User') </script>";
        }
    }
}

?>