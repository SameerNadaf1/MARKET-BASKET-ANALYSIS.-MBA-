<?php include('db_connect.php'); ?>
<?php
$emp_id=$_POST["emp_id"];
$emp_name=$_POST["emp_name"];
$address=$_POST["address"];
$emp_phone=$_POST["emp_phone"];
$gender=$_POST["gender"];
$sup_id=$_POST["sup_id"];
$sql="update employees  set emp_name='$emp_name',address='$address',emp_phone=$emp_phone,gender='$gender',sup_id='$sup_id' where emp_id='$emp_id";
$conn->query($sql);
?>
<script>
alert("updated..");
document.location="employees_view.php";
</script>

