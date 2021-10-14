<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include('medatada.php');?>
<?php include('header.php');?>
<?php include('sidebar.php');?>
</head>
<body>
        <!--/. NAV TOP  -->
        		 <script type="text/javascript">     
        function PrintDiv() {    
           var divToPrint = document.getElementById('divToPrint');
           var popupWin = window.open('', '_blank', 'width=300,height=300');
           popupWin.document.open();
           popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
            popupWin.document.close();
                }
     </script>
	   <div id="divToPrint" >
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header"><strong>
                          Bill Master  <small>Details</small>
                        </strong></h1>
                    </div>
              </div> 
                 <!-- /. ROW  -->
             <!--    <a href="products_form.php" class="btn btn-info btn">Add New Product </a> <hr> -->
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
						
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Bill Master Detailes
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">

					
			
	 
<?php include('db_connect.php'); ?>
<?php

$bmid=$_REQUEST['bmid'];
$dat=$_REQUEST['dat'];
$cust_id=$_REQUEST['cust_id'];

?>


 <table class="table table-striped table-bordered table-hover" >
						<thead>
    <tr>
      <th width="53">Bill No 
			
        <input name="bmid" type="text" id="bmid" class="form-control" value="<?php echo $bmid;  ?>" size="5" readonly=""></th>
      <th width="53"><div align="right">Date 
            <input name="date" type="text" class="form-control" value="<?php echo $dat;?>">
      </div></th>
    </tr>
    <tr>
      <td><b>Customer Details</b>
        
        
		  <?php
		  $sql="select * from  customer where cust_id='$cust_id'";
		$res=$conn->query($sql);
		$row=mysqli_fetch_array($res);
		?>
		
		<p>Customer Name : <b><?php echo $row['cust_name'];?></b></p>
		Customer Phone : <b><?php echo $row['cust_phone'];?></b>
		</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <p>&nbsp;  </p>
 <table class="table table-striped table-bordered table-hover" >
						<thead>
    <tr>
      <th>Sl NO</th>
      <th>Product Name </th>
      <th>Rate</th>
	    <th>Qnt</th>
  		 <th>CGST</th>
	   <th>SGST</th>
	     <th>Total GST Tax</th>
    
      <th>Total</th>
    </tr>
	</thead>
	<?php
	$slno=0;
	$tot=0;
	$vat=0;
	$discount=0;
	$total=0;
	$gtotal=0;
	$cgst=0;
	$totgst1=0;
	$tottg=0;

		$sql="select * from billdetails bd,products p,gst_category gc where bd.pro_id=p.pro_id and bd.bill_master_id='$bmid' and gc.gst_category_id=p.gst_category_id";
		$res=$conn->query($sql);
		while($row=mysqli_fetch_array($res))
		{
		$slno=slno+1;
		$bill_id=$row['bill_id'];
		$pid=$row['pro_id'];
		
		 $qnt=$row['quantity'];
		 $rate=$row['rate'];
		 $dic=$row['discount'];
		 $pgst=$row['gst_category_percentage'];
		 
		$scgst=(pgst/2);
		 $totgst1=$totgst1+$pgst;
		$pname=$row['pro_name'];
		 
		 $tot=($rate*$qnt);
		 $discount=$discount+$dic;
		 
		 
		 
		  
		 
		 if($pgst!=0)
		 {
		 $tottg=$tottg+$tot;
		$vat=($tottg*$totgst1)/100;
		 }
		$totgst=($rate*$pgst)/100;
		 $sctg=($totgst/2);
		 
		  $totgstval=$tot+$totgst;
		 
		  $total=$total+$totgstval;
		  
		 $gtotal=($total+vat)- $discount;		
		?>
    <tr>
      <td>&nbsp;<?php echo $slno; ?></td>
      <td>&nbsp;<?php echo $pname; ?></td>
      <td>&nbsp;<?php echo $rate; ?></td>
	   <td>&nbsp;<?php echo $qnt; ?></td>
      <td>&nbsp;<b><?php echo $sctg; ?></b> (<?php echo $scgst; ?>%) </td>
	   <td>&nbsp;<b><?php echo $sctg; ?></b> (<?php echo $scgst; ?>%) </td>
	    <td>&nbsp;<b><?php echo $totgst; ?></b> (<?php echo $pgst; ?>%)</td>
     
      <td>&nbsp;<b><?php echo $totgstval; ?></b></td>
     
    </tr>
    
	<?php
	}
	?>
	<tr>
	  <th colspan="7"><div align="right"><b>Total</b></div></th>
	  <th>&nbsp;<b><?php echo $total;?><b></th>
	
	  </tr>
	<tr>
	  <td colspan="7"><div align="right"><b>Discount</b></div></td>
	  <td>&nbsp;<b><?php echo $discount; ?></b></td>
	
	  </tr>
	<tr>
      <td colspan="7"><div align="right"><b>Total Tax </b></div></td>
      <td>&nbsp;<b><?php echo $vat; ?></b></td>
    
    </tr>
    <tr>
      <th colspan="7"><div align="right"><b>Grand Total </b></div></th>
      <th>&nbsp;<b><?php echo $gtotal; ?><b></th>
      
    </tr>
  </tbody>
                              </table>
                            </div>
                             
                        </div>
                    </div>
                    <!--End Advanced Tables -->
              
                <!-- /. ROW  -->
     
        
                    <!-- End  Hover Rows  -->
					<a href="#" class="btn btn-primary"  onclick="PrintDiv();">Print</a>
               <?php include('footer.php');?>
                <div class="col-md-6">
                     <!--    Context Classes  -->
                    <div class="panel panel-default">
                       
                        
                    </div>
                    <!--  end  Context Classes  -->
                </div>
            </div>
                <!-- /. ROW  -->
        </div>
           </div>
               
   
</body>
</html>
