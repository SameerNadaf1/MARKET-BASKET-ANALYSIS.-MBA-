<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
   <?php include('medatada.php');?>
   <?php include('header.php');?>
   <?php include('sidebar.php');?>
   <style type="text/css">
<!--
.style1 {font-weight: bold}
-->
   </style>
<body>
  
        
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            <strong>Bill Details <small>.</small></strong>
                        </h1>
               </div>
              </div> 
                 <!-- /. ROW  -->
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <span class="style1">Bill Details </span></div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">

<?php include('val.php'); ?>
<script type="text/javascript">
<!-- Begin
function startCalc(){
  interval = setInterval("calc()",1);
}
function calc(){
tot=(parseInt(document.formID.rate.value) * parseInt(document.formID.qnt.value));
dic=(parseInt(document.formID.dic.value));
t=(tot-dic);
document.formID.total.value=t;

}
function stopCalc(){
  clearInterval(interval);
}
//  End -->

function pamt()
{
 var pid=document.getElementById("product_id").value;

var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    var res=xmlhttp.responseText;
	
	document.getElementById("rate").value=res;
	
    }
  }
xmlhttp.open("GET","getrate.php?pid="+pid,true);
xmlhttp.send();
}

</script>


  <?php include('db_connect.php'); ?>
<?php

$bmid=$_REQUEST['bmid'];
$c_id=$_REQUEST['c_id'];
//$cu_id=0;
//if($c_id!=null)
//{
 //$cu_id=$_REQUEST['c_id'];
//}
$bmi=0;
$bm_id=0;
if($bmid==null)
{
$sql="select max(bill_master_id) as bmid from  billmaster";
$res=$conn->query($sql);
$row=mysqli_fetch_array($res);
 $bmi=$row['bmid'];
$bmi=$bmi+1;
}
else
{
 //bm_id=Integer.parseInt(bmid);
	$bm_id=$_REQUEST['bmid'];
  $bmi=$bm_id+0;
}

/*java.util.Date d1=new java.util.Date();
int d=d1.getDate();
int m=d1.getMonth()+1;
int y=d1.getYear()+1900;
*/
$dat=date('d-m-Y');
?>

<form name="formID" ID="formID" method="post" action="billdetails_insert.php">
<table class="table table-striped">
    <tr>
      <th width="47%" colspan="2">Bill No 
			
        <input name="bmid" type="text" id="bmid" value="<?php echo $bmi; ?>" size="5" readonly=""></th>
      <th  colspan="3">Date <input name="date" type="text" value="<?php echo $dat;?>"> </div></th>
    </tr>
    <tr>
      <td colspan="2">Select Customer
        <select name="c_id" id="c_id" class="validate[required] form-control" >
          <option value="">Select Customer</option>
		  <?php
