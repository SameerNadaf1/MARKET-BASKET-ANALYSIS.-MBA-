<?php include('db_connect.php'); ?>
<?php
$id=$_REQUEST['id'];
$sql="delete from products where  pro_id='$id'";
$conn->query($sql);
?>
<script>
alert("Products Deleted ");
document.location="products_view.php";
</script>