<?php include('db_connect.php'); ?>
<?php
$id=$_REQUEST['id'];

$sql="delete from suppliers where sup_id='$id' ";
$conn->query($sql);

?>
<script>
alert("Deleted...");
document.location="suppliers_view.php";
</script>