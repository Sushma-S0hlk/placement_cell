<?php
include('connection.php');
session_start();


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="div1">
<?php
 $sql = "SELECT * FROM fileup";
 $q = mysqli_query($db,$sql);
 while($info=mysqli_fetch_array($q))
 {

 
 ?>
<embed src="pdf/<?php echo $info['file'];?>" type="application/pdf" style="height:700px; width: 1000px;">
 <?php
 }
 ?>
</div>

</body>
</html>
