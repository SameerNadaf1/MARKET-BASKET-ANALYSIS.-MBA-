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
                          Employee <small>Details</small>
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
                             Employee Detailes
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
    <th>Employee ID </th>
    <th>Employee Name</th>
    <th>Address</th>
    <th>Mobile Number</th>
    <th>Gender</th>
    <th>Supllier</th>

  </tr>
    </thead>
  <tbody>
<?php include('db_connect.php'); ?>
<?php
$sql="select * from employees e,suppliers s where e.sup_id=s.sup_id ";
$res=$conn->query($sql);
while($row=mysqli_fetch_array($res))
{
$id=$row["emp_id"];
?>
  <tr>
    <td>&nbsp;<?php echo $id; ?></td>
    <td>&nbsp;<?php echo $row['emp_name']; ?></td>
    <td>&nbsp;<?php echo $row['address']; ?></td>
    <td>&nbsp;<?php echo $row['emp_phone']; ?></td>
    <td>&nbsp;<?php echo $row['gender']; ?></td>
    <td>&nbsp;<?php echo $row['sup_name']; ?></td>

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
