<%@page import="java.sql.*"%>
<%@page import="mba.dbconnect"%>
<jsp:useBean id="s" class="mba.dbconnect"/>
<jsp:getProperty name="s" property="conn"/>
<%
String emp_id=request.getParameter("emp_id");
String emp_name=request.getParameter("emp_name");
String address=request.getParameter("address");
String emp_phone=request.getParameter("emp_phone");
String gender=request.getParameter("gender");
String sup_id=request.getParameter("sup_id");
int k=s.stmt.executeUpdate("update employees  set emp_name='"+emp_name+"',address='"+address+"',emp_phone="+emp_phone+",gender='"+gender+"',sup_id='"+sup_id+"' where emp_id="+emp_id+"");
%>
<script>
alert("updated..");
document.location="employees_view.jsp";
</script>

