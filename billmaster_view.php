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
                      Customer Bill  <small>Details</small>
                   </h1>
                    </div>
                </div> 
                 <strong>
                 <!-- /. ROW  -->
                  </strong><a href="billdetails_form.php" class="btn btn-info btn">Add New Bill </a> 
                 <hr>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Bill Detailes
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
    <th>Bill Master ID </th> 
    <th>Bill Date</th>
    <th>Customer ID</th>
    <th>Supplier ID </th>
	<th>Bill Detailes</th>
    <th>Delete</th>

  </tr>
   </thead>
  <tbody>
<?php include('db_connect.php'); ?>
<?php $uname=$_SESSION['uname'];
$sr=1;
$sql="select * from billmaster bm,customer c,suppliers s where bm.cust_id=c.cust_id and c.sup_id=s.sup_id and s.sup_email='$uname'  ";
$res=$conn->query($sql);
while($row=mysqli_fetch_array($res))
{
$id=$row["bill_master_id"];
?>
  <tr>
    <td>&nbsp;<?php echo $sr++; ?></td>
    <td>&nbsp;<?php echo $row["bill_date"]; ?></td>
    <td>&nbsp;<?php echo $row["cust_name"]; ?></td>
	 <td>&nbsp;<?php echo $row["sup_name"]; ?></td>
 <td>&nbsp;
   <div align="center"><a href="bill details_more.php?bmid=<?php echo $id; ?>&cust_id=<?php echo $row["cust_id"]; ?>&dat=<?php echo $row["bill_date"]; ?>" class="btn btn-info btn">Bill Details</a></div></td>
    <td>&nbsp;
      <div align="center"><a href="billmaster_delete.php?id=<?php echo $id; ?>"onClick="return confirm('you want to delete');" title="Delete"><img src="icon/delete.jpg" height="30" width="30"></a></div></td>
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
