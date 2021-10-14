<jsp:include page="meta_tags.jsp"></jsp:include>

<jsp:include page="menus.jsp"></jsp:include>

    
  
   <jsp:include page="side_menu.jsp"></jsp:include>

    
    <div class="content">
        
    <div class="header">
            
            <h1 class="page-title">Employe Details </h1>
    </div>
        
                <div class="container-fluid">
            <div class="row-fluid">
                  
<div class="well">
    
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane active in" id="home">

<jsp:include page="val.jsp"></jsp:include>

<jsp:include page="val.jsp"></jsp:include>   
	<%@page import="java.sql.*"%>
<%@page import="mba.dbconnect"%>
<jsp:useBean id="s" class="mba.dbconnect"/>
<jsp:getProperty name="s" property="conn"/>
<body>

<form name="form1" method="post" action="employees_insert.jsp" id="formID">
  <table class="table table-striped">
    <tr>
      <td colspan="2"><div align="center">Employe Details </div></td>
    </tr>
    <tr>
      <td width="194">Employe Name</td>
      <td width="144"><input name="emp_name" type="text" id="emp_name" class="validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>Address</td>
      <td><textarea name="address" id="address"  class="validate[required]"></textarea></td>
    </tr>
    <tr>
      <td>Empolye Phone Number</td>
      <td><input name="emp_phone" type="text" id="emp_phone" class="validate[required,custom[mobile]]"></td>
    </tr>
    <tr>
      <td>Gender</td>
      <td><input name="gender" type="radio" value="male" id="male" class="validate[required]" >
        male 
        <input name="gender" type="radio" value="female" id="female"  class="validate[required]">
        female</td>
    </tr>
    <tr>
      <td>Suplier Id </td>
      <td><select name="sup_id" id="sup_id" class="validate[required,custom[onlyNumber]]">
        <option value="select">select</option>
		<%
ResultSet rs=s.stmt.executeQuery("select * from suppliers");
while(rs.next())
{
int id=rs.getInt("sup_id");
%>
<option value="<%=id%>"><%=rs.getString("sup_name")%></option>
<%
}
%>
      </select></td>
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
