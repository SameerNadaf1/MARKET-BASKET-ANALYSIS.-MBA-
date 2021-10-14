<jsp:include page="meta_tags.jsp"></jsp:include>

<jsp:include page="menus.jsp"></jsp:include>

    
  
   <jsp:include page="side_menu.jsp"></jsp:include>

    
    <div class="content">
        
    <div class="header">
            
            <h1 class="page-title">PURCHASE DETAILS </h1>
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
<body>

<form name="form1" method="post" action="purchasedetails_insert.jsp" id="formID">
 <table class="table table-striped"
    <tr>
      <td colspan="2"><div align="center">Purchase Details </div></td>
    </tr>
    <tr>
      <td width="153">Purchase Master Id </td>
      <td width="131"><select name="pur_master_id" id="pur_master_id" class="validate[required,custom[onlyNumber]]">
        <option value="select">select</option>
		<%
ResultSet rs1=s.stmt.executeQuery("select * from purchasemaster");
while(rs1.next())
{
int id=rs1.getInt("pur_master_id");
%>
<option value="<%=id%>"><%=id%></option>
<%
}
%>
      </select></td>
    </tr>
    <tr>
      <td>Product Id </td>
      <td><select name="pro_id" id="pro_id" class="validate[required,custom[onlyNumber]]" >
        <option value="select">select</option>
		<%
ResultSet rs=s.stmt.executeQuery("select * from products");
while(rs.next())
{
int id=rs.getInt("pro_id");
%>
<option value="<%=id%>"><%=rs.getString("pro_name")%></option>
<%
}
%>
  </select></td>
    </tr>
    <tr>
      <td>Quantity</td>
      <td><input name="quantity" type="text" id="quantity" class="validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td>Rate</td>
      <td><input name="rate" type="text" id="rate" class="validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td>Discount</td>
      <td><input name="discount" type="text" id="discount" class="validate[required,custom[onlyNumber]]"></td>
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
