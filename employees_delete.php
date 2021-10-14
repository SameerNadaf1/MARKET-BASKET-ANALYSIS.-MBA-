  <%@page import="java.sql.*"%>
<%@page import="mba.dbconnect"%>
<jsp:useBean id="s" class="mba.dbconnect"/>
<jsp:getProperty name="s" property="conn"/>
<%
String id=request.getParameter("id");
int k=s.stmt.executeUpdate("delete from employees where  emp_id="+id+"");
%>
<script>
alert("deleted");
document.location="employees_view.jsp";
</script>