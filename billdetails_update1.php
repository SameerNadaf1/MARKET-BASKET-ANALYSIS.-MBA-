<%@page import="java.sql.*"%>
<%@page import="mba.dbconnect"%>
<jsp:useBean id="s" class="mba.dbconnect"/>
<jsp:getProperty name="s" property="conn"/>
<%
String bill_id=request.getParameter("bill_id");
String bill_master_id=request.getParameter("bill_master_id");
String pro_id=request.getParameter("pro_id");
String quantity=request.getParameter("quantity");
String rate=request.getParameter("rate");
String discount=request.getParameter("discount");

int k=s.stmt.executeUpdate("update billdetails set bill_master_id="+bill_master_id+",pro_id="+pro_id+",quantity="+quantity+",rate="+rate+",discount="+discount+" where bill_id="+bill_id+"");
%>
<script>
alert("Updated.."); 
document.location="billdetails_view.jsp";
</script>