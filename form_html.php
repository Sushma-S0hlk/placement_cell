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
    <title>Personal Details</title>
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
     <h2>Fill Details:</h2>
    <form action="form.php" method="post" enctype="multipart/form-data">
    <div>
        <div style="float: left;">
         <ul>
         <li>Student USN <br>
                <input type="text" name="usn" id="" placeholder="USN" required>
                
            </li>
            <li>Student name <br>
                <input type="text" name="fname" id="" placeholder="first name" required>
                <input type="text" name="lname" id="" placeholder="last name" required>
            </li>
            <li> Dob & Gender <br>
                <input type="date" name="dob" id="" placeholder="date of birth" required>
                <input type="text" name="gender" id="" placeholder="gender" required>
            </li>
            <li>Mobile & Email <br>
                <input type="text" name="mobile" id="" placeholder="Mobile number"  required>
                <input type="email" name="email" id="" placeholder="email"  required>
            </li>
        
       
            <li>Father's & Mother's name <br>
                <input type="text" name="father" id="" placeholder="father's name" required>
                <input type="text" name="mother" id="" placeholder="mother's name" required>
            </li>
            <li>Nation & State  <br>
                <input type="text" name="nation" id="" placeholder="nation" required>
                <input type="text" name="state" id="" placeholder="state" required>
            </li>
            <li> City & Street  <br>
                <input type="text" name="city" id="" placeholder="city" required>
                <input type="text" name="address" id="" placeholder="address" required>

            </li>
            <li> Photo :
                <input type="file"  name="photo" id="button" >
               
            </li>
         </ul>
            
        </div>
        <div style="float: right;">
            <ul>
            <li> Graduation: <br>
                <input type="text" name="ginstitute" id="" placeholder="institute name" required>
                <input type="text" name="gstream" id="" placeholder="stream" required> <br>
                <input type="text" name="gyear" id="" placeholder="passing year" required>
                <input type="text" name="ggrade" id="" placeholder="grades" required>
            </li>
            <li> Intermediate: <br>
                <input type="text" name="iinstitute" id="" placeholder="institute name" required>
                <input type="text" name="istream" id="" placeholder="stream" required> <br>
                <input type="text" name="iyear" id="" placeholder="passing year" required>
                <input type="text" name="igrade" id="" placeholder="grades" required>
            </li>
            <li> High School: <br>
                <input type="text" name="hinstitute" id="" placeholder="institute name" required>
                <input type="text" name="hstream" id="" placeholder="stream" required> <br>
                <input type="text" name="hyear" id="" placeholder="passing year" required>
                <input type="text" name="hgrade" id="" placeholder="grades" required>

            </li>
            <br>
            <li> Bio:
            <input type="text" name="bio" id="" placeholder="describe yourself in one line." required>
            </li>
           
                
            
        </ul> 
        
        </div>
    
</div>
<input type="submit" value="Upload" class="upload" name="sub">
    </form>
</body>
</html>