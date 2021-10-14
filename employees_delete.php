<?php include('db_connect.php'); ?>
<?php
$id=$_REQUEST["id"];
$sql="delete from employees where  emp_id='$id' ";
$conn->query($sql);
?>
<script>
alert("deleted");
document.location="employees_view.php";
</script>