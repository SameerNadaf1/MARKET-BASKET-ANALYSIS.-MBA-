<?php include('db_connect.php'); ?>

<?php

$stock_id=$_POST['stock_id'];
$pro_id=$_POST['prodcut_id'];
$stock=$_POST['stock'];



$sql="update stock_tabel set stock='$stock',product_id='$pro_id' where stock_id='$stock_id'";
$conn->query($sql);
?>
<script>
alert("Stock Details Updated.....");
document.location="stock_tabel_view.php";
</script>
