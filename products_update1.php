<?php include('db_connect.php'); ?>
<?php
$pro_id=$_POST['pro_id'];
$pro_name=$_POST['pro_name'];
$pro_price_purchase=$_POST['pro_price_purchase'];
$pro_price_sales=$_POST['pro_price_sales'];
$sql="update products set pro_name='$pro_name',pro_price_purchase='$pro_price_purchase',pro_price_sales='$pro_price_sales' where pro_id='$pro_id'";
$conn->query($sql);
?>
<script>
alert("Products Update Successfully..");
document.location="products_view.php";
</script>