

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password</title>
</head>
<style>
   body{
      background-image: url("1p.jpg");
      background-size: cover;
    }
.grid-container {
      display: grid;
      height: 100%;
      align-content: start;
      grid-template-columns: auto auto auto;
      grid-gap: 10px;
      margin-top: 100px;
      padding: 10px;
    
    }
    
    div a{
    font-size:10px}
    
    .grid-container > div {
        border-radius: 15px 50px;
        border-style: solid;
        width: 380px;
      background-color: rgba(255, 255, 255, 0.8);
      text-align: center;
      padding: 30px 0;
      margin-left: 400px;
      font-size: 20px;
    }


    body{
        background-color: skyblue;
    }
       
       ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-image: url("1p.jpg");
  background-size:cover;
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
  background-color:#A8DBF0 ;
}


.h { background-color: #4CAF50;
color: white;
border: none;
font-size: 15px;
}
.l{
    text-decoration: none;
    font-size: 14px;
}
input {
  width: 300px;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

</style>
<body>

    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="index.php">About</a></li>
        <li><a href="index.php">Contact</a></li>
        <li style=" display: block; color: white; text-align: center; padding: 14px 16px; margin-left: 300px; font-size: 18 px;"
        >Forget Password</li>
        
      </ul>

    <div class="grid-container">
        <div > Forget Password <br>

            <form action="" method="post">
            <input type="email" name="email" id="" placeholder="email" required> <br>
           
            <input type="text" name="number" id="" placeholder="phone number" required> <br>
            <input type="date" name="dob" id="" placeholder="date of birth" required> <br>
            <input class="h" type="submit" value="send" name="Admim"><br>
            <a href= "student.php" class="l">back</a>
        </form>
        </div>



    </div>
    
</body>
</html>

<?php
include('connection.php');
session_start();
if (isset($_POST['Admim'])) {

    $email = $_POST['email'];
    $number = $_POST['number'];
    $dob = $_POST['dob'];
    
    $query = "SELECT * FROM student WHERE email = '$email'";

    $result = mysqli_query($db,$query);
    if(mysqli_num_rows($result)){
        $un = mysqli_fetch_array($result);
        if($un['email'] == $email && $un['mobile']==$number && $un['dob']==$dob){
          $_SESSION["email"] = $un['email'];
          
            header("Location: new_pwd.php");
        }else{
            echo "<script> alert('Wrong User') </script>";
        }
    }
}
?>








?>