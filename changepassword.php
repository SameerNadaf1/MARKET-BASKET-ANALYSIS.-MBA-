	 
<%@page import="java.sql.*"%>
<%@page import="mba.dbconnect"%>
<jsp:useBean id="s" class="mba.dbconnect"/>
<jsp:getProperty name="s" property="conn"/>

	<%

	String old=request.getParameter("old_pwd");
	String pnew=request.getParameter("new_pwd");
	String pconf=request.getParameter("con_pwd");

	String uname=session.getAttribute("uname").toString();

	ResultSet rs=s.stmt.executeQuery("select * from  login where username='"+uname+"' and password='"+old+"'");
	if(rs.next())
	{

		if(pnew.equals(pconf))
		{
			int k=s.stmt.executeUpdate("update Login set password='"+pnew+"' where  username='"+uname+"'");
%>

<script>
		alert("password is Changed");
		document.location="home.jsp";
</script>

<%
		}
		else
		{
%>

<script>
		alert("Check Conf password miss match");
		history.back();
</script>

<%
		}
		}
		else
		{
%>

<script>
		alert("Old password miss match");
		history.back();
</script>

<%
	}

%>