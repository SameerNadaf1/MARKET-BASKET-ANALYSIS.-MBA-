<jsp:include page="meta_tags.jsp"></jsp:include>

<jsp:include page="menus.jsp"></jsp:include>

    
  
   <jsp:include page="side_menu.jsp"></jsp:include>
    
    <div class="content">
        
 <div class="header">
            
            <h1 class="page-title">Purchasemaster Details View</h1>
</div>
        
                <div class="container-fluid">
            <div class="row-fluid">
           
<div class="btn-toolbar">
    
   
  <div class="btn-group">
  </div>
</div>
<div class="well">
<a href="purchasemaster_form.jsp" class="btn btn-primary">Purchasemaster Details Add</a>
    <table class="table table-striped">
	<thead>
  <tr>
    <th>PURCHASE MASTER ID </th>
    <th>PURCHASE DATE </th>
    <th>SUPPLIER ID </th>
    <th>DELETE</th>
    <th>EDIT</th>
  </tr>
  </thead>
  <tbody>
    <%@page import="java.sql.*"%>
<%@page import="mba.dbconnect"%>
<jsp:useBean id="s" class="mba.dbconnect"/>
<jsp:getProperty name="s" property="conn"/>
<%
ResultSet rs=s.stmt.executeQuery("select * from purchasemaster pm,suppliers s where pm.sup_id=s.sup_id");
while(rs.next())
{
int id=rs.getInt("pur_master_id");
%>
  <tr>
    <td>&nbsp;<%=id%></td>
    <td>&nbsp;<%=rs.getString("pur_date")%></td>
    <td>&nbsp;<%=rs.getInt("sup_id")%></td>
    <td>&nbsp;<a href="purchasemaster_delete.jsp?id=<%=id%>">Delete</a></td>
    <td>&nbsp;<a href="purchasemaster_update.jsp?id=<%=id%>">edit</a></td>
  </tr>
  <%
  }
  %>
   </tbody>
</table> 
</div>
<div class="pagination">
   
</div>



                    
 <jsp:include page="footer.jsp"></jsp:include>
