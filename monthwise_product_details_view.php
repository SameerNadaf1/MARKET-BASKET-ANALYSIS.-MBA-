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
                        <h1 class="page-header"><strong>
                          Month Wise Product   <small>Details</small>
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
                             Month Wise Product
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">

<?php include('db_connect.php'); ?>
<?php

$y=date('Y');
  
$month=$_POST["month"];
$year=$_POST["year"];

$dat="%-$month-$year";
?>

  <form name="form1" method="post" action="monthwise_product_details_view.php">
    <p>&nbsp;</p>
    <table width="200" border="0" class="table table-striped table-bordered table-hover">
      <tr>
        <td><strong>Select Month</strong> : </td>
        <td><select name="month" id="month" class="form-control">
          <option>Select Month</option>
          <option value="01">Jan</option>
          <option value="02">Feb</option>
          <option value="03">Mar</option>
          <option value="04">Apr</option>
          <option value="05">May</option>
          <option value="06">Jun</option>
          <option value="07">Jly</option>
          <option value="08">Aug</option>
          <option value="09">Sep</option>
          <option value="10">Oct</option>
          <option value="11">Nov</option>
          <option value="12">Dec</option>
        </select></td>
        <td><strong>&nbsp;Select Year :</strong></td>
        <td><select name="year" id="year" class="form-control">
          <option>Select Year</option>
          <?php

  for($i=2000; $i<=2030; $i++)
  {
  ?>
          <option value="<?php echo $i;?>" <?php if($y==$i) { ?> selected <?php } ?>><?php echo $i; ?></option>
          <?php
  }
  ?>
        </select></td>
        <td><input type="submit" name="Submit" value="Submit" class="btn btn-success"></td>
      </tr>
    </table>
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


$sql="select p.pro_name,b.rate,b.pro_id, sum(b.quantity) as cnt  from billdetails b LEFT JOIN products p ON p.pro_id=b.pro_id , billmaster bm,customer c,suppliers s where b.bill_master_id=bm.bill_master_id and bm.bill_date LIKE '$dat' and bm.cust_id=c.cust_id and s.sup_id=c.sup_id  GROUP BY b.pro_id ORDER by  cnt desc";
$res=$conn->query($sql);
while($row=mysqli_fetch_array($res))
{
//$sl=$sl+1;
$rate=$row['rate'];
$cnt=$row['cnt'];

$tot=$rate*$cnt;
?>
  <tr>
    <td>&nbsp;<?php echo $sl++; ?></td>
    <td>&nbsp;<b><?php echo $row['pro_name'];?></b></td>
    <td>&nbsp;<b><?php echo $rate; ?></b></td>
    <td>&nbsp;<div  class="btn btn-primary"><b><?php echo $cnt;?></b></div></td>
	<td>&nbsp;<div  class="btn"><b><?php echo $tot;?></b></div></td>
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
