<?php session_start();?>
<?php


$username=$_REQUEST['username'];
$password=$_REQUEST['password'];

include('db_connect.php');
echo $sql="select * from  login where username='$username' and password='$password'";
$res=$conn->query($sql);
if($row=mysqli_fetch_array($res))
{
$type=$row['type'];
$_SESSION['uname']=$username;

if($type=="admin")
{
header('location:admin/home.php');
}
else if($type=="shop")
{
header('location:shop/home.php');
}
else if($type=="user")
{
header('location:user/home.php');
}

}
else
{
?>
<script>
alert("Invalid Username Or Password");
document.location="index.html";
//history.back();
</script>
<?php
}

?>

