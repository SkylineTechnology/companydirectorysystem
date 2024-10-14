<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
    <!--left-fixed -navigation-->
    <aside class="sidebar-left">
        <nav class="navbar navbar-inverse">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <h1><a class="navbar-brand" href="#"><span class="fa fa-area-chart"></span> CLOUD<span class="dashboard_text">Storage</span></a></h1>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="sidebar-menu">
                    <li class="header">MAIN NAVIGATION</li>

                    <?php
                    if ($role == "admin") {
                        ?>
                        <li class="treeview">
                            <a href="index">
                                <i class="fa fa-dashboard"></i> <span>Home</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="adddepartment">
                                <i class="fa fa-book"></i> <span> Add | Manage Departments</span>
                            </a>
                        </li>

                        <li class="treeview">
                            <a href="addmanageadmin">
                                <i class="fa fa-book"></i> <span>Add LECTURER</span>
                            </a>
                        </li>

                        <li class="treeview">
                            <a href="managequestion">
                                <i class="fa fa-user"></i> <span> View Questions</span>
                            </a>
                        </li>

                        <?php
                    } elseif ($role == "staff") {
                        ?>
                        <li class="treeview">
                            <a href="home">
                                <i class="fa fa-dashboard"></i> <span>Home</span>
                            </a>
                        </li>  
                        <li class="treeview">
                            <a href="addquestions">
                                <i class="fa  fa-book"></i> <span>Upload Questions</span>
                            </a>
                        </li> 
                        <li class="treeview">
                            <a href="managestudent">
                                <i class="fa  fa-book"></i> <span>Manage Question</span>
                            </a>
                        </li> 

                        <?php
                    }
                    ?>

                    <li class="treeview">
                        <a href="changepass">
                            <i class="fa fa-lock"></i> <span>Change Password</span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="logout">
                            <i class="fa fa-windows "></i> <span>Logout</span>
                        </a>
                    </li>



                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
    </aside>
</div>