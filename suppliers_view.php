<jsp:include page="meta_tags.jsp"></jsp:include>

<jsp:include page="menus.jsp"></jsp:include>

    
  
   <jsp:include page="side_menu.jsp"></jsp:include>
    
    <div class="content">
        
 <div class="header">
            
            <h1 class="page-title">Suppliers Details view</h1>
</div>
        
                <div class="container-fluid">
            <div class="row-fluid">
           
<div class="btn-toolbar">
    
   
  <div class="btn-group">
  </div>
</div>
<div class="well">
<a href="suppliers_form.jsp" class="btn btn-primary">Suppliers Details Add</a>
    <table class="table table-striped">
	<thead>
  <tr>
    <th>SUPPLIER ID </th>
    <th>SUPPLIER NAME </th>
    <th>SUPPLIER PHONE NUMBER </th>
    <th>SUPPLIER EMAIL </th>
    <th>ADDRESS</th>
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
ResultSet rs=s.stmt.executeQuery("select * from suppliers");
while(rs.next())
{
int id=rs.getInt("sup_id");
%>
  <tr>
    <td>&nbsp;<%=id%></td>
    <td>&nbsp;<%=rs.getString("sup_name")%></td>
    <td>&nbsp;<%=rs.getString("sup_phone")%></td>
    <td>&nbsp;<%=rs.getString("sup_email")%></td>
    <td>&nbsp;<%=rs.getString("sup_address")%></td>
    <td>&nbsp;<a href="suppliers_delete.jsp?id=<%=id%>">Delete</a></td>
    <td>&nbsp;<a href="suppliers_update.jsp?id=<%=id%>">Edit</a></td>
  </tr>
  <%
  }
  %>
  </table>
</table>
</div>
<div class="pagination">
   
</div>



                    
 <jsp:include page="footer.jsp"></jsp:include>
