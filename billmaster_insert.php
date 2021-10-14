<%@page import="java.sql.*"%>
<%@page import="mba.dbconnect"%>
<jsp:useBean id="s" class="mba.dbconnect"/>
<jsp:getProperty name="s" property="conn"/>
<%
String bill_date=request.getParameter("bill_date");
String cust_id=request.getParameter("cust_id");
String sup_id=request.getParameter("sup_id");

int k=s.stmt.executeUpdate("insert into billmaster values(null,'"+bill_date+"',"+cust_id+","+sup_id+")");
%>
<script>
alert("Inserted.."); 
document.location="billmaster_view.jsp";
</script>