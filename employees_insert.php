<%@page import="java.sql.*"%>
<%@page import="mba.dbconnect"%>
<jsp:useBean id="s" class="mba.dbconnect"/>
<jsp:getProperty name="s" property="conn"/>
<%
String emp_name=request.getParameter("emp_name");
String address=request.getParameter("address");
String emp_phone=request.getParameter("emp_phone");
String gender=request.getParameter("gender");
String sup_id=request.getParameter("sup_id");
int k=s.stmt.executeUpdate("insert into employees values(null,'"+emp_name+"','"+address+"',"+emp_phone+",'"+gender+"','"+sup_id+"')");
%>
<script>
alert("inserted..");
document.location="employees_view.jsp";
</script>

