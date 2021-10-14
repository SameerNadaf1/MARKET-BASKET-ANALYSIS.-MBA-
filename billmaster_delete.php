<?php include('db_connect.php'); ?>
<?php
$id=$_REQUEST['id'];
$sql="delete from billmaster where bill_master_id='id'";
$conn->query($sql);
?>
<script>
alert("Bill Deleted");
document.location="billmaster_view.php";
</script>