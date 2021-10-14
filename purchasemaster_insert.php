<%@page import="java.sql.*"%>
<%@page import="mba.dbconnect"%>
<jsp:useBean id="s" class="mba.dbconnect"/>
<jsp:getProperty name="s" property="conn"/>
<%
String pur_date=request.getParameter("pur_date");
String sup_id=request.getParameter("sup_id");
int k=s.stmt.executeUpdate("insert into purchasemaster values(null,'"+pur_date+"',"+sup_id+")");
%>
<script>
alert("inserted...");
document.location="purchasemaster_view.jsp";
</script>
