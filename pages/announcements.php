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
            <a href="/iptv/index.php">            Portal Home
            </a>        </li>
            <li class="breadcrumb-item">
            <a href="/iptv/pages/announcements.php">            Announcements
            </a>        </li>
            <li class="breadcrumb-item active" aria-current="page">
                        Aug 2025
                    </li>
    </ol>
        </div>
    </nav>

    
    
    <section id="main-body">
        <div class="container">
            <div class="row">

                            <div class="col-lg-4 col-xl-3">
                    <div class="sidebar">
                            <div menuItemName="Announcements Months" class="mb-3 card card-sidebar d-none d-md-block">
        <div class="card-header">
            <h3 class="card-title m-0">
                <i class="fas fa-calendar-alt"></i>&nbsp;                By Month
                                <i class="fas fa-chevron-up card-minimise float-right"></i>
            </h3>
        </div>
        <div class="collapsable-card-body">
                                        <div class="list-group list-group-flush d-md-flex" role="tablist">
                                                                        <a menuItemName="Older"
                               href="/iptv/pages/announcements.php?view=older"
                               class="list-group-item list-group-item-action"
                                                                                                                                                           id="Primary_Sidebar-Announcements_Months-Older"
                            >
                                <div class="sidebar-menu-item-wrapper">
                                                                        <div class="sidebar-menu-item-label">
                                        Older Announcements...
                                    </div>
                                                                    </div>
                            </a>
                                                                                                <a menuItemName="RSS Feed"
                               href="/iptv/pages/announcements.php?rss=1"
                               class="list-group-item list-group-item-action"
                                                                                                                                                           id="Primary_Sidebar-Announcements_Months-RSS_Feed"
                            >
                                <div class="sidebar-menu-item-wrapper">
                                                                            <div class="sidebar-menu-item-icon-wrapper">
                                                                                        <i class="fas fa-rss icon-rss sidebar-menu-item-icon"></i>
                                        </div>
                                                                        <div class="sidebar-menu-item-label">
                                        View RSS Feed
                                    </div>
                                                                    </div>
                            </a>
                                                            </div>
                    </div>
            </div>
                    <div class="card d-block d-md-none bg-light">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="fas fa-calendar-alt"></i>&nbsp;                    By Month
                                    </h3>
            </div>
            <div class="card-body">
                <form role="form">
                    <select class="form-control" onchange="selectChangeNavigate(this)">
                                                    <option menuItemName="Older" value="/iptv/pages/announcements.php?view=older" class="list-group-item list-group-item-action" >
                                Older Announcements...
                                                            </option>
                                                    <option menuItemName="RSS Feed" value="/iptv/pages/announcements.php?rss=1" class="list-group-item list-group-item-action" >
                                View RSS Feed
                                                            </option>
                                            </select>
                </form>
            </div>
                    </div>
                        </div>
                                            <div class="d-none d-lg-block sidebar">
                                <div menuItemName="Support" class="mb-3 card card-sidebar">
        <div class="card-header">
            <h3 class="card-title m-0">
                <i class="far fa-life-ring"></i>&nbsp;                Support
                                <i class="fas fa-chevron-up card-minimise float-right"></i>
            </h3>
        </div>
        <div class="collapsable-card-body">
                                        <div class="list-group list-group-flush d-md-flex" role="tablist">
                                                                        <a menuItemName="Support Tickets"
                               href="/iptv/pages/support.php"
                               class="list-group-item list-group-item-action"
                                                                                                                                                           id="Secondary_Sidebar-Support-Support_Tickets"
                            >
                                <div class="sidebar-menu-item-wrapper">
                                                                            <div class="sidebar-menu-item-icon-wrapper">
                                                                                        <i class="fas fa-ticket-alt fa-fw sidebar-menu-item-icon"></i>
                                        </div>
                                                                        <div class="sidebar-menu-item-label">
                                        My Support Tickets
                                    </div>
                                                                    </div>
                            </a>
                                                                                                <a menuItemName="Announcements"
                               href="/iptv/pages/announcements.php"
                               class="list-group-item list-group-item-action active"
                                                                                                                                                           id="Secondary_Sidebar-Support-Announcements"
                            >
                                <div class="sidebar-menu-item-wrapper">
                                                                            <div class="sidebar-menu-item-icon-wrapper">
                                                                                        <i class="fas fa-list fa-fw sidebar-menu-item-icon"></i>
                                        </div>
                                                                        <div class="sidebar-menu-item-label">
                                        Announcements
                                    </div>
                                                                    </div>
                            </a>
                                                                                                <a menuItemName="Open Ticket"
                               href="/iptv/pages/contactUs.php"
                               class="list-group-item list-group-item-action"
                                                                                                                                                           id="Secondary_Sidebar-Support-Open_Ticket"
                            >
                                <div class="sidebar-menu-item-wrapper">
                                                                            <div class="sidebar-menu-item-icon-wrapper">
                                                                                        <i class="fas fa-comments fa-fw sidebar-menu-item-icon"></i>
                                        </div>
                                                                        <div class="sidebar-menu-item-label">
                                        Open Ticket
                                    </div>
                                                                    </div>
                            </a>
                                                            </div>
                    </div>
            </div>
                            </div>
                                    </div>
                        <div class="col-lg-8 col-xl-9 primary-content">


