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
                          Suppliers  <small>Details</small>
                        </strong></h1>
                    </div>
</div> 
                 <!-- /. ROW  -->
                <a href="suppliers_form.php" class="btn btn-info btn">Add New Suppliers Details </a> <hr>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Suppliers Detailes
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                              <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                  <thead>
                                      <tr>
      <th><div align="center">Supplier ID </div></th>
      <th><div align="center">Supllier Name</div></th>
      <th><div align="center">Supplier Mobile Number</div></th>
      <th><div align="center">Supplier Email </div></th>
      <th><div align="center">Address</div></th>
	   <th><div align="center">Edit</div></th>
       <th><div align="center">Delete</div></th>
     
  </tr>
      </thead>
    <tbody>
  <?php include('db_connect.php'); ?>
  <?php
$sql="select * from suppliers";
$res=$conn->query($sql);
while($row=mysqli_fetch_array($res))
{
$id=$row['sup_id'];
?>
    <tr>
      <td>&nbsp;<?php echo $id; ?></td>
      <td>&nbsp;<?php echo $row['sup_name']; ?></td>
      <td>&nbsp;<?php echo $row['sup_phone']; ?></td>
      <td>&nbsp;<?php echo $row['sup_email']; ?></td>
      <td>&nbsp;<?php echo $row['sup_address']; ?></td>
	   <td>&nbsp;
	     <div align="center"><a href="suppliers_update.php?id=<?php echo $id; ?>" title="Edit"><img src="icon/edit.jpg" height="30" width="30"></a></div></td>
      <td>&nbsp;
        <div align="center"><a href="suppliers_delete.php?id=<?php echo $id; ?>" onClick="return confirm('you want to delete');" title="Delete"><img src="icon/delete.jpg" height="30" width="30"></a></div></td>
     
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
