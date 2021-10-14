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
</head>
<body>
        <!--/. NAV TOP  -->
        
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
               <div class="col-md-12">
                   <h1 class="page-header style1">
                       Products  <small>Details</small>
                   </h1>
                    </div>
                </div> 
                 <strong>
               <!-- /. ROW  -->
               <!--  <a href="suppliers_form.php" class="btn btn-info btn">Add New Suppliers Details </a> <hr> -->
                      </strong>
                 <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Products Detailes
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
    <th>Product ID </th>
    <th>Product Name </th>
    <th>Product Price </th>
    <th>Product Price Sale </th>
	<th>GST </th>
  </tr>
    </thead>
  <tbody>
  
<?php include('db_connect.php'); ?>
<?php
$sql="select * from products p,gst_category g where p.gst_category_id=g.gst_category_id";
$res=$conn->query($sql);
while($row=mysqli_fetch_array($res))

{
$id=$row['pro_id'];
?>
  <tr>
    <td>&nbsp;<?php echo $id; ?></td>
    <td>&nbsp;<?php echo $row['pro_name']; ?></td>
    <td>&nbsp;<?php echo $row['pro_price_purchase']; ?></td>
    <td>&nbsp;<?php echo $row['pro_price_sales']; ?></td>
    <td>&nbsp;<?php echo $row['gst_category_percentage']; ?></td>
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
