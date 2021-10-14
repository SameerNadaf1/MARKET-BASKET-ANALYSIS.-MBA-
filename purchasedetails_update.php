<%@page import="java.sql.*"%>
<%@page import="mba.dbconnect"%>
<jsp:useBean id="s" class="mba.dbconnect"/>
<jsp:getProperty name="s" property="conn"/>
<%
String id=request.getParameter("id");
ResultSet rs=s.stmt.executeQuery("select * from purchasedetails where pur_id="+id+"");
rs.next();
%>
<jsp:include page="meta_tags.jsp"></jsp:include>

<jsp:include page="menus.jsp"></jsp:include>

    
  
   <jsp:include page="side_menu.jsp"></jsp:include>

    
    <div class="content">
        
    <div class="header">
            
            <h1 class="page-title">Purchase Details Update</h1>
    </div>
        
                <div class="container-fluid">
            <div class="row-fluid">
                  
<div class="well">
    
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane active in" id="home">

<jsp:include page="val.jsp"></jsp:include>
<form name="form1" method="post" action="purchasedetails_update1.jsp" id="formID">
<input type="hidden" value="<%=rs.getInt("pur_id")%>" name="pur_id"%>
<table class="table table-striped">
    <tr>
      <td colspan="2"><div align="center">Purchase Details </div></td>
    </tr>
    <tr>
      <td width="153">Purchase Master Id </td>
      <td width="131"><input name="pur_master_id" type="text" id="pur_master_id" value="<%=rs.getInt("pur_master_id")%>" class="validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td>Product Id </td>
      <td><input name="pro_id" type="text" id="pro_id" value="<%=rs.getInt("pro_id")%>" class="validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td>Quantity</td>
      <td><input name="quantity" type="text" id="quantity" value="<%=rs.getInt("quantity")%>" class="validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td>Rate</td>
      <td><input name="rate" type="text" id="rate" value="<%=rs.getInt("rate")%>" class="validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td>Discount</td>
      <td><input name="discount" type="text" id="discount" value="<%=rs.getInt("discount")%>" class="validate[required,custom[onlyNumber]]"></td>
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
