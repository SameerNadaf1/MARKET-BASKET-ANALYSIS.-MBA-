<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include('medatada.php');?>
<?php include('header.php');?>
<?php include('sidebar.php');?>
</head>
<body>
        <!--/. NAV TOP  -->
        
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Products   <small>Details</small>
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
             <!--    <a href="products_form.php" class="btn btn-info btn">Add New Product </a> <hr> -->
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Products Detailes
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
<?php include('db_connect.php'); ?>
<?php
$sup_id=$_POST["sup_id"];
?>
 <form name="form1" method="post" action="products_sales_details_view_next.php">
   <h2>Select Shop</h2> 
    <p>&nbsp;</p>
    <table class="table table-striped table-bordered table-hover" width="200" border="0">
      <tr>
        
        <td width="107"><select name="sup_id" id="sup_id" class="form-control">
          <option value="">Select</option>
          <?php
	  $sql="select * from suppliers";
	  $res=$conn->query($sql);
while($row=mysqli_fetch_array($res))
{
$s_id=$row["sup_id"];
?>
          <option value="<?php echo $s_id; ?>" <?php  if($sup_id==$s_id) { ?> selected <?php } ?>><?php echo $row["sup_name"]; ?></option>
          <?php
}
?>
        </select></td>
        <td width="117"><input type="submit" name="Submit" value="Submit" class="btn btn-success"></td>
      </tr>
    </table>
    <p>&nbsp;    </p>
 </form>
  
 <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
    <th>Product ID </th>
    <th>Product Name </th>
    <th>Sales Rate </th>
	<th>Product Quantity </th>
    <th>Total Amount </th>
    </tr>
    </thead>
  <tbody>
  

<?php	
$sl=1;


$sql1="select p.pro_name,b.rate,b.pro_id, sum(b.quantity) as cnt  from billdetails b LEFT JOIN products p ON p.pro_id=b.pro_id , billmaster bm,customer c,suppliers s where b.bill_master_id=bm.bill_master_id and bm.cust_id=c.cust_id and s.sup_id=c.sup_id and s.sup_id='$sup_id' GROUP BY b.pro_id ORDER by  cnt desc";
$res1=$conn->query($sql1);
while($row1=mysqli_fetch_array($res1))
{
//sl=sl+1;
$rate=$row1["rate"];
$cnt=$row1["cnt"];

$tot=$rate * $cnt;
?>
  <tr>
    <td>&nbsp;<?php echo $sl++; ?></td>
    <td>&nbsp;<b><?php echo $row1["pro_name"]; ?></b></td>
    <td>&nbsp;<b><?php echo $rate; ?></b></td>
    <td>&nbsp;<div  class="btn btn-primary"><b><?php echo $cnt; ?></b></div></td>
	<td>&nbsp;<div  class="btn"><b><?php echo $tot; ?></b></div></td>
    </tr>
  <?php
  
  }
 ?>
   </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
              
                <!-- /. ROW  -->
     
        
                    <!-- End  Hover Rows  -->
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
             
   
</body>
</html>
