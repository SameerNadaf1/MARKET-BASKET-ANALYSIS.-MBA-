<?php include('db_connect.php'); ?>
<?php
$emp_name=$_POST["emp_name"];
$address=$_POST["address"];
$emp_phone=$_POST["emp_phone"];
$gender=$_POST["gender"];
$sup_id=$_POST["sup_id"];
$sql="insert into employees values(null,'$emp_name','$address',$emp_phone,'$gender','$sup_id')";
$conn->query($sql);
?>
<script>
alert("Successfully ");
document.location="employees_view.php";
</script>

