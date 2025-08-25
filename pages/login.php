<?php
// Include the head section
include_once '../includes/head.php';
?>

<body class="primary-bg-color" data-phone-cc-input="1">

<?php
// Include the header
include_once '../includes/header.php';
?>

    <section id="main-body">
        <div class="container">
            <div class="row">
                <div class="col-12 primary-content">
                    <form method="post" action="/iptv/pages/login.php" class="login-form" role="form">
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
                                            <a href="/iptv/pages/resetPassword.php" class="small text-muted">Forgot Password?</a>
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
                                <a href="/iptv/pages/register.php" class="small font-weight-bold">Create account</a>
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
