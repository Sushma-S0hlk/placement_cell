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
          <th>S.No</th>
          <th>Company Name</th>
          <th>Mobile Number</th>
          <th>Email</th>
          <th>Address</th>
          <th>role</th>
          <th>Website</th>
          <th>Apply</th> 
        </tr>
        <?php  
      
    
    $q="SELECT * FROM  company ";
    $result = mysqli_query($db,$q);
    
    while ($r1 = mysqli_fetch_array($result)) {
        # code...
    

?>

        <tr> 
          <td><?=$r1['s_number'];?></td>
          <td><?=$r1['name'];?></td>
          <td><?=$r1['mobile'];?></td>
          <td><?=$r1['email'];?></td>
          <td><?=$r1['address'];?></td>
          <td><?=$r1['role'];?></td>
          <td><?=$r1['url'];?></td>
          <td><a href="apply.php?email=<?php echo $r1['role'];?>">Apply</a></td>
          
        </tr>
        
        

      </table>

     
         

          <?php } ?>
  </form>

</body>
</html>