<%@page import="java.sql.*"%>
<%@page import="mba.dbconnect"%>
<jsp:useBean id="s" class="mba.dbconnect"/>
<jsp:getProperty name="s" property="conn"/>
<%
String pur_master_id=request.getParameter("pur_master_id");
String pur_date=request.getParameter("pur_date");
String sup_id=request.getParameter("sup_id");
int k=s.stmt.executeUpdate("update purchasemaster set pur_date='"+pur_date+"',sup_id="+sup_id+" where pur_master_id="+pur_master_id+"");
%>
<script>
alert("updated");
document.location="purchasemaster_view.jsp";
</script>
