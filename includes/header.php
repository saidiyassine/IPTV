
<header id="header" class="header"> 
    <div class="navbar navbar-light">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand mr-3" href="/iptv/index.php">
                <img src="/iptv/assets/img/logo.png" alt="TiVistation" class="logo-img">
            </a>

            <!-- Search Form -->
            <form method="post" action="/iptv/index.php" class="form-inline ml-auto">
                <div class="input-group search d-none d-xl-flex">
                    <div class="input-group-prepend">
                        <button class="btn btn-default" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                    <input class="form-control appended-form-control font-weight-light" type="text" name="search" placeholder="Search channels...">
                </div>
            </form>

            <!-- Toolbar -->
            <ul class="navbar-nav toolbar">
                <li class="nav-item ml-3">
                    <a class="btn nav-link cart-btn" href="/iptv/pages/channel.php">
                        <i class="far fa-tv fa-fw"></i>
                        <span class="badge badge-info">0</span>
                        <span class="sr-only">Channels</span>
                    </a>
                </li>
                <li class="nav-item ml-3 d-xl-none">
                    <button class="btn nav-link" type="button" data-toggle="collapse" data-target="#mainNavbar">
                        <span class="fas fa-bars fa-fw"></span>
                    </button>
                </li>
            </ul>
        </div>
    </div>

    <!-- Main Navigation -->
    <div class="navbar navbar-expand-xl main-navbar-wrapper">
        <div class="container">
            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul id="nav" class="navbar-nav mr-auto">

                    <!-- Home -->
                    <li menuItemName="Home" class="d-block no-collapse" id="Primary_Navbar-Home">
                        <a class="pr-4" href="/iptv/index.php">Home</a>
                    </li>

                    <!-- Channels -->
                    <li menuItemName="Channels" class="d-block" id="Primary_Navbar-Channels">
                        <a class="pr-4" href="/iptv/pages/channel.php">Channels</a>
                    </li>

                    <!-- Dashboard -->
                    <li menuItemName="Dashboard" class="d-block" id="Primary_Navbar-Dashboard">
                        <a class="pr-4" href="/iptv/pages/dashboard.php">Dashboard</a>
                    </li>

                    <!-- Announcements -->
                    <li menuItemName="Announcements" class="d-block" id="Primary_Navbar-Announcements">
                        <a class="pr-4" href="/iptv/pages/announcements.php">Announcements</a>
                    </li>

                    <!-- Contact Us -->
                    <li menuItemName="Contact Us" class="d-block" id="Primary_Navbar-Contact_Us">
                        <a class="pr-4" href="/iptv/pages/contactUs.php">Contact Us</a>
                    </li>
                </ul>

                <!-- Account Dropdown -->
                <ul class="navbar-nav ml-auto">
                    <li menuItemName="Account" class="d-block dropdown no-collapse" id="Secondary_Navbar-Account">
                        <a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
                            Account
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li menuItemName="Login" class="dropdown-item" id="Secondary_Navbar-Account-Login">
                                <a href="/iptv/pages/login.php" class="dropdown-item px-2 py-0">Login</a>
                            </li>
                            <li menuItemName="Register" class="dropdown-item" id="Secondary_Navbar-Account-Register">
                                <a href="/iptv/pages/register.php" class="dropdown-item px-2 py-0">Register</a>
                            </li>
                            <div class="dropdown-divider"></div>
                            <li menuItemName="Forgot Password?" class="dropdown-item" id="Secondary_Navbar-Account-Forgot_Password">
                                <a href="/iptv/pages/resetPassword.php" class="dropdown-item px-2 py-0">Forgot Password?</a>
                            </li>
                            <li menuItemName="Logout" class="dropdown-item" id="Secondary_Navbar-Account-Logout">
                                <a href="/iptv/pages/login.php" class="dropdown-item px-2 py-0">Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>
        </div>
    </div>
</header>
