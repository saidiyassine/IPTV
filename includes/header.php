<header id="header" class="header">
        
        <div class="navbar navbar-light">
            <div class="container">
                <a class="navbar-brand mr-3" href="/iptv/index.php">
                                            <img src="/iptv/assets/img/logo.png" alt="TiVistation" class="logo-img">
                                    </a>

                <form method="post" action="/iptv/index.php" class="form-inline ml-auto">
<input type="hidden" name="token" value="b2663083ccd0f92c8ad36ce92dbc9b2e976e3d1e" />
                    <div class="input-group search d-none d-xl-flex">
                        <div class="input-group-prepend">
                            <button class="btn btn-default" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                        <input class="form-control appended-form-control font-weight-light" type="text" name="search" placeholder="Search channels...">
                    </div>
                </form>

                <ul class="navbar-nav toolbar">
                    <li class="nav-item ml-3">
                        <a class="btn nav-link cart-btn" href="/iptv/pages/view_cart.php">
                            <i class="far fa-shopping-cart fa-fw"></i>
                            <span class="badge badge-info">0</span>
                            <span class="sr-only">Shopping Cart</span>
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
        <div class="navbar navbar-expand-xl main-navbar-wrapper">
            <div class="container">
                <div class="collapse navbar-collapse" id="mainNavbar">
                    <form method="post" action="/iptv/index.php" class="d-xl-none">
<input type="hidden" name="token" value="b2663083ccd0f92c8ad36ce92dbc9b2e976e3d1e" />
                        <div class="input-group search w-100 mb-2">
                            <div class="input-group-prepend">
                                <button class="btn btn-default" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                            <input class="form-control prepended-form-control" type="text" name="search" placeholder="Search channels...">
                        </div>
                    </form>
                    <ul id="nav" class="navbar-nav mr-auto">
                            <li menuItemName="Home" class="d-block no-collapse" id="Primary_Navbar-Home">
        <a class="pr-4" href="/iptv/index.php">
                        Home
                    </a>
            </li>
    <li menuItemName="Store" class="d-block dropdown no-collapse" id="Primary_Navbar-Store">
        <a class="pr-4 dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
                        Buy a service
                    </a>
                    <ul class="dropdown-menu">
                                                <li menuItemName="Browse Products Services" class="dropdown-item" id="Primary_Navbar-Store-Browse_Products_Services">
                        <a href="/iptv/index.php" class="dropdown-item px-2 py-0">
                                                        Browse All
                                                    </a>
                    </li>
                                                                <div class="dropdown-divider"></div>
                                                                <li menuItemName="Trial" class="dropdown-item" id="Primary_Navbar-Store-Trial">
                        <a href="/iptv/pages/trial.php" class="dropdown-item px-2 py-0">
                                                        Trial
                                                    </a>
                    </li>
                                                                <li menuItemName="Monthly" class="dropdown-item" id="Primary_Navbar-Store-Monthly">
                        <a href="/iptv/pages/monthly.php" class="dropdown-item px-2 py-0">
                                                        Monthly
                                                    </a>
                    </li>
                                                                <li menuItemName="Yearly" class="dropdown-item" id="Primary_Navbar-Store-Yearly">
                        <a href="/iptv/pages/yearly.php" class="dropdown-item px-2 py-0">
                                                        Yearly
                                                    </a>
                    </li>
                                                                <li menuItemName="Lifetime" class="dropdown-item" id="Primary_Navbar-Store-Lifetime">
                        <a href="/iptv/pages/lifetime.php" class="dropdown-item px-2 py-0">
                                                        Lifetime
                                                    </a>
                    </li>
                                        </ul>
            </li>
    <li menuItemName="Announcements" class="d-block" id="Primary_Navbar-Announcements">
        <a class="pr-4" href="/iptv/pages/announcements.php">
                        Announcements
                    </a>
            </li>
    <li menuItemName="Affiliates" class="d-block" id="Primary_Navbar-Affiliates">
        <a class="pr-4" href="/iptv/pages/contactUs.php">
                        Affiliates
                    </a>
            </li>
    <li menuItemName="Contact Us" class="d-block" id="Primary_Navbar-Contact_Us">
        <a class="pr-4" href="/iptv/pages/contactUs.php">
                        Contact Us
                    </a>
            </li>
    <li class="d-none dropdown collapsable-dropdown">
        <a class="dropdown-toggle" href="#" id="navbarDropdownMenu" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            More
        </a>
        <ul class="collapsable-dropdown-menu dropdown-menu" aria-labelledby="navbarDropdownMenu">
        </ul>
    </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                            <li menuItemName="Account" class="d-block no-collapse dropdown no-collapse" id="Secondary_Navbar-Account">
        <a class=" dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
                        Account
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right">
                                                <li menuItemName="Login" class="dropdown-item" id="Secondary_Navbar-Account-Login">
                        <a href="/iptv/pages/login.php" class="dropdown-item px-2 py-0">
                                                        Login
                                                    </a>
                    </li>
                                                                <li menuItemName="Register" class="dropdown-item" id="Secondary_Navbar-Account-Register">
                        <a href="/iptv/pages/register.php" class="dropdown-item px-2 py-0">
                                                        Register
                                                    </a>
                    </li>
                                                                <div class="dropdown-divider"></div>
                                                                <li menuItemName="Forgot Password?" class="dropdown-item" id="Secondary_Navbar-Account-Forgot_Password?">
                        <a href="/iptv/pages/resetPassword.php" class="dropdown-item px-2 py-0">
                                                        Forgot Password?
                                                    </a>
                    </li>
                                        </ul>
            </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
