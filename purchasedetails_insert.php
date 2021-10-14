<%@page import="java.sql.*"%>
<%@page import="mba.dbconnect"%>
<jsp:useBean id="s" class="mba.dbconnect"/>
<jsp:getProperty name="s" property="conn"/>
<%
String pur_master_id=request.getParameter("pur_master_id");
String pro_id=request.getParameter("pro_id");
String quantity=request.getParameter("quantity");
String rate=request.getParameter("rate");
String discount=request.getParameter("discount");
int k=s.stmt.executeUpdate("insert into purchasedetails values(null,"+pur_master_id+","+pro_id+","+quantity+","+rate+","+discount+")");
%>
<script>
alert("inserted...");
document.location="purchasedetails_view.jsp";
</script>
