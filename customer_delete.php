<?php include('db_connect.php'); ?>
<?php
$id=$_REQUEST['id'];
$sql="delete from customer where cust_id='$id'";
$conn->query($sql);
?>
<script>
alert("Customer Account Delete	");
document.location="customer_view.php";
</script>