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
                <h1><a class="navbar-brand" href="#"><span class="fa fa-area-chart"></span> COMPANY<span class="dashboard_text">Directory</span></a></h1>
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
                            <a href="createadmin">
                                <i class="fa fa-book"></i> <span>Create Other Admin</span>
                            </a>
                        </li>
                        
                        <li class="treeview">
                            <a href="addmanagedept">
                                <i class="fa fa-book"></i> <span>Add | Manage Department</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="addmanageemployee">
                                <i class="fa fa-book"></i> <span> Add | Manage Employee</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="searchemployee">
                                <i class="fa  fa-book"></i> <span>Search Employee</span>
                            </a>
                        </li>

                        <li class="treeview">
                            <a href="addmanagelocation">
                                <i class="fa fa-user"></i> <span>Add | Manage Location</span>
                            </a>
                        </li>
                          <?php
                    } elseif ($role == "finance") {
                        ?>
                            <li class="treeview">
                            <a href="index">
                                <i class="fa fa-dashboard"></i> <span>Home</span>
                            </a>
                        </li>
                        
                        
                        <li class="treeview">
                            <a href="addmanagepayroll">
                                <i class="fa fa-book"></i> <span>Add | Manage Payroll</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="searchemployee">
                                <i class="fa  fa-book"></i> <span>Search Employee</span>
                            </a>
                        </li>
                        <?php
                    } elseif ($role == "user") {
                        ?>
                        <li class="treeview">
                            <a href="home">
                                <i class="fa fa-dashboard"></i> <span>Home</span>
                            </a>
                        </li>  
                        <li class="treeview">
                            <a href="profile">
                                <i class="fa  fa-book"></i> <span>View Profile</span>
                            </a>
                        </li> 
                        <li class="treeview">
                            <a href="searchemployee">
                                <i class="fa  fa-book"></i> <span>Search Employee</span>
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