<%@page import="java.sql.*"%>
<%@page import="mba.dbconnect"%>
<jsp:useBean id="s" class="mba.dbconnect"/>
<jsp:getProperty name="s" property="conn"/>
<%
String bill_master_id=request.getParameter("bill_master_id");
String bill_date=request.getParameter("bill_date");
String cust_id=request.getParameter("cust_id");
String sup_id=request.getParameter("sup_id");

int k=s.stmt.executeUpdate("update billmaster set bill_date='"+bill_date+"',cust_id="+cust_id+",sup_id="+sup_id+" where bill_master_id="+bill_master_id+"");
%>
<script>
alert("updated.."); 
document.location="billmaster_view.jsp";
</script>