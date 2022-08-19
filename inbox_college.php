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
    <title>Sent</title>
</head>
<style>
    table {
  border-collapse: collapse;
  width: 100%;
}

 td,th {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

 

tr:hover {background-color: #C2F2F2;}
body{
  overflow-x: auto;
}
.edit{
  font-size: 20px;
  text-decoration: none;
  margin-left: 20px;
  border-radius:  4px;
  border : none;
  padding: 10px;
  background-color: #008CBA;
  color: white;
}
.edit:hover{
  background-color: green;
}


</style>
<body>


  <form action="" method="post">
    <table>
  
        <tr>
       
          <th>Title</th>
          <th>Email</th>
          <th>Date & Time</th>
         <th>view more</th>
          <th>Delete</th>
        </tr>
        <?php  
        $n = $_SESSION["email"];
        $records = mysqli_query($db,"SELECT * FROM mail where email = '$n' "); // fetch data from database 
        while($r1 = mysqli_fetch_array($records))
        {
?>
        <tr> 
          <td><?=$r1['subject'];?></td>
          <td><?=$r1['user_mail'];?></td>
          <td><?=$r1['date_time'];?></td>
          <td><a href="view_mail.php?date_time=<?php echo $r1['date_time'];?>" >view more</a></td>
          <td><a href="delete_mail.php?date_time=<?php echo $r1['email'];?>" >delete</a></td>
        </tr>
        
        <?php } ?>
      </table>

    
       
  </form>

</body>
</html>