
    
	
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
                            <span class="style1">Change Password</span><small>.</small>
                        </h1>
               </div>
              </div> 
                 <!-- /. ROW  -->
              <div class="row">
                <div class="col-lg-14">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <span class="style1">Change Password</span></div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-7">


<form name="form1" method="post" id="formID" action="changepin.php" class="form-horizontal">
  <table class="table table-striped table-bordered" id="example">
    
    <tr>
      <td width="163"><strong>Old Password*</strong></td>
      <td width="328"><input name="old_pwd" type="password" id="old_pwd" required="1" class="form-control validate[required]"/></td>
    </tr>
    <tr>
      <td><strong>New Password* </strong></td>
      <td><input name="new_pwd" type="password" id="new_pwd" required="1" class="form-control validate[required]"/></td>
    </tr>
    <tr>
      <td><strong>Confirm Password* </strong></td>
      <td><input name="conf_pwd" type="password" id="con_pwd" required="1" class="form-control validate[required]" /></td>
    </tr>
    <tr>
      <td height="29" colspan="2"><div align="center">
      <input type="submit" name="Submit" value="Submit" class="btn btn-success">
        <input type="reset" name="Reset" value="Reset" class="btn btn-danger">
       </div></td>
    </tr>
  </table>
  	
  <div align="center"></div>
</form>
</div>
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-6">
                                    <?php include('footer.php');?>
                                   

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
			
			</div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
   <?php include('val.php'); ?>
</body>
</html>