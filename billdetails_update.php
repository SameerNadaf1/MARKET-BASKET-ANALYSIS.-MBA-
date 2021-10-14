<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
   <?php include('medatada.php');?>
   <?php include('header.php');?>
   <?php include('sidebar.php');?>
<body>
  
        
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            <span class="style1">Customer Bill Add  Update</span><small>.</small>
                        </h1>
               </div>
              </div> 
                 <!-- /. ROW  -->
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <span class="style1">Customer Bill Add  Update</span></div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">

<?php include('db_connect.php'); ?>
<?php
$id=$_REQUEST["id"];
$sql="select * from billdetails where bill_id='$id' ";
$res=$conn->query($sql);
$row=mysqli_fetch_array($res);
?>


<form name="form1" method="post" action="billdetails_update1.php" id="formID">
<input type="hidden" value="<?php echo $row["bill_id"];?>" name="bill_id" > 
<table align="center" class="table table-striped table-bordered table-hover">
    <tr>
      <td colspan="2"><div align="center">Bill Details </div></td>
    </tr>
    <tr>
      <td width="170">Bill master id </td>
      <td width="144"><input name="bill_master_id" type="text" id="bill_master_id" value="<?php echo $row["bill_master_id"]; ?>" class="validate[required,custom[onlyNumber]] form-control"></td>
    </tr>
    <tr>
      <td>Product id </td>
      <td><input name="pro_id" type="text" id="pro_id" value="<?php echo $row["pro_id"]; ?>" class="validate[required,custom[onlyNumber]] form-control" ></td>
    </tr>
    <tr>
      <td>Quantity</td>
      <td><input name="quantity" type="text" id="quantity" value="<?php echo $row["quantity"]; ?>" class="validate[required,custom[onlyNumber]] form-control"></td>
    </tr>
    <tr>
      <td>Rate</td>
      <td><input name="rate" type="text" id="rate" value="<?php echo $row["rate"]; ?>" class="validate[required,custom[onlyNumber]] form-control"></td>
    </tr>
    <tr>
      <td>Discount</td>
      <td><input name="discount" type="text" id="discount" value="<?php echo $row["discount"]; ?>" class="validate[required,custom[onlyNumber]] form-control"></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="Submit" value="Submit" class="btn btn-success btn">
      <input type="reset" name="Reset" value="Reset" class="btn btn-danger"></td>
    </tr>
  </table>
    <p>&nbsp;</p>
 
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
