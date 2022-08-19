<?php  
include('connection.php');
session_start();

 ?>

<?php

//include "dbConn.php"; // Using database connection file here

//$L = $_GET['email']; // get id through query string
$d = $_GET['date_time'];
$q = mysqli_query($db,"select * from mail where date_time='$d'"); // select query

$r1 = mysqli_fetch_array($q); // fetch data

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Details</title>
</head>
<style>
    
    input {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  
}
#button{  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  background-color: white;

}
.upload{
    background-color: #008CBA;
    max-width: max-content;
    margin-left: 400px;
    color: white;
}
.upload:hover{
    
    background-color: green;
}
</style>
<body> 
     <h2>Edit Details:</h2>

    

    <form action="" method="post" enctype="multipart/form-data">
    <div>
        <div style="float: left;">
         <ul>
            <li>Your email<br>
                <input type="email" name="Your email" id="" value="<?php echo $r1['user_mail'];?>" placeholder="email" readonly>
                
                
            </li>
            <li>email<br>
                <input type="email" name="email" id="" value="<?php echo $r1['email'];?>" placeholder="email" readonly>
                
                
            </li>
            <li> Date time<br>
                <input type="datetime-local" name="date-time" id=""  value="<?php echo $r1['date_time'];?>"placeholder="date-time" readonly>
                
                
                
            </li>
            <li>Subject <br>
                <input type="subject" name="subject" id="" value="<?php echo $r1['subject'];?>" placeholder="Subject" readonly>
                
                
                
            </li>
        
       
           <li>Message <br>
           <textarea name="message" id="" rows="4" cols="106" readonly><?php echo $r1['message'];?></textarea>
                
                
            </li>
           <!--  <li>Nation & State  <br>
                <input type="text" name="nation" id="" value=" <?php echo $row['nation'];?> " placeholder="nation" readonly>
                <input type="text" name="state" id="" value="<?php echo $row['state'];?>" placeholder="state" readonly>
            </li>
           <li> City & Street  <br>
                <input type="text" name="city" id="" value="<?php echo $row['city'];?>" placeholder="city" readonly>
                <input type="text" name="address" id="" value="<?php echo $row['address'];?>" placeholder="address" readonly>-->
                
            </li>
            <li>CV :
            <img src="images/<?=$r1['cv'];?>" style="width:150px;height:200px; margin-left:5px;" >   </li>
         </ul>
            
       <!-- </div>
        <div style="float: right;">
            <ul>
             Photo :
             <BR>
            <img src="images/<?=$row['photo'];?>" style="width:120px; height:133px; margin-right:10px;" >
            <br>
            
            
            <li> Graduation: <br>
                <input type="text" name="ginstitute" id="" value="<?php echo $row['ginstitute'];?>" placeholder="institute name" readonly>
                <input type="text" name="gstream" id="" value="<?php echo $row['gstream'];?>" placeholder="stream" readonly> <br>
                <input type="text" name="gyear" id="" value="<?php echo $row['gyear'];?>" placeholder="passing year" readonly>
                <input type="text" name="ggrade" id="" value="<?php echo $row['ggrade'];?>" placeholder="grades" readonly>
            </li>
            <li> Intermediate: <br>
                <input type="text" name="iinstitute" id="" value="<?php echo $row['iinstitute'];?>" placeholder="institute name" readonly>
                <input type="text" name="istream" id="" value="<?php echo $row['istream'];?>" placeholder="stream" readonly> <br>
                <input type="text" name="iyear" id="" value="<?php echo $row['iyear'];?>" placeholder="passing year" readonly>
                <input type="text" name="igrade" id="" value="<?php echo $row['igrade'];?>" placeholder="grades" readonly>
            </li>
            <li> High School: <br>
                <input type="text" name="hinstitute" id="" value="<?php echo $row['hinstitute'];?>" placeholder="institute name" readonly>
                <input type="text" name="hstream" id="" value="<?php echo $row['hstream'];?>" placeholder="stream" readonly> <br>
                <input type="text" name="hyear" id="" value="<?php echo $row['hyear'];?>" placeholder="passing year" readonly>
                <input type="text" name="hgrade" id="" value="<?php echo $row['hgrade'];?>" placeholder="grades" readonly>

            </li>-->
           
                
            
        </ul> 
        
        </div>
    
</div>

    </form>
  
</html>