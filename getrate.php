<?php include('db_connect.php'); ?>
<?php
$pid=$_REQUEST["pid"];

$sql="select * from products where pro_id='$pid' ";
$res=$conn->query($sql);
$row=mysqli_fetch_array($res);


echo $row['pro_price_sales'];
?>
