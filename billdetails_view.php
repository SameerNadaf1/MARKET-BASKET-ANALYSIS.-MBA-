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
                            Customer Bills   <small>Details</small>
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
                <a href="billdetails_form.php" class="btn btn-info btn">Bill Details Add </a> <hr>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Customer Bills Details View
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
    <th>Bill ID </th>
    <th>Bill Master ID </th> 
    <th>Product ID </th>
    <th>Quantity</th>
    <th>Rate</th>
    <th>Discount</th>
    <th>Delete</th>
    <th>Edit</th>
  </tr>
  </thead>
  <tbody>
<?php include('db_connect.php'); ?>
<?php
$sql="select * from  billdetails bd,billmaster bm,products p where bd.bill_master_id=bm.bill_master_id and bd.pro_id=p.pro_id";
$res=$conn->query($sql);
while($row=mysqli_fetch_array($res))
{
$id=$row["bill_id"];
?>
  <tr>
    <td>&nbsp;<?php echo $id; ?></td>
    <td>&nbsp;<?php echo $row["bill_master_id"]; ?></td>
    <td>&nbsp;<?php echo $row["pro_name"]; ?></td>
    <td>&nbsp;<?php echo $row["quantity"]; ?></td>
    <td>&nbsp;<?php echo $row["rate"]; ?></td>
    <td>&nbsp;<?php echo $row["discount"]; ?></td>
    <td>&nbsp;<a href="billdetails_delete.php?id=<?php echo $id; ?>" onClick="return confirm('you want to delete');" title="Delete"><img src="icon/delete.jpg" height="30" width="30"></a></td>
    <td>&nbsp;<a href="billdetails_update.php?id=<?php echo $id; ?>" title="Edit"><img src="icon/edit.jpg" height="30" width="30"></a></td>
    </tr>
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
