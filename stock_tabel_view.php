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
                          Stock  <small>Details</small>
                        </strong></h1>
                    </div>
</div> 
                 <!-- /. ROW  -->
               <a href="stock_tabel_form.php" class="btn btn-info btn">Stock Adujstment </a> <hr>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Stock Detailes
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
    <th width="76">Stock Id </th>
    <th width="76">Product Name </th>
    <th width="59">Stock</th> 
	<th width="59">Sup Name</th>    
    <th width="72">Delete</th>
	<th width="72">Edit</th>
  </tr>
  </thead>
  <tbody>
<?php include('db_connect.php'); ?>
<?php
$uname=$_SESSION["uname"];
$sql="select * from stock_tabel st ,products pd,suppliers s where st.product_id=pd.pro_id and st.sup_id=s.sup_id and s.sup_email='$uname'";
$res=$conn->query($sql);
while($row=mysqli_fetch_array($res))
{
$stock_id=$row['stock_id'];
?>
  <tr>
    <td><?php echo $row['stock_id']; ?></td>
    <td><?php echo $row['pro_name']; ?></td>
    <td><?php echo $row['stock']; ?></td>
	 <td><?php echo $row['sup_name']; ?></td>
    <td><a href="stock_tabel_delete.php?stock_id=<?php echo $stock_id; ?>"onClick="return confirm('you want to delete');" title="Delete"><img src="icon/delete.jpg" height="30" width="30"></a></td>
	 <td><a href="stock_tabel_edit.php?stock_id=<?php echo $stock_id; ?>"><img src="icon/edit.jpg" height="30" width="30"></a></td>
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
