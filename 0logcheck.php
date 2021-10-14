<%@page import="java.sql.*"%>
<%@page import="mba.dbconnect"%>
<jsp:useBean id="s" class="mba.dbconnect"/>
<jsp:getProperty name="s" property="conn"/>
<%

String username=request.getParameter("username");
String password=request.getParameter("password");


ResultSet rs=s.stmt.executeQuery("select * from login where username='"+username+"' and password='"+password+"'");
if(rs.next())
{
String type=rs.getString("type");

session.setAttribute("uname",username);
if(type.equals("admin"))
{
%>
<script>
document.location="admin/home.jsp";
</script>
<%
}

if(type.equals("shop"))
{
%>
<script>
document.location="shop/home.jsp";
</script>
<%
}

}
else
{
%>
<script>
alert("Invalid Username Or Password");
history.back();
</script>
<%
}
%>