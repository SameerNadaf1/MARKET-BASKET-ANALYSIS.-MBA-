<?php include('db_connect.php'); ?>
<?php
$bill_id=$_POST["bill_id"];
$bill_master_id=$_POST["bill_master_id"];
$pro_id=$_POST["pro_id"];
$quantity=$_POST["quantity"];
$rate=$_POST["rate"];
$discount=$_POST["discount"];

$sql="update billdetails set bill_master_id='$bill_master_id',pro_id='$pro_id',quantity='$quantity',rate='$rate',discount='$discount' where bill_id='$bill_id' ";
$conn->query($sql);
?>
<script>
alert("Updated.."); 
document.location="billdetails_view.php";
</script>