 <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><i class="fa fa-gear"></i> <strong>MBA</strong></a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" href="Change_Password.php" aria-expanded="false">
                        <b class="btn btn-info">Change Password <i class="fa fa-key fa-fw"></i> </b>
                    </a>
                  
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
               
                    
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false" >
                       <b class="btn btn-warning"><?php echo $_SESSION['uname']; ?> <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i></b>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="suppliers_update.php"><i class="fa fa-user fa-fw"></i> My Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
						 <li class="divider"></li>
                        <li><a href="Change_Password.php"><i class="fa fa-sign-out fa-fw"></i> Change Password</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="../logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>