
<!doctype html>
<html lang="en">

<body class="primary-bg-color" data-phone-cc-input="">

    

    <header id="header" class="header">
        
        <div class="navbar navbar-light">
            <div class="container">
                <a class="navbar-brand mr-3" href="/billing/index.php">
                                            <img src="/billing/assets/img/logo.png" alt="TiVistation" class="logo-img">
                                    </a>

                <form method="post" action="/billing/index.php?rp=/knowledgebase/search" class="form-inline ml-auto">
<input type="hidden" name="token" value="c61c02acc0bdde011a3a31d45da767ecef253582" />
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
                    <form method="post" action="/billing/index.php?rp=/knowledgebase/search" class="d-xl-none">
<input type="hidden" name="token" value="c61c02acc0bdde011a3a31d45da767ecef253582" />
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
                            <li menuItemName="Home" class="d-block no-collapse" id="Primary_Navbar-Home">
        <a class="pr-4" href="/billing/index.php">
                        Home
                    </a>
            </li>
    <li menuItemName="Store" class="d-block dropdown no-collapse" id="Primary_Navbar-Store">
        <a class="pr-4 dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
                        Buy a service
                    </a>
                    <ul class="dropdown-menu">
                                                <li menuItemName="Browse Products Services" class="dropdown-item" id="Primary_Navbar-Store-Browse_Products_Services">
                        <a href="/billing/index.php?rp=/store" class="dropdown-item px-2 py-0">
                                                        Browse All
                                                    </a>
                    </li>
                                                                <div class="dropdown-divider"></div>
                                                                <li menuItemName="Trial" class="dropdown-item" id="Primary_Navbar-Store-Trial">
                        <a href="/billing/index.php?rp=/store/trial" class="dropdown-item px-2 py-0">
                                                        Trial
                                                    </a>
                    </li>
                                                                <li menuItemName="Monthly" class="dropdown-item" id="Primary_Navbar-Store-Monthly">
                        <a href="/billing/index.php?rp=/store/monthly" class="dropdown-item px-2 py-0">
                                                        Monthly
                                                    </a>
                    </li>
                                                                <li menuItemName="Yearly" class="dropdown-item" id="Primary_Navbar-Store-Yearly">
                        <a href="/billing/index.php?rp=/store/yearly" class="dropdown-item px-2 py-0">
                                                        Yearly
                                                    </a>
                    </li>
                                                                <li menuItemName="Lifetime" class="dropdown-item" id="Primary_Navbar-Store-Lifetime">
                        <a href="/billing/index.php?rp=/store/lifetime" class="dropdown-item px-2 py-0">
                                                        Lifetime
                                                    </a>
                    </li>
                                        </ul>
            </li>
    <li menuItemName="Announcements" class="d-block" id="Primary_Navbar-Announcements">
        <a class="pr-4" href="/billing/index.php?rp=/announcements">
                        Announcements
                    </a>
            </li>
    <li menuItemName="Affiliates" class="d-block" id="Primary_Navbar-Affiliates">
        <a class="pr-4" href="/billing/affiliates.php">
                        Affiliates
                    </a>
            </li>
    <li menuItemName="Contact Us" class="d-block" id="Primary_Navbar-Contact_Us">
        <a class="pr-4" href="/billing/contact.php">
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
                        <a href="/billing/clientarea.php" class="dropdown-item px-2 py-0">
                                                        Login
                                                    </a>
                    </li>
                                                                <li menuItemName="Register" class="dropdown-item" id="Secondary_Navbar-Account-Register">
                        <a href="/billing/register.php" class="dropdown-item px-2 py-0">
                                                        Register
                                                    </a>
                    </li>
                                                                <div class="dropdown-divider"></div>
                                                                <li menuItemName="Forgot Password?" class="dropdown-item" id="Secondary_Navbar-Account-Forgot_Password?">
                        <a href="/billing/index.php?rp=/password/reset" class="dropdown-item px-2 py-0">
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

    
    <nav class="master-breadcrumb" aria-label="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
            <li class="breadcrumb-item">
            <a href="index.php">            Portal Home
            </a>        </li>
            <li class="breadcrumb-item">
            <a href="clientarea.php">            Client Area
            </a>        </li>
            <li class="breadcrumb-item">
            <a href="supporttickets.php">            Support Tickets
            </a>        </li>
            <li class="breadcrumb-item active" aria-current="page">
                        Submit Ticket
                    </li>
    </ol>
        </div>
    </nav>

    
    
    <section id="main-body">
        <div class="container">
            <div class="row">

                        <div class="col-12 primary-content">


