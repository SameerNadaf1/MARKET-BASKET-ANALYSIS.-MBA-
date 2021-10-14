<%@page import="java.sql.*"%>
<%@page import="mba.dbconnect"%>
<jsp:useBean id="s" class="mba.dbconnect"/>
<jsp:getProperty name="s" property="conn"/>
<%
String id=request.getParameter("id");

int k=s.stmt.executeUpdate("delete from suppliers where sup_id="+id+"");

%>
<script>
alert("Deleted...");
document.location="suppliers_view.jsp";
</script>