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
                            <strong>Customer  <small>Details</small></strong>
                        </h1>
                    </div>
</div> 
                 <!-- /. ROW  -->
                <a href="customer_form.php" class="btn btn-info btn">Add New Customer </a> 
                <hr>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Customer Detailes
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
      <th><strong>Customer ID </strong></th>
      <th><strong>Customer Name</strong></th>
      <th><strong>Mobile Number</strong></th> 
      <th><strong>Email ID </strong></th>
      <th><strong>Date</strong></th>
      <th><strong>City</strong></th>
      <th><strong>Pincode</strong></th>
      <th><strong>Supplier</strong></th>
      <th><strong>Delete</strong></th>
      <th><strong>Edit</strong></th>
    </tr>
	</thead>
  <tbody>
<?php include('db_connect.php'); ?>

<?php
$uname=$_SESSION['uname'];
$sql="select * from customer c,suppliers s where c.sup_id=s.sup_id and sup_email='$uname'";
$res=$conn->query($sql);
while($row=mysqli_fetch_array($res))
{
$id=$row['cust_id'];

?>
    <tr>
      <td>&nbsp;<?php echo $id; ?></td>
      <td>&nbsp;<?php echo $row['cust_name']; ?></td>
      <td>&nbsp;<?php echo $row['cust_phone']; ?></td>
      <td>&nbsp;<?php echo $row['cust_email']; ?></td>
      <td>&nbsp;<?php echo $row['date_become_cust']; ?></td>
      <td>&nbsp;<?php echo $row['cust_city']; ?></td>
      <td>&nbsp;<?php echo $row['pincode']; ?></td>
      <td>&nbsp;<?php echo $row['sup_name']; ?></td>
      
	  <td>&nbsp;<a href="customer_delete.php?id=<?php echo $id; ?>"onClick="return confirm('you want to delete');" title="Delete"><img src="icon/delete.jpg" height="30" width="30"></a></td>
      <td>&nbsp;<a href="customer_update.php?id=<?php echo $id; ?>" title="Edit"><img src="icon/edit.jpg" height="30" width="30"></a></td>
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
