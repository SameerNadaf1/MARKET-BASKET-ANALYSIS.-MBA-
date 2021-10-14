<?php include('db_connect.php'); ?>
<?php
$cust_id=$_POST['cust_id'];
$cust_name=$_POST['cust_name'];
$cust_phone=$_POST['cust_phone'];
$cust_email=$_POST['cust_email'];
$date_become_cust=$_POST['date_become_cust'];
$cust_city=$_POST['cust_city'];
$pincode=$_POST['pincode'];
$sup_id=$_POST['sup_id'];
$sql="update customer set cust_name='$cust_name',cust_phone='$cust_phone',cust_email='$cust_email',date_become_cust='$date_become_cust',cust_city='$cust_city',pincode='$pincode',sup_id='$sup_id' where cust_id='$cust_id'";
$conn->query($sql);
?>
<script>
alert("Customer Details Updeted..");
document.location="customer_view.php";
</script>
