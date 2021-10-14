<?php
include('db_connect.php');
$st=$_REQUEST['stock_id'];
$sql="delete from stock_tabel where stock_id='$st'";
$conn->query($sql);
?>
<script>
alert("Stock Is deleted....");
document.location="stock_tabel_view.php";
</script>