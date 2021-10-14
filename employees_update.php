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
                            <span class="style1">Employe deatils update </span><small>.</small>
                        </h1>
               </div>
              </div> 
                 <!-- /. ROW  -->
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <span class="style1">Employe deatils update </span></div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">

<?php include('db_connect.php'); ?>
<?php
$id=$_REQUEST["id"];
$sql="select * from employees e, suppliers s where e.emp_id='$id' and e.sup_id=s.sup_id ";
$res=$conn->query($sql);
$row=mysqli_fetch_array($res);
?>

<form name="form1" method="post" action="employees_update1.php" id="formID">
<input type="hidden" value="<?php echo $row["emp_id"]; ?>" name="emp_id"%>
<table class="table table-striped">
    <tr>
      <td width="194"><strong>Employe Name</strong></td>
      <td width="144"><input name="emp_name" type="text" id="emp_name" value="<?php echo $row["emp_name"]; ?>" class="validate[required,custom[onlyLetter]] form-control"></td>
    </tr>
    <tr>
      <td><strong>Address</strong></td>
      <td><input name="address" type="text" id="address" value="<?php echo $row["address"]; ?>" class="validate[required] form-control"></td>
    </tr>
    <tr>
      <td><strong>Empolye Phone Number</strong></td>
      <td><input name="emp_phone" type="text" id="emp_phone" value="<?php echo $row["emp_phone"]; ?>" class="validate[required,custom[mobile]] form-control"></td>
    </tr>
	<?php
	$gender=$row["gender"];
	?>
    <tr>
      <td><strong>Gender</strong></td>
      <td><input name="gender" type="radio" value="male" id="male" <?php if($gender=='male') { ?> checked <?php } ?>>
        male 
          <input name="gender" type="radio" value="female" id="female" <?php if($gender=='female') { ?> checked <?php } ?>>
          female</td>
    </tr>
    <tr>
      <td><strong>Suplier Name </strong></td>
      <td><input name="sup_id" type="text" id="sup_id" value="<?php echo $row["sup_name"]; ?>" class="validate[required,custom[onlyNumber]] form-control" readonly=""></td>
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
