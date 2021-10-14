<%@page import="java.sql.*"%>
<%@page import="mba.dbconnect"%>
<jsp:useBean id="s" class="mba.dbconnect"/>
<jsp:getProperty name="s" property="conn"/>
<%
String pur_id=request.getParameter("pur_id");
String pur_master_id=request.getParameter("pur_master_id");
String pro_id=request.getParameter("pro_id");
String quantity=request.getParameter("quantity");
String rate=request.getParameter("rate");
String discount=request.getParameter("discount");
int k=s.stmt.executeUpdate("update purchasedetails  set pur_master_id="+pur_master_id+",pro_id="+pro_id+",quantity="+quantity+",rate="+rate+",discount="+discount+" where pur_id="+pur_id+"");
%>
<script>
alert("updated...");
document.location="purchasedetails_view.jsp";
</script>
