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
            <li class="breadcrumb-item active" aria-current="page">
                        Shopping Cart
                    </li>
    </ol>
        </div>
    </nav>

    
    
    <section id="main-body">
        <div class="container">
            <div class="row">

                        <div class="col-12 primary-content">


<link rel="stylesheet" type="text/css" href="../assets/css/cart/all.min.css" />
<script type="text/javascript" src="../assets/js/cart/scripts.min.js?v=2ecd99"></script>
<div id="order-standard_cart">
    <div class="row">
        <div class="cart-sidebar sidebar">
                <div menuItemName="Categories" class="panel card card-sidebar mb-3 panel-sidebar">
        <div class="panel-heading card-header">
            <h3 class="panel-title">
                                    <i class="fas fa-shopping-cart"></i>&nbsp;
                
                Categories

                
                <i class="fas fa-chevron-up card-minimise panel-minimise pull-right float-right"></i>
            </h3>
        </div>

        
                    <div class="list-group collapsable-card-body">
                                                            <a menuItemName="Trial" href="trial.php" class="list-group-item list-group-item-action active" id="Secondary_Sidebar-Categories-Trial">
                            
                            Trial

                                                    </a>
                                                                                <a menuItemName="Monthly" href="monthly.php" class="list-group-item list-group-item-action" id="Secondary_Sidebar-Categories-Monthly">
                            
                            Monthly

                                                    </a>
                                                                                <a menuItemName="Yearly" href="yearly.php" class="list-group-item list-group-item-action" id="Secondary_Sidebar-Categories-Yearly">
                            
                            Yearly

                                                    </a>
                                                                                <a menuItemName="Lifetime" href="lifetime.php" class="list-group-item list-group-item-action" id="Secondary_Sidebar-Categories-Lifetime">
                            
                            Lifetime

                                                    </a>
                                                </div>
        
            </div>

        <div menuItemName="Actions" class="panel card card-sidebar mb-3 panel-sidebar">
        <div class="panel-heading card-header">
            <h3 class="panel-title">
                                    <i class="fas fa-plus"></i>&nbsp;
                
                Actions

                
                <i class="fas fa-chevron-up card-minimise panel-minimise pull-right float-right"></i>
            </h3>
        </div>

        
                    <div class="list-group collapsable-card-body">
                                                            <a menuItemName="View Cart" href="view_cart.php" class="list-group-item list-group-item-action" id="Secondary_Sidebar-Actions-View_Cart">
                                                            <i class="fas fa-shopping-cart fa-fw"></i>&nbsp;
                            
                            View Cart

                                                    </a>
                                                </div>
        
            </div>

            </div>
        <div class="cart-body">

            <div class="header-lined">
                <h1 class="font-size-36">
                                            Trial
                                    </h1>
                            </div>
            
            <div class="sidebar-collapsed">

            <div class="panel card panel-default">
                <div class="m-0 panel-heading card-header">
        <h3 class="panel-title">
                            <i class="fas fa-shopping-cart"></i>&nbsp;
            
            Categories

                    </h3>
    </div>

    <div class="panel-body card-body">
        <form role="form">
            <select class="form-control custom-select" onchange="selectChangeNavigate(this)">
                                                    <option menuItemName="Trial" value="/billing/index.php?rp=/store/trial" class="list-group-item" selected="selected">
                        Trial

                                            </option>
                                                                                                    <option menuItemName="Monthly" value="/billing/index.php?rp=/store/monthly" class="list-group-item" >
                        Monthly

                                            </option>
                                                        <option menuItemName="Yearly" value="/billing/index.php?rp=/store/yearly" class="list-group-item" >
                        Yearly

                                            </option>
                                                        <option menuItemName="Lifetime" value="/billing/index.php?rp=/store/lifetime" class="list-group-item" >
                        Lifetime

                                            </option>
                                                                </select>
        </form>
    </div>

            </div>
            <div class="panel card panel-default">
                <div class="m-0 panel-heading card-header">
        <h3 class="panel-title">
                            <i class="fas fa-plus"></i>&nbsp;
            
            Actions

                    </h3>
    </div>

    <div class="panel-body card-body">
        <form role="form">
            <select class="form-control custom-select" onchange="selectChangeNavigate(this)">
                                                    <option menuItemName="View Cart" value="/billing/cart.php?a=view" class="list-group-item" >
                        View Cart

                                            </option>
                                                                        <option value="" class="list-group-item" selected=""selected>- Choose Another Category -</option>
                            </select>
        </form>
    </div>

            </div>
    
    
