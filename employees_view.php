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
                          Employees  <small>Details</small>
                        </strong></h1>
                    </div>
</div> 
                 <!-- /. ROW  -->
                <a href="employees_form.php" class="btn btn-info btn"> Add Employees Details</a> 
                <hr>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Employees Detailes
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
    <th><strong>Employe ID </strong></th> 
    <th><strong>Employe Name</strong></th>
    <th><strong>Address</strong></th>
    <th><strong>Mobile Number</strong></th>
    <th><strong>Gender</strong></th>
    <th><strong>Supplier ID </strong></th>
    <th><strong>Delete</strong></th>
    <th><strong>Edit</strong></th>
  </tr>
    </thead>
  <tbody>
<?php include('db_connect.php'); ?>
<?php

$uname=$_SESSION['uname'];
$sql="select * from employees e,suppliers s where e.sup_id=s.sup_id and sup_email='$uname' ";
$res=$conn->query($sql);
while($row=mysqli_fetch_array($res))
{
$id=$row['emp_id'];
?>
  <tr>
    <td>&nbsp;<?php echo $id; ?></td>
    <td>&nbsp;<?php echo $row["emp_name"]; ?></td>
    <td>&nbsp;<?php echo $row["address"]; ?></td>
    <td>&nbsp;<?php echo $row["emp_phone"]; ?></td>
    <td>&nbsp;<?php echo $row["gender"]; ?></td>
    <td>&nbsp;<?php echo $row["sup_name"]; ?></td>
    <td>&nbsp;<a href="employees_delete.php?id=<?php echo $id; ?>" onClick="return confirm('you want to delete');" title="Delete"><img src="icon/delete.jpg" height="30" width="30"></a></td>
    <td>&nbsp;<a href="employees_update.php?id=<?php echo $id; ?>"title="Edit" ><img src="icon/edit.jpg" height="30" width="30"></a></td>
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
