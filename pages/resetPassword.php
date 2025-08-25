<?php
// Include the head section
include_once '../includes/head.php';
?>

<body class="primary-bg-color" data-phone-cc-input="1">

<?php
// Include the header
include_once '../includes/header.php';
?>

    
    <nav class="master-breadcrumb" aria-label="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
            <li class="breadcrumb-item">
            <a href="/billing/index.php">            Portal Home
            </a>        </li>
            <li class="breadcrumb-item">
            <a href="/billing/clientarea.php">            Client Area
            </a>        </li>
            <li class="breadcrumb-item active" aria-current="page">
                        Lost Password Reset
                    </li>
    </ol>
        </div>
    </nav>

    
    
    <section id="main-body">
        <div class="container">
            <div class="row">

                        <div class="col-12 primary-content">


<div class="row justify-content-center">
    <div class="card mw-540 mb-4 mt-4">
        <div class="card-body px-md-5 py-5">
                                                                        <div class="mb-4">
    <h6 class="h3">Lost Password Reset</h6>
    <p class="text-muted mb-0">Forgotten your password? Enter your email address below to begin the reset process.</p>
</div>


<form method="post" action="/billing/index.php?rp=/password/reset" role="form">
<input type="hidden" name="token" value="e18d40b72c4d45911db2c751c40892d88d11b571" />
    <input type="hidden" name="action" value="reset" />

    <div class="form-group">
        <label for="inputEmail">Email Address</label>
        <div class="input-group input-group-merge">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="email" class="form-control" name="email" id="inputEmail" placeholder="name@example.com" autofocus>
          </div>
    </div>

            <div class="text-center margin-bottom">
                    </div>
    
    <div class="form-group text-center">
        <button type="submit" class="btn btn-primary">
            Submit
        </button>
    </div>

</form>
                                                        </div>
    </div>
</div>


                    </div>

                    </div>
                                    <div class="clearfix"></div>
            </div>
        </div>
    </section>

    <footer id="footer" class="footer">
        <div class="container">
            <ul class="list-inline mb-7 text-center float-lg-right">
                
                            </ul>

            <!--------Footer Remove
            <ul class="nav justify-content-center justify-content-lg-start mb-7">
                <li class="nav-item">
                    <a class="nav-link" href="/billing/contact.php">
                        Contact Us
                    </a>
                </li>
                            </ul>
            --------------->

            <p class="copyright mb-0">
                 TiVistation, Inc..
            </p>
        </div>
    </footer>

    <div  class="w-hidden">
        <div class="outer-wrapper">
            <div class="inner-wrapper">
                <img src="/billing/assets/img/overlay-spinner.svg" alt="">
                <br>
                <span class="msg"></span>
            </div>
        </div>
    </div>

    <div class="modal system-modal fade" id="modalAjax" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"></h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                </div>
                <div class="modal-body">
                    Loading...
                </div>
                <div class="modal-footer">
                    <div class="float-left loader">
                        <i class="fas fa-circle-notch fa-spin"></i>
                        Loading...
                    </div>
                    <button type="button" class="btn btn-default" data-dismiss="modal">
                        Close
                    </button>
                    <button type="button" class="btn btn-primary modal-submit">
                        Submit
                    </button>
                </div>
            </div>
        </div>
    </div>

    <form method="get" action="/billing/index.php?rp=%2Fpassword%2Freset&">
        <div class="modal modal-localisation" id="modalChooseLanguage" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>

                                                                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-default">Apply</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    
    <form action="#" id="frmGeneratePassword">
    <div class="modal fade" id="modalGeneratePassword">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h4 class="modal-title">
                        Generate Password
                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-danger w-hidden" id="generatePwLengthError">
                        Please enter a number between 8 and 64 for the password length
                    </div>
                    <div class="form-group row">
                        <label for="generatePwLength" class="col-sm-4 col-form-label">Password Length</label>
                        <div class="col-sm-8">
                            <input type="number" min="8" max="64" value="12" step="1" class="form-control input-inline input-inline-100" id="inputGeneratePasswordLength">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="generatePwOutput" class="col-sm-4 col-form-label">Generated Password</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputGeneratePasswordOutput">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-8 offset-sm-4">
                            <button type="submit" class="btn btn-default btn-sm">
                                <i class="fas fa-plus fa-fw"></i>
                                Generate new password
                            </button>
                            <button type="button" class="btn btn-default btn-sm copy-to-clipboard" data-clipboard-target="#inputGeneratePasswordOutput">
                                <img src="/billing/assets/img/clippy.svg" alt="Copy to clipboard" width="15">
                                copy
                            </button>
                        </div>
                    </div>
                </div>
              
            </div>
        </div>
    </div>
</form>

    

</body>
</html>