</div>

            <div class="products" id="products">
                <div class="row row-eq-height">
                                                                <div class="col-md-6">
                        <div class="product clearfix" id="product5">
                            <header>
                                <span id="product5-name">ONE DAY FREE TRIAL</span>
                                                            </header>
                            <div class="product-desc">
                                                                    <p id="product5-description">
                                        23000+ TV Channels<br />
80000+ Movies<br />
14000+ TV-series<br />
500± Adult/Porn TV Channels<br />
4K, FHD, HD & SD Channels<br />
EPG - Electronic TV Guide<br />
AntiFreeze Technology<br />
99.99% Uptime<br />

                                    </p>
                                                                <ul>
                                                                    </ul>
                            </div>
                            <footer>
                                <div class="product-pricing" id="product5-price">
                                                                                                                    <span class="price">$0.00 USD</span>
                                        <br />
                                                                                <br>
                                                                                                            </div>
                                <a href="/billing/index.php?rp=/store/trial/one-day-free-trial" class="btn btn-success btn-sm btn-order-now" id="product5-order-button">
                                    <i class="fas fa-shopping-cart"></i>
                                    Order Now
                                </a>
                            </footer>
                        </div>
                    </div>
                                                                                    <div class="col-md-6">
                        <div class="product clearfix" id="product10">
                            <header>
                                <span id="product10-name">THIRTY DAYS TRIAL</span>
                                                            </header>
                            <div class="product-desc">
                                                                    <p id="product10-description">
                                        23000+ TV Channels<br />
80000+ Movies<br />
14000+ TV-series<br />
500± Adult/Porn TV Channels<br />
4K, FHD, HD & SD Channels<br />
EPG - Electronic TV Guide<br />
AntiFreeze Technology<br />
99.99% Uptime<br />

                                    </p>
                                                                <ul>
                                                                    </ul>
                            </div>
                            <footer>
                                <div class="product-pricing" id="product10-price">
                                                                                                                    <span class="price">$15.00 USD</span>
                                        <br />
                                                                                    Monthly
                                                                                <br>
                                                                                                            </div>
                                <a href="/billing/index.php?rp=/store/trial/thirty-days-trial" class="btn btn-success btn-sm btn-order-now" id="product10-order-button">
                                    <i class="fas fa-shopping-cart"></i>
                                    Order Now
                                </a>
                            </footer>
                        </div>
                    </div>
                                    </div>
                <div class="row row-eq-height">
                                                        </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="recommendationsModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="float-left pull-left">
                                            recommendations.title.addedTo
                                    </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="clearfix"></div>
            </div>
            <div class="modal-body">
                <div class="product-recommendations-container">
    <div class="product-recommendations">
                    <p>recommendations.explain.product</p>
                    </div>
</div>
            </div>
            <div class="modal-footer">
                <a class="btn btn-primary" href="#" id="btnContinueRecommendationsModal" data-dismiss="modal" role="button">
                    <span class="w-hidden hidden"><i class="fas fa-spinner fa-spin"></i>&nbsp;</span>Continue
                </a>
            </div>
        </div>
    </div>
    <div class="product-recommendation clonable w-hidden hidden">
        <div class="header">
            <div class="cta">
                <div class="price">
                    <span class="w-hidden hidden">FREE!</span>
                    <span class="breakdown-price"></span>
                    <span class="setup-fee"><small>&nbsp;Setup Fee</small></span>
                </div>
                <button type="button" class="btn btn-sm btn-add">
                    <span class="text">Add to Cart</span>
                    <span class="arrow"><i class="fas fa-chevron-right"></i></span>
                </button>
            </div>
            <div class="expander">
                <i class="fas fa-chevron-right rotate" data-toggle="tooltip" data-placement="right" title="recommendations.learnMore"></i>
            </div>
            <div class="content">
                <div class="headline truncate"></div>
                <div class="tagline truncate">
                    recommendations.taglinePlaceholder
                </div>
            </div>
        </div>
        <div class="body clearfix"><p></p></div>
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

    <form method="get" action="/billing/index.php?rp=%2Fstore%2Ftrial&">
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
