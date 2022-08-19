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
body{
  overflow-x: auto;
}

</style>
<body>
  <h3>View selected students</h3>
  <form action="" method="post">
    <table>
        <tr>
          <th>Student Name</th>
          <th>Stream</th>
          <th>Year Of passing</th>
          <th>Company Name</th>
          <th>Post</th>
        </tr>
        <?php  
        $records = mysqli_query($db,"select * from selected "); // fetch data from database
        while($r1 = mysqli_fetch_array($records))
        {
?>
        <tr> 
          <td><?=$r1['name'];?></td>
          <td><?=$r1['stream'];?></td>
          <td><?=$r1['pyear'];?></td>
          <td><?=$r1['companyname'];?></td>
          <td><?=$r1['post'];?></td>
        </tr>        
        <?php } ?>
      </table>   
  </form>
</body>
</html>