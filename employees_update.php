<jsp:include page="meta_tags.jsp"></jsp:include>

<jsp:include page="menus.jsp"></jsp:include>

    
  
   <jsp:include page="side_menu.jsp"></jsp:include>

    
    <div class="content">
        
    <div class="header">
            
            <h1 class="page-title">Employe deatils update </h1>
    </div>
        
                <div class="container-fluid">
            <div class="row-fluid">
                  
<div class="well">
    
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane active in" id="home">

<jsp:include page="val.jsp"></jsp:include>
<%@page import="java.sql.*"%>
<%@page import="mba.dbconnect"%>
<jsp:useBean id="s" class="mba.dbconnect"/>
<jsp:getProperty name="s" property="conn"/>
<%
String id=request.getParameter("id");
ResultSet rs=s.stmt.executeQuery("select * from employees where emp_id="+id+"");
rs.next();
%>

<form name="form1" method="post" action="employees_update1.jsp" id="formID">
<input type="hidden" value="<%=rs.getInt("emp_id")%>" name="emp_id"%>
<table class="table table-striped">
    <tr>
      <td colspan="2"><div align="center">Employe Details </div></td>
    </tr>
    <tr>
      <td width="194">Employe Name</td>
      <td width="144"><input name="emp_name" type="text" id="emp_name" value="<%=rs.getString("emp_name")%>" class="validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>Address</td>
      <td><input name="address" type="text" id="address" value="<%=rs.getString("address")%>" class="validate[required]"></td>
    </tr>
    <tr>
      <td>Empolye Phone Number</td>
      <td><input name="emp_phone" type="text" id="emp_phone" value="<%=rs.getString("emp_phone")%>" class="validate[required,custom[mobile]]"></td>
    </tr>
	<%
	String gender=rs.getString("gender");
	%>
    <tr>
      <td>Gender</td>
      <td><input name="gender" type="radio" value="male" id="male" <% if(gender.equals("male")) { %> checked <% } %>>
        male 
          <input name="gender" type="radio" value="female" id="female" <% if(gender.equals("female")) { %> checked <% } %>>
          female</td>
    </tr>
    <tr>
      <td>Suplier Id </td>
      <td><input name="sup_id" type="text" id="sup_id" value="<%=rs.getInt("sup_id")%>" class="validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="Submit" value="Submit" class="btn btn-primary">
      <input type="reset" name="Reset" value="Reset" class="btn btn-danger"></td>
    </tr>
  </table>
 </form>
</div>
  </div>

</div>

<div class="modal small hide fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
   
  </div>
  <div class="modal-body">
    

  </div>
 
</div>


<jsp:include page="footer.jsp"></jsp:include>