<form method="post" action="/billing/submitticket.php?step=3" enctype="multipart/form-data" role="form">
<input type="hidden" name="token" value="c61c02acc0bdde011a3a31d45da767ecef253582" />

<div class="card">
    <div class="card-body extra-padding">

        <h3 class="card-title">Create new Support Request</h3>

        
        <div class="row">
            <div class="form-group col-md-4">
                <label for="inputName">Name</label>
                <input type="text" name="name" id="inputName" value="" class="form-control" />
            </div>
            <div class="form-group col-md-5">
                <label for="inputEmail">Email Address</label>
                <input type="email" name="email" id="inputEmail" value="" class="form-control" />
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-10">
                <label for="inputSubject">Subject</label>
                <input type="text" name="subject" id="inputSubject" value="" class="form-control" />
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-3">
                <label for="inputDepartment">Department</label>
                <select name="deptid" id="inputDepartment" class="form-control" onchange="refreshCustomFields(this)">
                                            <option value="3" selected="selected">
                            Pre-sales
                        </option>
                                    </select>
            </div>
                        <div class="form-group col-md-3">
                <label for="inputPriority">Priority</label>
                <select name="urgency" id="inputPriority" class="form-control">
                    <option value="High">
                        High
                    </option>
                    <option value="Medium" selected="selected">
                        Medium
                    </option>
                    <option value="Low">
                        Low
                    </option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="inputMessage">Message</label>
            <textarea name="message" id="inputMessage" rows="12" class="form-control markdown-editor" data-auto-save-name="client_ticket_open"></textarea>
        </div>

        <div class="form-group">
            <label for="inputAttachments">Attachments</label>
            <div class="input-group mb-1 attachment-group">
                <div class="custom-file">
                    <label class="custom-file-label text-truncate" for="inputAttachment1" data-default="Choose file">
                        Choose file
                    </label>
                    <input type="file" class="custom-file-input" name="attachments[]" id="inputAttachment1">
                </div>
                <div class="input-group-append">
                    <button class="btn btn-default" type="button" id="btnTicketAttachmentsAdd">
                        <i class="fas fa-plus"></i>
                        Add More
                    </button>
                </div>
            </div>
            <div class="file-upload w-hidden">
                <div class="input-group mb-1 attachment-group">
                    <div class="custom-file">
                        <label class="custom-file-label text-truncate">
                            Choose file
                        </label>
                        <input type="file" class="custom-file-input" name="attachments[]">
                    </div>
                </div>
            </div>
            <div id="fileUploadsContainer"></div>
            <div class="text-muted">
                <small>Allowed File Extensions: .jpg, .gif, .jpeg, .png, .txt, .pdf  (maxFileSize)</small>
            </div>
        </div>

        <div id="customFieldsContainer">
                    </div>

        <div id="autoAnswerSuggestions" class="w-hidden"></div>

        <div class="text-center margin-bottom">
                <div class="text-center row justify-content-center">
        
                    <div class="col-md-8 mx-auto mb-3 mb-sm-0">
                <div id="default-captcha-domainchecker" class="text-center row pb-3">
                    <p>Please enter the characters you see in the image below into the text box provided. This is required to prevent automated submissions.</p>

                    <div class="col-6 captchaimage">
                        <img id="inputCaptchaImage" data-src="https://tivistation.com/billing/includes/verifyimage.php" src="https://tivistation.com/billing/includes/verifyimage.php" align="middle" />
                    </div>

                    <div class="col-6">
                        <input id="inputCaptcha" type="text" name="code" maxlength="6" class="form-control "
                               data-toggle="tooltip" data-placement="right" data-trigger="manual" title="Required"/>
                    </div>
                </div>
            </div>
        
            </div>
        </div>

        <p class="text-center">
            <button type="submit" id="openTicketSubmit" class="btn btn-primary disable-on-click">
                Submit
            </button>
            <a href="supporttickets.php" class="btn btn-default">Cancel</a>
        </p>

    </div>
</div>

</form>

    <script>
        jQuery(document).ready(function() {
            getTicketSuggestions();
        });
    </script>


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

    <div id="fullpage-overlay" class="w-hidden">
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

    <form method="get" action="/billing/submitticket.php?step=2&deptid=3&">
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
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">
                        Close
                    </button>
                    <button type="button" class="btn btn-primary" id="btnGeneratePasswordInsert" data-clipboard-target="#inputGeneratePasswordOutput">
                        Copy to clipboard and Insert
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>

    

</body>
</html>
