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
                        <h1 class="page-header"><strong>
                          <strong>Stock </strong></strong>Details<strong> <small>.</small>
                          </strong></h1>
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

<form name="form1" id="formID" method="post" action="stock_tabel_insert.php">
  <table align="center" class="table table-striped table-bordered table-hover">
  
    <tr>
      <td width="184"><strong>Select Product </strong></td>
      <td><select name="prodcut_id" id="product_id" class="validate[required] form-control">
        <option value="">Select Procuct</option>
        <?php
		  $sql="select * from  products";
		  $res=$conn->query($sql);
		while($row=mysqli_fetch_array($res))
		{
		?>
        <option value="<?php echo $row['pro_id'];?>"><?php echo $row['pro_name']; ?></option>
        <?php
		}
		  ?>
      </select></td>
    </tr>
    <tr>
      <td><strong>Stock</strong></td>
      <td><input name="stock" type="text" id="stock" class="validate[required] form-control"></td>
    </tr>
    <tr class="table table-striped">
      <td><strong>Supplier </strong></td>
      <td><select name="sup_id" id="sup_id" class="validate[required] form-control">
          
          <?php
		 $uname=$_SESSION['uname'];
$sql1="select * from suppliers where sup_email='$uname'";
$res1=$conn->query($sql1);
while($row1=mysqli_fetch_array($res1))
{
$id=$row1["sup_id"];
?>
          <option value="<?php echo $row1['sup_id']; ?>"><?php echo $row1['sup_name']; ?></option>
         <?php
}
?>
      </select></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
          <input type="submit" name="Submit" value="Submit" class="btn btn-success">
          <input type="reset" name="Reset" value="Reset" class="btn btn-danger">
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
