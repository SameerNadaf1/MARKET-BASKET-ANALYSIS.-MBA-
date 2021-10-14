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
<body>
  
        
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            <span class="style1">Product Details </span><small>.</small>
                        </h1>
               </div>
              </div> 
                 <!-- /. ROW  -->
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <span class="style1">Product Details </span></div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
<?php include('db_connect.php'); ?>
<?php
$id=$_REQUEST['id'];
$sql="select * from products where pro_id='$id' " ;
$res=$conn->query($sql);
$row=mysqli_fetch_array($res);
?>

<form name="form1" method="post" action="products_update1.php" id="formID">
<input type="hidden" value="<?php echo $row['pro_id'];?>" name="pro_id"%>
<table class="table table-striped table-bordered table-hover">
    
    <tr>
      <td width="177" height="37"><strong>Product Name </strong></td>
      <td width="94"><input name="pro_name" type="text" id="pro_name" value="<?php echo $row['pro_name']; ?>" class="validate[required] form-control"></td>
    </tr>
    <tr>
      <td><strong>Purchase Product Price </strong></td>
      <td><input name="pro_price_purchase" type="text" id="pro_price_purchase" value="<?php echo $row['pro_price_purchase']; ?>" class="validate[required,custom[onlyNumber]] form-control"></td>
    </tr>
    <tr>
      <td><strong>Sales Product Price</strong></td>
      <td><input name="pro_price_sales" type="text" id="pro_price_sales" value="<?php echo $row['pro_price_sales']; ?>" class="validate[required,custom[onlyNumber]] form-control"></td>
    </tr>
    <tr>
      <td height="26" colspan="2"><div align="center"><strong>
          <input type="submit" name="Submit" value="Submit" class="btn btn-success">
          <input type="reset" name="Reset" value="Reset" class="btn btn-danger">
      </strong></div></td>
    </tr>
  </table>
</form>
</div>
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-6">
                                    
                                   
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
			<?php include('footer.php');?>
			<?php include('val.php'); ?>
			</div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
   
    <script src="assets/js/bootstrap.min.js"></script>

    <script src="assets/js/jquery.metisMenu.js"></script>
    
    <script src="assets/js/custom-scripts.js"></script> 
    
   <?php include('val.php'); ?>
</body>
</html>
