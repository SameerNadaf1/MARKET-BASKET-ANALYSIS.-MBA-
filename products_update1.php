<%@page import="java.sql.*"%>
<%@page import="mba.dbconnect"%>
<jsp:useBean id="s" class="mba.dbconnect"/>
<jsp:getProperty name="s" property="conn"/>
<%
String pro_id=request.getParameter("pro_id");
String pro_name=request.getParameter("pro_name");
String pro_price_purchase=request.getParameter("pro_price_purchase");
String pro_price_sales=request.getParameter("pro_price_sales");
String current_stock=request.getParameter("current_stock");
int k=s.stmt.executeUpdate("update products set pro_name='"+pro_name+"',pro_price_purchase='"+pro_price_purchase+"',pro_price_sales='"+pro_price_sales+"',current_stock='"+current_stock+"' where pro_id="+pro_id+"");
%>
<script>
alert("updated...");
document.location="products_view.jsp";
</script>