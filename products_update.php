  <jsp:include page="meta_tags.jsp"></jsp:include>

<jsp:include page="menus.jsp"></jsp:include>

    
  
   <jsp:include page="side_menu.jsp"></jsp:include>

    
    <div class="content">
        
    <div class="header">
            
            <h1 class="page-title">Products Details Update</h1>
    </div>
        
                <div class="container-fluid">
            <div class="row-fluid">
                  
<div class="well">
    
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane active in" id="home">

<jsp:include page="val.jsp"></jsp:include>
  <%@page import="java.sql.*"%>
<%@page import="mba.dbconnect"%>
<jsp:useBean id="s" class="mba.dbconnect"/>
<jsp:getProperty name="s" property="conn"/>
<%
String id=request.getParameter("id");
ResultSet rs=s.stmt.executeQuery("select * from products where pro_id="+id+"");
rs.next();
%>

<form name="form1" method="post" action="products_update1.jsp" id="formID">
<input type="hidden" value="<%=rs.getInt("pro_id")%>" name="pro_id"%>
<table class="table table-striped">
    <tr>
      <td colspan="2"><div align="center">Product Details </div></td>
    </tr>
    <tr>
      <td width="177" height="37">Product Name </td>
      <td width="94"><input name="pro_name" type="text" id="pro_name" value="<%=rs.getString("pro_name")%>" class="validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>Purchase Product Price </td>
      <td><input name="pro_price_purchase" type="text" id="pro_price_purchase" value="<%=rs.getInt("pro_price_purchase")%>" class="validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td>Sales Product Price</td>
      <td><input name="pro_price_sales" type="text" id="pro_price_sales" value="<%=rs.getInt("pro_price_sales")%>" class="validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td>Current Stock</td>
      <td><input name="current_stock" type="text" id="current_stock" value="<%=rs.getInt("current_stock")%>" class="validate[required,custom[onlyNumber]]"></td>
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
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">�</button>
   
  </div>
  <div class="modal-body">
    

  </div>
 
</div>


<jsp:include page="footer.jsp"></jsp:include>
