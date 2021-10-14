
<?php session_start(); ?>
<?php include('db_connect.php'); ?>
<?php
//String bmid,dat,c_id,p_id,rate,qnt,dic;
$bmid=$_POST['bmid'];
$dat=$_POST['date']; 
$c_id=$_POST['c_id']; 
$p_id=$_POST['prodcut_id']; 
$qnt=$_POST['qnt']; 
$rate=$_POST['rate']; 
$dic=$_POST['dic']; 

$quant=$_POST['qnt'];

$sql="select max(bill_id) as bid from billdetails";
$res=$conn->query($sql);
$row=mysqli_fetch_array($res);

$bi=$row['bid'];
$bi=$bi+1;
  
  $uname=$_SESSION["uname"];
$sql1="select * from suppliers where sup_email='$uname'";
$res1=$conn->query($sql1);
$row1=mysqli_fetch_array($res1);
$sup_id=$row1["sup_id"];
		
  
 $sql2="select * from   stock_tabel  where product_id='$p_id' and sup_id='$sup_id' ";
 $res2=$conn->query($sql2);
if($row2=mysqli_fetch_array($res2))
{
$c_stock=$row2["stock"];
$cs_id=($c_stock-$quant);



  $sql3="select * from billmaster where bill_master_id='$bmid'";
 $res3=$conn->query($sql3);
		if($row3=mysqli_fetch_array($res3))
		{
		$sql4="insert into billdetails values('$bi','$bmid','$p_id','$qnt','$rate','$dic')";
		$conn->query($sql4);
		$sql5="update  stock_tabel set stock='$cs_id' where product_id='$p_id' and sup_id='$sup_id' ";
		$conn->query($sql5);
		}
		else
		{
		
		$sql6="insert into billdetails values('$bi','$bmid','$p_id','$qnt','$rate','$dic')";
		$conn->query($sql6);
		$sql7="insert into billmaster values('$bmid','$dat','$c_id')";
		$conn->query($sql7);
		$sql8="update  stock_tabel set stock='$cs_id' where product_id='$p_id' and sup_id='$sup_id' ";
		$conn->query($sql8);
	
		
		}
 
?>
<script>
alert("Product Added Ur Bill");
	document.location="billdetails_form.php?bmid="+<?php echo $bmid; ?>+"&c_id="+<?php echo $c_id; ?>;
</script>

<?php
}
else
{
?>
<script>
alert("Please Add Stock Details");
history.back();
</script>
<?php
}
?>