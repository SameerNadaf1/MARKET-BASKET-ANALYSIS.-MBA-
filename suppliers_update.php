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
                            <span class="style1">Suppliers Details </span><small>.</small>
                        </h1>
               </div>
              </div> 
                 <!-- /. ROW  -->
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <span class="style1">Suppliers Details </span></div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">

<?php include('db_connect.php'); ?>
<?php
$id=$_REQUEST['id'];
$sql="select * from suppliers where sup_id='$id'";
$res=$conn->query($sql);
$row=mysqli_fetch_array($res);

?>

<form name="form1" method="post" action="suppliers_update1.php" id="formID">
<input type="hidden" value="<?php echo $row['sup_id'];?>" name="sup_id" %>
<table class="table table-striped table-bordered table-hover">
    <tr>
      <td width="151">Name</td>
      <td width="176"><input name="sup_name" type="text" id="sup_name" value="<?php echo $row['sup_name']; ?>" class="validate[required,custom[onlyLetter]]  form-control"></td>
    </tr>
    <tr>
      <td height="42"> Phone Number </td>
      <td><input name="sup_phone" type="text" id="sup_phone" value="<?php echo $row['sup_phone']; ?>" class="validate[required,custom[mobile]]  form-control"></td>
    </tr>
    <tr>
      <td> E-mail </td>
      <td><input name="sup_email" type="text" id="sup_email" value="<?php echo $row['sup_email']; ?>" class="validate[required,custom[email]]  form-control"></td>
    </tr>
    <tr>
      <td>Address</td>
      <td><textarea name="sup_address"  class="validate[required]  form-control" id="sup_address"><?php echo $row['sup_address']; ?></textarea></td>
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
 <!--    <script src="assets/js/jquery-1.10.2.js"></script>
   
    <script src="assets/js/bootstrap.min.js"></script>

    <script src="assets/js/jquery.metisMenu.js"></script>
    
    <script src="assets/js/custom-scripts.js"></script> -->
    
   
</body>
</html>
