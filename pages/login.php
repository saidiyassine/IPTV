<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="noindex,nofollow"/>
    <title>Login - TiVistation</title>

    <!-- Google Fonts Open Sans -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- FontAwesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Styling -->
    <link href="../assets/css/login/theme.min.css?v=2ecd99" rel="stylesheet">
    <link href="../assets/css/login/custom.css" rel="stylesheet">

    <style>
        /* Si tu veux forcer l'utilisation de Open Sans */
        body {
            font-family: 'Open Sans', sans-serif;
        }
    </style>

    <!-- ChatShippo Script -->
    <script>
      (function(d,t) {
        var BASE_URL="https://app.chatshippo.com";
        var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
        g.src=BASE_URL+"/packs/js/sdk.js";
        g.defer = true;
        g.async = true;
        s.parentNode.insertBefore(g,s);
        g.onload=function(){
          window.chatshippoSDK.run({
            websiteToken: 'ZVxeSVsUHAsJYvXuK9Rr75Cj',
            baseUrl: BASE_URL
          })
        }
      })(document,"script");
    </script>

    <script>
        var csrfToken = '9371fbe0ea1c964eea94d3d065553cce65bf8367',
            markdownGuide = 'Markdown Guide',
            locale = 'en',
            saved = 'saved',
            saving = 'autosaving',
            whmcsBaseUrl = "/billing";
    </script>

    <script src="../assets/js/scripts.min.js?v=2ecd99"></script>

    <!-- Google Analytics -->
    <script>
        (function(i,s,o,g,r,a,m){
            i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();
            a=s.createElement(o), m=s.getElementsByTagName(o)[0];
            a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'G-ESC1W7JB0D', { cookieDomain: 'worthystream.com' });
        ga('send', 'pageview');
    </script>
</head>
<body class="primary-bg-color" data-phone-cc-input="1">

    <header id="header" class="header">
        <div class="navbar navbar-light">
            <div class="container">
                <a class="navbar-brand mr-3" href="/billing/index.php">
                    <img src="/billing/assets/img/logo.png" alt="TiVistation" class="logo-img">
                </a>
                <form method="post" action="/billing/index.php?rp=/knowledgebase/search" class="form-inline ml-auto">
                    <input type="hidden" name="token" value="9371fbe0ea1c964eea94d3d065553cce65bf8367" />
                    <div class="input-group search d-none d-xl-flex">
                        <div class="input-group-prepend">
                            <button class="btn btn-default" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                        <input class="form-control appended-form-control font-weight-light" type="text" name="search" placeholder="Search our knowledgebase...">
                    </div>
                </form>
                <ul class="navbar-nav toolbar">
                    <li class="nav-item ml-3">
                        <a class="btn nav-link cart-btn" href="cart.php?a=view">
                            <i class="fas fa-shopping-cart"></i>
                            <span class="badge badge-info">0</span>
                            <span class="sr-only">Shopping Cart</span>
                        </a>
                    </li>
                    <li class="nav-item ml-3 d-xl-none">
                        <button class="btn nav-link" type="button" data-toggle="collapse" data-target="#mainNavbar">
                            <span class="fas fa-bars"></span>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
        <div class="navbar navbar-expand-xl main-navbar-wrapper">
            <div class="container">
                <div class="collapse navbar-collapse" id="mainNavbar">
                    <form method="post" action="/billing/index.php?rp=/knowledgebase/search" class="d-xl-none">
                        <input type="hidden" name="token" value="9371fbe0ea1c964eea94d3d065553cce65bf8367" />
                        <div class="input-group search w-100 mb-2">
                            <div class="input-group-prepend">
                                <button class="btn btn-default" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                            <input class="form-control prepended-form-control" type="text" name="search" placeholder="Search our knowledgebase...">
                        </div>
                    </form>
                    <ul id="nav" class="navbar-nav mr-auto">
                        <li class="d-block no-collapse">
                            <a class="pr-4" href="/billing/index.php">Home</a>
                        </li>
                        <li class="d-block dropdown no-collapse">
                            <a class="pr-4 dropdown-toggle" data-toggle="dropdown" href="#">Buy a service</a>
                            <ul class="dropdown-menu">
                                <li><a href="/billing/index.php?rp=/store" class="dropdown-item px-2 py-0">Browse All</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a href="/billing/index.php?rp=/store/trial" class="dropdown-item px-2 py-0">Trial</a></li>
                                <li><a href="/billing/index.php?rp=/store/monthly" class="dropdown-item px-2 py-0">Monthly</a></li>
                                <li><a href="/billing/index.php?rp=/store/yearly" class="dropdown-item px-2 py-0">Yearly</a></li>
                                <li><a href="/billing/index.php?rp=/store/lifetime" class="dropdown-item px-2 py-0">Lifetime</a></li>
                            </ul>
                        </li>
                        <li class="d-block"><a class="pr-4" href="/billing/index.php?rp=/announcements">Announcements</a></li>
                        <li class="d-block"><a class="pr-4" href="/billing/affiliates.php">Affiliates</a></li>
                        <li class="d-block"><a class="pr-4" href="/billing/contact.php">Contact Us</a></li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                    <li class="d-block dropdown no-collapse">
                        <a class="pr-4 dropdown-toggle" data-toggle="dropdown" href="#">Account</a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="http://localhost/IPTVProject/pages/login.php" class="dropdown-item px-2 py-0">Login</a></li>
                            <li><a href="http://localhost/IPTVProject/pages/register.php" class="dropdown-item px-2 py-0">Register</a></li>
                            <div class="dropdown-divider"></div>
                            <li><a href="http://localhost/IPTVProject/pages/password-reset.php" class="dropdown-item px-2 py-0">Forgot Password?</a></li>
                        </ul>
                    </li>

                    </ul>
                </div>
            </div>
        </div>
    </header>

    <section id="main-body">
        <div class="container">
            <div class="row">
                <div class="col-12 primary-content">
                    <form method="post" action="/billing/index.php?rp=/login" class="login-form" role="form">
                        <input type="hidden" name="token" value="9371fbe0ea1c964eea94d3d065553cce65bf8367" />
                        <div class="card mw-540 mb-md-4 mt-md-4">
                            <div class="card-body px-sm-5 py-5">
                                <div class="mb-4">
                                    <h6 class="h3">Login</h6>
                                    <p class="text-muted mb-0">Sign in to your account to continue.</p>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail" class="form-control-label">Email Address</label>
                                    <div class="input-group input-group-merge">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                                        </div>
                                        <input type="email" class="form-control" name="username" id="inputEmail" placeholder="name@example.com" autofocus>
                                    </div>
                                </div>
                                <div class="form-group mb-4 focused">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <label for="inputPassword" class="form-control-label">Password</label>
                                        <div class="mb-2">
                                            <a href="/billing/index.php?rp=/password/reset" class="small text-muted">Forgot Password?</a>
                                        </div>
                                    </div>
                                    <div class="input-group input-group-merge">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                                        </div>
                                        <input type="password" class="form-control pw-input" name="password" id="inputPassword" placeholder="Password" autocomplete="off">
                                        <div class="input-group-append">
                                            <button class="btn btn-default btn-reveal-pw" type="button">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="float-left">
                                    <button id="login" type="submit" class="btn btn-primary">Login</button>
                                </div>
                                <div class="text-right">
                                    <label>
                                        <input type="checkbox" class="form-check-input" name="rememberme" /> Remember Me
                                    </label>
                                </div>
                            </div>
                            <div class="card-footer px-md-5">
                                <small>userLogin.notRegistered</small>
                                <a href="/billing/register.php" class="small font-weight-bold">Create account</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer id="footer" class="footer">
        <div class="container">
            <p class="copyright mb-0">
                 TiVistation, Inc.
            </p>
        </div>
    </footer>
<!-- jQuery (Bootstrap 4 dépend de jQuery) -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-o88Awj0UN0xVh2k6FZgfJQyXgnM4aF2X1p6a8Jp2ROw=" crossorigin="anonymous"></script>

<!-- Popper.js (nécessaire pour les dropdowns) -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-w77JW4y4K0hg7UwlKJrT2/HKKgUJyXk2sQgS1vH6U/tP6L+kfqxw5DqFjFuXnOJc" crossorigin="anonymous"></script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-IhwG3UfRqqmqY6W7U0sVqg3UuI23ajmA2mYZ4t3N7kKkeUGqFZoPt2FN5p7Tf4jv" crossorigin="anonymous"></script>

</body>
</html>
