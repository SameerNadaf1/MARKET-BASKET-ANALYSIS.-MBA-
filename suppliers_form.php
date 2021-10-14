<jsp:include page="meta_tags.jsp"></jsp:include>

<jsp:include page="menus.jsp"></jsp:include>

    
  
   <jsp:include page="side_menu.jsp"></jsp:include>

    
    <div class="content">
        
    <div class="header">
            
            <h1 class="page-title">SUPPLIERS DETAILS </h1>
    </div>
        
                <div class="container-fluid">
            <div class="row-fluid">
                  
<div class="well">
    
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane active in" id="home">

<jsp:include page="val.jsp"></jsp:include>
<form name="form1" method="post" action="suppliers_insert.jsp" id="formID">
<table class="table table-striped">
    <tr>
      <td height="25" colspan="2"><div align="center">Suppliers Details </div></td>
    </tr>
    <tr>
      <td width="151">Name</td>
      <td width="176"><input name="sup_name" type="text" id="sup_name" class="validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td height="42"> Phone Number </td>
      <td><input name="sup_phone" type="text" id="sup_phone"  class="validate[required,custom[mobile]]"></td>
    </tr>
    <tr>
      <td> E-mail </td>
      <td><input name="sup_email" type="text" id="sup_email" class="validate[required,custom[email]]"></td>
    </tr>
    <tr>
      <td>Address</td>
      <td><textarea name="sup_address" id="sup_address" class="validate[required]"></textarea></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="Submit" value="Submit" class="btn btn-primary">
      <input type="reset" name="Reset" value="Reset" class="btn btn-danger"></td>
    </tr>
  </table>
</form>
</div>
  </div>

</div>

<div class="modal small hide fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
   
  </div>
  <div class="modal-body">
    

  </div>
 
</div>


<jsp:include page="footer.jsp"></jsp:include>
