<?php include('db_connect.php'); ?>
<?php
$sup_id=$_POST['sup_id'];
$sup_name=$_POST['sup_name'];
$sup_phone=$_POST['sup_phone'];
$sup_email=$_POST['sup_email'];
$sup_address=$_POST['sup_address'];
$sql="update suppliers set sup_name='$sup_name',sup_phone='$sup_phone',sup_email='$sup_email',sup_address='$sup_address' where sup_id='$sup_id' ";
mysql_query($sql);
?>
<script>
alert("updated....");
document.location="suppliers_update.php";
</script>
