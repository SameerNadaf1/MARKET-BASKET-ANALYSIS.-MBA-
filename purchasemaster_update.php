<%@page import="java.sql.*"%>
<%@page import="mba.dbconnect"%>
<jsp:useBean id="s" class="mba.dbconnect"/>
<jsp:getProperty name="s" property="conn"/>
<%
String id=request.getParameter("id");
ResultSet rs=s.stmt.executeQuery("select * from purchasemaster where pur_master_id="+id+"");
rs.next();
%>
<jsp:include page="meta_tags.jsp"></jsp:include>

<jsp:include page="menus.jsp"></jsp:include>

    
  
   <jsp:include page="side_menu.jsp"></jsp:include>

    
    <div class="content">
        
    <div class="header">
            
            <h1 class="page-title">Purchasemaster Update</h1>
    </div>
        
                <div class="container-fluid">
            <div class="row-fluid">
                  
<div class="well">
    
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane active in" id="home">

<jsp:include page="val.jsp"></jsp:include>
<form name="form1" method="post" action="purchasemaster_update1.jsp" id="formID">
<input type="hidden" value="<%=rs.getInt("pur_master_id")%>" name="pur_master_id"%>
<table class="table table-striped">
    <tr>
      <td colspan="2"><div align="center">Purchase Master </div></td>
    </tr>
    <tr>
      <td width="110"> Purchase Date</td>
      <td width="144"><input name="pur_date" type="date" id="pur_date" value="<%=rs.getInt("pur_date")%>" class="validate[required,custom[date]]"></td>
    </tr>
    <tr>
      <td>Supplier Id </td>
      <td><input name="sup_id" type="text" id="sup_id" value="<%=rs.getInt("sup_id")%>" class="validate[required,custom[onlyNumber]]"></td>
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
 