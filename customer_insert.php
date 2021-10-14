<?php include('db_connect.php'); ?>
<?php
$cust_name=$_POST['cust_name'];
$cust_phone=$_POST['cust_phone'];
$cust_email=$_POST['cust_email'];
$date_become_cust=$_POST['date_become_cust'];
$cust_city=$_POST['cust_city'];
$pincode=$_POST['pincode'];
$sup_id=$_POST['sup_id'];
$sql="insert into customer values(null,'$cust_name','$cust_phone','$cust_email','$date_become_cust','$cust_city','$pincode','$sup_id')";
$conn->query($sql);
?>
<script>
alert("Customer New Added Successfully");
document.location="customer_view.php";
</script>
