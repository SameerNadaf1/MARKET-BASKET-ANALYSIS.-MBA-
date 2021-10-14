<jsp:include page="meta_tags.jsp"></jsp:include>

<jsp:include page="menus.jsp"></jsp:include>

    
  
   <jsp:include page="side_menu.jsp"></jsp:include>
    
    <div class="content">
        
 <div class="header">
            
            <h1 class="page-title">Products Sales Report</h1>
</div>
        
                <div class="container-fluid">
            <div class="row-fluid">
           
<div class="btn-toolbar">
    
   
  <div class="btn-group">
  </div>
</div>

<div class="well">
    <table class="table table-striped">
	<thead>
  <tr>
    <th>Product ID </th>
    <th>Product Name </th>
    <th>Sales Rate </th>
	<th>Product Quantity </th>
    <th>Total Amount </th>
    </tr>
    </thead>
  <tbody>
  
  <%@page import="java.sql.*"%>
<%@page import="mba.dbconnect"%>
<jsp:useBean id="s" class="mba.dbconnect"/>
<jsp:getProperty name="s" property="conn"/>

<%	
int sl=0;
String uname=session.getAttribute("uname").toString();

ResultSet rs1=s.stmt.executeQuery("select p.pro_name,b.rate,b.pro_id, sum(b.quantity) as cnt  from billdetails b LEFT JOIN products p ON p.pro_id=b.pro_id , billmaster bm,customer c,suppliers s where b.bill_master_id=bm.bill_master_id and bm.cust_id=c.cust_id and s.sup_id=c.sup_id and s.sup_email='"+uname+"' GROUP BY b.pro_id ORDER by  cnt desc");
while(rs1.next())
{
sl=sl+1;
int rate=rs1.getInt("rate");
int cnt=rs1.getInt("cnt");

int  tot=rate*cnt;
%>
  <tr>
    <td>&nbsp;<%=sl%></td>
    <td>&nbsp;<b><%=rs1.getString("pro_name")%></b></td>
    <td>&nbsp;<b><%=rate%></b></td>
    <td>&nbsp;<div  class="btn btn-primary"><b><%=cnt%></b></div></td>
	<td>&nbsp;<div  class="btn"><b><%=tot%></b></div></td>
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
