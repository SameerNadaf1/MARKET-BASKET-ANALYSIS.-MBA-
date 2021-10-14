<?php include('db_connect.php'); ?>
<?php
$id=$_REQUEST["id"];
$sql="delete from  billdetails where 	bill_id='$id' ";
$conn->query($sql);
?>
<script>
alert("Bill Deleted Successfully...");
document.location="billdetails_view.php";
</script>