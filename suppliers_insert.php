<%@page import="java.sql.*"%>
<%@page import="mba.dbconnect"%>
<jsp:useBean id="s" class="mba.dbconnect"/>
<jsp:getProperty name="s" property="conn"/>
<%
String sup_name=request.getParameter("sup_name");
String sup_phone=request.getParameter("sup_phone");
String sup_email=request.getParameter("sup_email");
String sup_address=request.getParameter("sup_address");
int k=s.stmt.executeUpdate("insert into suppliers values(null,'"+sup_name+"','"+sup_phone+"','"+sup_email+"','"+sup_address+"')");
%>
<script>
alert("inserted..");
document.location="suppliers_view.jsp";
</script>
