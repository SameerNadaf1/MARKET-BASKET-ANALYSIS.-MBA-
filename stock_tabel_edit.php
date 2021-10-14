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
                            <span class="style1">Stock Details </span><small>.</small>
                        </h1>
               </div>
              </div> 
                 <!-- /. ROW  -->
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <span class="style1">Stock Details </span></div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
<?php include('db_connect.php'); ?>

<?php include('db_connect.php'); ?>

<?php
$stock_id=$_REQUEST['stock_id'];

$sql="select * from   stock_tabel where stock_id='$stock_id' ";
$res=$conn->query($sql);
$row=mysqli_fetch_array($res);
$pid=$row['product_id'];		
?>
<form name="form1" method="post" action="stock_tabel_update.php">
<input type="hidden" value="<?php echo $row['stock_id'];?>" name="stock_id">
  <table align="center" class="table table-striped table-bordered table-hover">
  
    <tr>
      <td width="184"><strong>Select Product </strong></td>
      <td width="149"><select name="prodcut_id" id="product_id"  class="validate[required] form-control">
        <option value="">Select Procuct</option>
        <?php
		  $sql1="select * from  products";
		  $res1=$conn->query($sql1);
		while($row1=mysqli_fetch_array($res1))
		{
		$pid1=$row1['pro_id'];
		?>
        <option value="<?php echo $row1['pro_id']; ?>" <?php if($row1['pro_id']==$row['product_id']) { ?> selected <?php } ?>><?php echo $row1['pro_name'];?></option>
        <?php
		}
		  ?>
      </select></td>
    </tr>
    <tr>
      <td><strong>Stock</strong></td>
      <td><input name="stock" type="text" id="stock" value="<?php echo $row['stock']; ?>" class="validate[required] form-control"></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
          <input type="submit" name="Submit" value="Submit" class="btn btn-success btn">
          <input type="reset" name="Reset" value="Reset" class="btn btn-danger btn">
      </div></td>
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
    
  
</body>
</html>
