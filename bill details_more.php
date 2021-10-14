<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include('medatada.php');?>
<?php include('header.php');?>
<?php include('sidebar.php');?>
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
	  
	         <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Customer Bill Master   <small>Details</small>
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
                
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Customer Bill Master Details
                        </div>
                        <div class="panel-body">
                          <div class="table-responsive">
							
							
							
    
	 
<?php include('db_connect.php'); ?>
<?php
$bmid=$_REQUEST['bmid'];
$dat=$_REQUEST['dat'];
$cust_id=$_REQUEST['cust_id'];

?>


<table border="1" class="table table-striped">
						<thead>
    <tr>
      <th width="47">Bill No 
			
        <input name="bmid" type="text" id="bmid" value="<?php echo $bmid; ?>" size="5" readonly=""></th>
      <th width="53"><div align="right">Date 
            <input name="date" type="text" value="<?php echo $dat; ?>">
      </div></th>
    </tr>
    <tr>
      <td><b>Customer Details</b>
        
        
		  <?php
		  $sql_sp="select * from  customer where cust_id=$cust_id";
		  $res_sp=$conn->query($sql_sp);
			$row_sp=mysqli_fetch_array($res_sp);
		
		?>
		
		<p>Customer Name : <b><?php echo $row_sp['cust_name']?></b></p>
		Customer Phone : <b><?php echo $row_sp['cust_phone']?></b>
		</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <p>&nbsp;  </p>
  <table border="1" class="table table-striped">
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

		$sql_od="select * from  billdetails bd,products p,gst_category gc where bd.pro_id=p.pro_id and bd.bill_master_id='$bmid' and gc.gst_category_id=p.gst_category_id";
		 $res_od=$conn->query($sql_od);
			while($row_od=mysqli_fetch_array($res_od))
				{
		$slno=$slno+1;
		$bill_id=$row_od['bill_id'];
		$pid=$row_od['pro_id'];
		 $qnt=$row_od['quantity'];
		 $rate=$row_od['rate'];
		 $dic=$row_od['discount'];
		 $pgst=$row_od['gst_category_percentage'];
		 
		 $scgst=($pgst/2);
		 $totgst1=$totgst1+$pgst;
		 $pname=$row_od['pro_name'];
		 
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
		  
		 $gtotal=($total+$vat)-$discount;		
		?>
    <tr>
      <td>&nbsp;<?php echo $slno; ?></td>
      <td>&nbsp;<?php echo $pname; ?></td>
      <td>&nbsp;<?php echo $rate; ?></td>
	   <td>&nbsp;<?php echo $qnt; ?></td>
      <td>&nbsp;<b><?php echo $sctg; ?></b> (<?php echo $scgst; ?>%) </td>
	   <td>&nbsp;<b><?php echo $sctg; ?></b> (<?php echo $scgst; ?>%) </td>
	    <td>&nbsp;<b><?php echo $totgst; ?></b> (<?php echo $pgst; ?>%)</td>
     
      <td>&nbsp;<b> <?php echo $totgstval; ?></b></td>
     
    </tr>
    
	<?php
	}
	?>
	<tr>
	  <th colspan="7"><div align="right"><b>Total</b></div></th>
	  <th>&nbsp;<?php echo $total; ?><b></th>
	  
	  </tr>
	<tr>
	  <td colspan="7"><div align="right"><b>Discount</b></div></td>
	  <td> &nbsp; <b><?php echo $discount; ?></b></td>
	  
	  </tr>
	<tr>
      <td colspan="7"><div align="right"><b>Total Tax </b></div></td>
      <td> &nbsp;<b> <?php echo $vat; ?></b></td>
      
    </tr>
    <tr>
      <th colspan="7"><div align="right"><b>Grand Total </b></div></th>
      <th><?php echo $gtotal; ?><b></th>
      
    </tr>
  </table>
 
</div>
</div>
 <a href="#" class="btn btn-primary"  onclick="PrintDiv();">Print</a>
			</div>
  </div>
 </div>
<div class="pagination">
   
</div>



                    
 <?php include('footer.php');?>











