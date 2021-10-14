<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Sign-Up/Login Form</title>

  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body background="css/data-mining.jpg">

  <div class="form">
      
      <ul class="tab-group">
        
      </ul>
      
     
        
        <div id="login">   
          <h1>Login</h1>
          
          <form action="logcheck.php" method="post">
          
            <div class="field-wrap">
            <label>
             <span class="req"></span>
            </label>
            <input type="text" placeholder="User Name" name="username" required />
          </div>
          
          <div class="field-wrap">
            <label>
              <span class="req"></span>
            </label>
            <input type="password" placeholder="Password" required name="password" />
          </div>
          
        <!-- <p class="forgot"><a href="#">Forgot Password?</a></p>-->
          
          <button class="button button-block"/>Log In</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->


  

    <script  src="js/index.js"></script>




</body>

</html>
