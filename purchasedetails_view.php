<jsp:include page="meta_tags.jsp"></jsp:include>

<jsp:include page="menus.jsp"></jsp:include>

    
  
   <jsp:include page="side_menu.jsp"></jsp:include>
    
    <div class="content">
        
 <div class="header">
            
            <h1 class="page-title">Purchase Details view</h1>
</div>
        
                <div class="container-fluid">
            <div class="row-fluid">
           
<div class="btn-toolbar">
    
   
  <div class="btn-group">
  </div>
</div>
<div class="well">
<a href="purchasedetails_form.jsp" class="btn btn-primary">Purchase Details Add</a>
    <table class="table table-striped">
	<thead>
  <tr>
    <th>PURCHASE ID </th>
    <th>PURCHASE MASTER ID </th>
    <th>PRODUCT ID </th>
    <th>QUANTITY</th>
    <th>RATE</th>
    <th>DISCOUNT</th>
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
ResultSet rs=s.stmt.executeQuery("select * from purchasedetails pd,purchasemaster pm,products p where pd.pur_master_id=pm.pur_master_id and pd.pro_id=p.pro_id");
while(rs.next())
{
int id=rs.getInt("pur_id");
%>
  <tr>
    <td>&nbsp;<%=id%></td>
    <td>&nbsp;<%=rs.getInt("pur_master_id")%></td>
    <td>&nbsp;<%=rs.getInt("pro_id")%></td>
    <td>&nbsp;<%=rs.getInt("quantity")%></td>
    <td>&nbsp;<%=rs.getInt("rate")%></td>
    <td>&nbsp;<%=rs.getInt("discount")%></td>
    <td>&nbsp;<a href="purchasedetails_delete.jsp?id=<%=id%>">Delete</a></td>
    <td>&nbsp;<a href="purchasedetails_update.jsp?id=<%=id%>">Edit</a></td>
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