<div class="card">
    <div class="card-body">
        <h3 class="card-title">Announcements</h3>

        <div class="announcements">
                            <div class="alert alert-info text-center">
        No announcements to display
</div>
                    </div>

    </div>
</div>




                    </div>

                    </div>
                                            <div class="d-lg-none sidebar sidebar-secondary">
                                <div menuItemName="Support" class="mb-3 card card-sidebar">
        <div class="card-header">
            <h3 class="card-title m-0">
                <i class="far fa-life-ring"></i>&nbsp;                Support
                                <i class="fas fa-chevron-up card-minimise float-right"></i>
            </h3>
        </div>
        <div class="collapsable-card-body">
                                        <div class="list-group list-group-flush d-md-flex" role="tablist">
                                                                        <a menuItemName="Support Tickets"
                               href="/iptv/pages/support.php"
                               class="list-group-item list-group-item-action"
                                                                                                                                                           id="Secondary_Sidebar-Support-Support_Tickets"
                            >
                                <div class="sidebar-menu-item-wrapper">
                                                                            <div class="sidebar-menu-item-icon-wrapper">
                                                                                        <i class="fas fa-ticket-alt fa-fw sidebar-menu-item-icon"></i>
                                        </div>
                                                                        <div class="sidebar-menu-item-label">
                                        My Support Tickets
                                    </div>
                                                                    </div>
                            </a>
                                                                                                <a menuItemName="Announcements"
                               href="/iptv/pages/announcements.php"
                               class="list-group-item list-group-item-action active"
                                                                                                                                                           id="Secondary_Sidebar-Support-Announcements"
                            >
                                <div class="sidebar-menu-item-wrapper">
                                                                            <div class="sidebar-menu-item-icon-wrapper">
                                                                                        <i class="fas fa-list fa-fw sidebar-menu-item-icon"></i>
                                        </div>
                                                                        <div class="sidebar-menu-item-label">
                                        Announcements
                                    </div>
                                                                    </div>
                            </a>
                                                                                                <a menuItemName="Open Ticket"
                               href="/iptv/pages/contactUs.php"
                               class="list-group-item list-group-item-action"
                                                                                                                                                           id="Secondary_Sidebar-Support-Open_Ticket"
                            >
                                <div class="sidebar-menu-item-wrapper">
                                                                            <div class="sidebar-menu-item-icon-wrapper">
                                                                                        <i class="fas fa-comments fa-fw sidebar-menu-item-icon"></i>
                                        </div>
                                                                        <div class="sidebar-menu-item-label">
                                        Open Ticket
                                    </div>
                                                                    </div>
                            </a>
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
                    <a class="nav-link" href="/iptv/pages/contactUs.php">
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
                <img src="/iptv/assets/img/overlay-spinner.svg" alt="">
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

    <form method="get" action="/iptv/pages/announcements.php">
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
                                <img src="/iptv/assets/img/clippy.svg" alt="Copy to clipboard" width="15">
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
