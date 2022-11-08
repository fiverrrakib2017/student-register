<header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-collapse">
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <li class="nav-item "> <a class="nav-link nav-toggler  hidden-md-up  waves-effect waves-dark" href="javascript:void(0)"><i class="fas  fa-bars"></i></a></li>
                        <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="fas fa-bars"></i></a> </li> 
                     <li class="nav-item mt-3">Welcome Dashboard</li>
                    </ul>
                    <ul class="navbar-nav my-lg-0">
                        <li class="nav-item ml-2"><i class="fas fa-user-circle" style="color:blue;"></i>&nbsp;&nbsp;

                            <?php if (isset($_SESSION['village_project_username'])) {
                                echo $_SESSION['village_project_username'];
                            } ?>

                        </li>
                    </ul>
                     <ul class="navbar-nav my-lg-0">
                        <li class="nav-item ml-2"></li>
                    </ul>
                    <ul class="navbar-nav my-lg-0">
                        <li class="nav-item ml-2"></li>
                    </ul>
                    <ul class="navbar-nav my-lg-0">
                        <li class="nav-item"><a href="logout.php" class="btn btn-sm btn-danger">Logout</a></li>
                    </ul>
                </div>
            </nav>
        </header>