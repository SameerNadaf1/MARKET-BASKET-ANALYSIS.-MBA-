<%@page import="java.sql.*"%>
<%@page import="mba.dbconnect"%>
<jsp:useBean id="s" class="mba.dbconnect"/>
<jsp:getProperty name="s" property="conn"/>
<%
String bill_master_id=request.getParameter("bill_master_id");
String pro_id=request.getParameter("pro_id");
String quantity=request.getParameter("quantity");
String rate=request.getParameter("rate");
String discount=request.getParameter("discount");

int k=s.stmt.executeUpdate("insert into billdetails values(null,"+bill_master_id+","+pro_id+","+quantity+","+rate+","+discount+")");
%>
<script>
alert("Inserted.."); 
document.location="billdetails_view.jsp";
</script>