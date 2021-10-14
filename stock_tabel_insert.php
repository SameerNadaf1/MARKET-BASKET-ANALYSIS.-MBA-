<?php include('db_connect.php'); ?>

<?php

$pro_id=$_POST['prodcut_id']; 
$stock=$_POST['stock']; 
$sup_id=$_POST['sup_id']; 

$st=$stock;

$sql="select * from  stock_tabel where product_id='$pro_id' and sup_id='$sup_id' ";
$res=$conn->query($sql);
if($row=mysqli_fetch_array($res))
  
  {

$st_stock=$row['stock'];

$stock_final=$st+$st_stock;

$sql1="update stock_tabel set stock='$stock_final' where product_id='$pro_id' and sup_id='$sup_id' ";
$conn->query($sql1);

}

else
{

$sql2="insert into stock_tabel values(null,'$pro_id','$stock','$sup_id')";
$conn->query($sql2);


}
?>
<script>
alert("Stock Details Updated.....");
document.location="stock_tabel_view.php";
</script>
