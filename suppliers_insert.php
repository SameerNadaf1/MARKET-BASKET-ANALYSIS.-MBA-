<?php include('db_connect.php'); ?>
<?php
$sup_name=$_POST["sup_name"];
$sup_phone=$_POST["sup_phone"];
$sup_email=$_POST["sup_email"];
$sup_address=$_POST["sup_address"];
$sql="insert into suppliers values(null,'$sup_name','$sup_phone','$sup_email','$sup_address')";
$conn->query($sql);
$sql1="insert into login values('$sup_email','$sup_phone','shop','Enter Ur Email Id','$sup_email','Active')";
$conn->query($sql1);
?>
<script>
alert("New Added Suppliers Details ");
document.location="suppliers_view.php";
</script>