$uname=$_SESSION['uname'];
		  $sql1="select * from  customer c, suppliers s where c.sup_id=s.sup_id and s.sup_email='$uname' ";
		  $res1=$conn->query($sql1);
		while($row1=mysqli_fetch_array($res1))
		{
		$cid=$row1['cust_id'];
		?>
		<option value="<?php echo $row1['cust_id']; ?>" <?php if($row1['cust_id']==$c_id) { ?> selected <?php } ?>><?php echo $row1['cust_name']; ?></option>
		<?php
		}
		  ?>
        </select> </td>
      <td colspan="3">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
      <td colspan="3">&nbsp;</td>
    </tr>
    <tr>
      <th>Select Product </th>
      <th>Rate</th>
      <th>Quantity</th>
      <th>Discount</th>
      <th>Total</th>
    </tr>
    <tr>
      <td><select name="prodcut_id" id="product_id"  class="validate[required]" onChange="pamt()">
        <option value="">Select Procuct</option>
        <?php
		  $sql3="select * from  products";
		  $res3=$conn->query($sql3);
		while($row3=mysqli_fetch_array($res3))
		{
		?>
        <option value="<?php echo $row3['pro_id']; ?>"><?php echo $row3['pro_name']; ?></option>
        <?php
		}
		  ?>
      </select></td>
      <td><input name="rate" type="text" id="rate"  class="validate[required,custom[onlyNumber]] " size="15" onFocus="startCalc();" onBlur="stopCalc();"></td>
      <td><input name="qnt" type="text" id="qnt"  class="validate[required,custom[onlyNumber]]" size="10" onFocus="startCalc();" onBlur="stopCalc();"></td>
      <td><input name="dic" type="text" id="dic"  class="validate[required,custom[onlyNumber]]"  onFocus="startCalc();" onBlur="stopCalc();" value="0" size="5"></td>
      <td><input name="total" type="text" id="total" size="15" readonly="">
        <input type="submit" name="Submit" value="Add Product"></td>
    </tr>
  </table>
  <p>&nbsp;  </p>
  <table class="table table-striped">
    <tr>
      <th>Sl NO</th>
      <th>Product Name </th>
      <th>Rate</th>
      <th>Qnt</th>
      <th>Total</th>
      <th>Cancel</th>
    </tr>
	<?php
	$slno=0;
	$tot=0;
	$vat=0;
	$discount=0;
	$total=0;
	$gtotal=0;
	
		$sql4="select * from billdetails bd,products p where bd.pro_id=p.pro_id and bd.bill_master_id='$bmid' ";
		$res4=$conn->query($sql4);
		while($row4=mysqli_fetch_array($res4))
		{
		$slno=$slno+1;
		$bill_id=$row4['bill_id'];
		$pid=$row4['pro_id'];
		
		 $qnt=$row4['quantity'];
		 $rate=$row4['rate'];
		 $dic=$row4['discount'];
		 $pname=$row4['pro_name'];
		 
		 $tot=($rate*$qnt);
		 $discount=$discount+$dic;
		 $total=$total+$tot;
		 $vat=($total*5)/105;
		 $gtotal=($total+$vat)-$discount;		
		?>
    <tr>
      <td>&nbsp;<?php echo $slno; ?></td>
      <td>&nbsp;<?php echo $pname; ?></td>
      <td>&nbsp;<?php echo $rate; ?></td>
      <td>&nbsp;<?php echo $qnt; ?></td>
      <td>&nbsp;<?php echo $tot; ?></td>
      <td>&nbsp;<a href="billdetails_delete.php?bill_id=<?php echo $bill_id; ?>&bmid=<?php echo $bmid; ?>&c_id=<?php echo $c_id; ?>" title="Sl no =<?php echo $slno; ?>">Cancel</a></td>
    </tr>
    
	<?php
	}
	?>
	<tr>
	  <th colspan="4"><div align="right"><b>Total</b></div></th>
	  <th>&nbsp;<b><?php echo $total; ?><b></th>
	  <td>&nbsp;</td>
	  </tr>
	<tr>
	  <td colspan="4"><div align="right"><b>Discount</b></div></td>
	  <td>&nbsp;<b><?php echo $discount; ?></b></td>
	  <td>&nbsp;</td>
	  </tr>
	<!--<tr>
      <td colspan="4"><div align="right"><b>Vat</b></div></td>
      <td>&nbsp;<b><%=vat%></b></td>
      <td>&nbsp;</td>
    </tr> -->
    <tr>
      <th colspan="4"><div align="right"><b>Grand Total </b></div></th>
      <th>&nbsp;<b><?php echo $gtotal; ?><b></th>
      <td>&nbsp;</td>
    </tr>
  </table>
  
</form>
</div>
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-6">
                                    
                                   
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
			<?php include('footer.php');?>
			
			</div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
 <script src="assets/js/jquery-1.10.2.js"></script>
   
    <script src="assets/js/bootstrap.min.js"></script>

    <script src="assets/js/jquery.metisMenu.js"></script>
    
    <script src="assets/js/custom-scripts.js"></script> 
    <?php include('val.php'); ?>
   
</body>
</html>
