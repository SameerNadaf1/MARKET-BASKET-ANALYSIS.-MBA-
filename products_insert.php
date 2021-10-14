<?php include('db_connect.php'); ?>
<?php
$pro_name=$_POST['pro_name'];
$pro_price_purchase=$_POST['pro_price_purchase'];
$pro_price_sales=$_POST['pro_price_sales'];
$gst_category_id=$_POST['gst_category_id'];
$sql="insert into products values(null,'$pro_name','$pro_price_purchase','$pro_price_sales','$gst_category_id')";
$conn->query($sql);
?>
<script>
alert("New Products Added Successfull..");
document.location="products_view.php";
</script>