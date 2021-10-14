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
                        <h1 class="page-header">                          <strong>Product Details <small></small></strong><small>.</small>
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
<form name="form1" method="post" action="products_insert.php" id="formID">
<table class="table table-striped table-bordered table-hover">
  
    <tr>
      <td width="177" height="37"><strong>Product Name </strong></td>
      <td width="94"><input name="pro_name" type="text" id="pro_name" class="validate[required]   form-control"></td>
    </tr>
    <tr>
      <td><strong>Purchase Product Price </strong></td>
      <td><input name="pro_price_purchase" type="text" id="pro_price_purchase" class="validate[required,custom[onlyNumber]]   form-control"></td>
    </tr>
    <tr>
      <td><strong>Sales Product Price</strong></td>
      <td><input name="pro_price_sales" type="text" id="pro_price_sales" class="validate[required,custom[onlyNumber]]   form-control"></td>
    </tr>
	<tr>
    <td><strong>Gst (in %)</strong></td>
    <td><select name="gst_category_id" id="gst_category_id" class="validate[required] form-control">
      <option value="select">select</option>
	  <?php include('db_connect.php'); ?>
	  <?php
	  $sql="select * from  gst_category ";
	 $res=$conn->query($sql);
     while($row=mysqli_fetch_array($res))
      {
        //int id=rs.getInt("gst_category_id");
        ?>
      <option value="<?php echo $row['gst_category_id']; ?>"><?php echo $row['gst_category_percentage'];?>%</option>
       <?php
       }
       ?>
    </select></td>
	</tr>
    <tr>
      <td height="38" colspan="2"><div align="center">
        <input type="submit" name="Submit" value="Submit" class="btn btn-success">
        <input type="reset" name="Reset" value="Reset" class="btn btn-danger btn">
      </div></td>
    </tr>
  </table>
<div align="center"></div>
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
