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



    <script>
        // Define state tab index value
        var statesTab = 10;
        var stateNotRequired = true;
    </script>
       <link rel="stylesheet" type="text/css" href="../assets/css/cart/all.min.css" />
       <script type="text/javascript" src="../assets/js/cart/scripts.min.js?v=2ecd99"></script>

    <div id="order-standard_cart">

        <div class="row">
            <div class="cart-sidebar">

                    <div menuItemName="Categories" class="panel card card-sidebar mb-3 panel-sidebar">
                    <div class="panel-heading card-header">
            <h3 class="panel-title">
                                    <i class="fas fa-shopping-cart"></i>&nbsp;
                
                Categories

                
                <i class="fas fa-chevron-up card-minimise panel-minimise pull-right float-right"></i>
            </h3>
        </div>

        
                    <div class="list-group collapsable-card-body">
                                                            <a menuItemName="Trial" href="/billing/index.php?rp=/store/trial" class="list-group-item list-group-item-action" id="Secondary_Sidebar-Categories-Trial">
                            
                            Trial

                                                    </a>
                                                                                <a menuItemName="Monthly" href="/billing/index.php?rp=/store/monthly" class="list-group-item list-group-item-action" id="Secondary_Sidebar-Categories-Monthly">
                            
                            Monthly

                                                    </a>
                                                                                <a menuItemName="Yearly" href="/billing/index.php?rp=/store/yearly" class="list-group-item list-group-item-action" id="Secondary_Sidebar-Categories-Yearly">
                            
                            Yearly

                                                    </a>
                                                                                <a menuItemName="Lifetime" href="/billing/index.php?rp=/store/lifetime" class="list-group-item list-group-item-action" id="Secondary_Sidebar-Categories-Lifetime">
                            
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
                                                            <a menuItemName="View Cart" href="/billing/cart.php?a=view" class="list-group-item list-group-item-action active" id="Secondary_Sidebar-Actions-View_Cart">
                                                            <i class="fas fa-shopping-cart fa-fw"></i>&nbsp;
                            
                            View Cart

                                                    </a>
                                                </div>
        
            </div>

    
            </div>
            <div class="cart-body">
                <div class="header-lined">
                    <h1 class="font-size-36">Review & Checkout</h1>
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
                                                    <option menuItemName="Trial" value="/billing/index.php?rp=/store/trial" class="list-group-item" >
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
                                                                        <option value="" class="list-group-item" selected=""selected>- Choose Another Category -</option>
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
                                                    <option menuItemName="View Cart" value="/billing/cart.php?a=view" class="list-group-item" selected="selected">
                        View Cart

                                            </option>
                                                                                                            </select>
        </form>
    </div>

            </div>
    
    
</div>

                <div class="row">
                    <div class="secondary-cart-body">

                        
                        
                        <form method="post" action="/billing/cart.php?a=view">
<input type="hidden" name="token" value="c61c02acc0bdde011a3a31d45da767ecef253582" />

                            <div class="view-cart-items-header">
                                <div class="row">
                                    <div class="col-sm-7 col-xs-7 col-7">
                                        Product/Options
                                    </div>
                                                                        <div class="col-sm-4 col-xs-5 col-5 text-right">
                                        Price/Cycle
                                    </div>
                                </div>
                            </div>
                            <div class="view-cart-items">

                                
                                
                                
                                
                                
                                
                                
                                                                    <div class="view-cart-empty">
                                        Your Shopping Cart is Empty
                                    </div>
                                
                            </div>

                            
                        </form>

                        
                        
                        <div class="view-cart-tabs">
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="nav-item active">
                                    <a href="#applyPromo" class="nav-link active" aria-controls="applyPromo" role="tab" data-toggle="tab" aria-selected="true">
                                        Apply Promo Code
                                    </a>
                                </li>
                                                            </ul>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active promo" id="applyPromo">
                                                                            <form method="post" action="/billing/cart.php?a=view">
<input type="hidden" name="token" value="c61c02acc0bdde011a3a31d45da767ecef253582" />
                                            <div class="form-group prepend-icon ">
                                                <label for="cardno" class="field-icon">
                                                    <i class="fas fa-ticket-alt"></i>
                                                </label>
                                                <input type="text" name="promocode" id="inputPromotionCode" class="field form-control" placeholder="Enter promo code if you have one" required="required">
                                            </div>
                                            <button type="submit" name="validatepromo" class="btn btn-block btn-default" value="Validate Code">
                                                Validate Code
                                            </button>
                                        </form>
                                                                    </div>
                                <div role="tabpanel" class="tab-pane" id="calcTaxes">

                                    <form method="post" action="/billing/cart.php?a=setstateandcountry">
<input type="hidden" name="token" value="c61c02acc0bdde011a3a31d45da767ecef253582" />
                                        <div class="form-group row">
                                            <label for="inputState" class="pt-sm-2 col-sm-4 control-label text-sm-right">State</label>
                                            <div class="col-sm-7">
                                                <input type="text" name="state" id="inputState" value="" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputCountry" class="pt-sm-2 col-sm-4 control-label text-sm-right">Country</label>
                                            <div class="col-sm-7">
                                                <select name="country" id="inputCountry" class="form-control">
                                                                                                            <option value="AF">
                                                            Afghanistan
                                                        </option>
                                                                                                            <option value="AX">
                                                            Aland Islands
                                                        </option>
                                                                                                            <option value="AL">
                                                            Albania
                                                        </option>
                                                                                                            <option value="DZ">
                                                            Algeria
                                                        </option>
                                                                                                            <option value="AS">
                                                            American Samoa
                                                        </option>
                                                                                                            <option value="AD">
                                                            Andorra
                                                        </option>
                                                                                                            <option value="AO">
                                                            Angola
                                                        </option>
                                                                                                            <option value="AI">
                                                            Anguilla
                                                        </option>
                                                                                                            <option value="AQ">
                                                            Antarctica
                                                        </option>
                                                                                                            <option value="AG">
                                                            Antigua And Barbuda
                                                        </option>
                                                                                                            <option value="AR">
                                                            Argentina
                                                        </option>
                                                                                                            <option value="AM">
                                                            Armenia
                                                        </option>
                                                                                                            <option value="AW">
                                                            Aruba
                                                        </option>
                                                                                                            <option value="AU">
                                                            Australia
                                                        </option>
                                                                                                            <option value="AT">
                                                            Austria
                                                        </option>
                                                                                                            <option value="AZ">
                                                            Azerbaijan
                                                        </option>
                                                                                                            <option value="BS">
                                                            Bahamas
                                                        </option>
                                                                                                            <option value="BH">
                                                            Bahrain
                                                        </option>
                                                                                                            <option value="BD">
                                                            Bangladesh
                                                        </option>
                                                                                                            <option value="BB">
                                                            Barbados
                                                        </option>
                                                                                                            <option value="BY">
                                                            Belarus
                                                        </option>
                                                                                                            <option value="BE">
                                                            Belgium
                                                        </option>
                                                                                                            <option value="BZ">
                                                            Belize
                                                        </option>
                                                                                                            <option value="BJ">
                                                            Benin
                                                        </option>
                                                                                                            <option value="BM">
                                                            Bermuda
                                                        </option>
                                                                                                            <option value="BT">
                                                            Bhutan
                                                        </option>
                                                                                                            <option value="BO">
                                                            Bolivia
                                                        </option>
                                                                                                            <option value="BA">
                                                            Bosnia And Herzegovina
                                                        </option>
                                                                                                            <option value="BW">
                                                            Botswana
                                                        </option>
                                                                                                            <option value="BR">
                                                            Brazil
                                                        </option>
                                                                                                            <option value="IO">
                                                            British Indian Ocean Territory
                                                        </option>
                                                                                                            <option value="BN">
                                                            Brunei Darussalam
                                                        </option>
                                                                                                            <option value="BG">
                                                            Bulgaria
                                                        </option>
                                                                                                            <option value="BF">
                                                            Burkina Faso
                                                        </option>
                                                                                                            <option value="BI">
                                                            Burundi
                                                        </option>
                                                                                                            <option value="KH">
                                                            Cambodia
                                                        </option>
                                                                                                            <option value="CM">
                                                            Cameroon
                                                        </option>
                                                                                                            <option value="CA">
                                                            Canada
                                                        </option>
                                                                                                            <option value="IC">
                                                            Canary Islands
                                                        </option>
                                                                                                            <option value="CV">
                                                            Cape Verde
                                                        </option>
                                                                                                            <option value="KY">
                                                            Cayman Islands
                                                        </option>
                                                                                                            <option value="CF">
                                                            Central African Republic
                                                        </option>
                                                                                                            <option value="TD">
                                                            Chad
                                                        </option>
                                                                                                            <option value="CL">
                                                            Chile
                                                        </option>
                                                                                                            <option value="CN">
                                                            China
                                                        </option>
                                                                                                            <option value="CX">
                                                            Christmas Island
                                                        </option>
                                                                                                            <option value="CC">
                                                            Cocos (Keeling) Islands
                                                        </option>
                                                                                                            <option value="CO">
                                                            Colombia
                                                        </option>
                                                                                                            <option value="KM">
                                                            Comoros
                                                        </option>
                                                                                                            <option value="CG">
                                                            Congo
                                                        </option>
                                                                                                            <option value="CD">
                                                            Congo, Democratic Republic
                                                        </option>
                                                                                                            <option value="CK">
                                                            Cook Islands
                                                        </option>
                                                                                                            <option value="CR">
                                                            Costa Rica
                                                        </option>
                                                                                                            <option value="CI">
                                                            Cote D'Ivoire
                                                        </option>
                                                                                                            <option value="HR">
                                                            Croatia
                                                        </option>
                                                                                                            <option value="CU">
                                                            Cuba
                                                        </option>
                                                                                                            <option value="CW">
                                                            Curacao
                                                        </option>
                                                                                                            <option value="CY">
                                                            Cyprus
                                                        </option>
                                                                                                            <option value="CZ">
                                                            Czech Republic
                                                        </option>
                                                                                                            <option value="DK">
                                                            Denmark
                                                        </option>
                                                                                                            <option value="DJ">
                                                            Djibouti
                                                        </option>
                                                                                                            <option value="DM">
                                                            Dominica
                                                        </option>
                                                                                                            <option value="DO">
                                                            Dominican Republic
                                                        </option>
                                                                                                            <option value="EC">
                                                            Ecuador
                                                        </option>
                                                                                                            <option value="EG">
                                                            Egypt
                                                        </option>
                                                                                                            <option value="SV">
                                                            El Salvador
                                                        </option>
                                                                                                            <option value="GQ">
                                                            Equatorial Guinea
                                                        </option>
                                                                                                            <option value="ER">
                                                            Eritrea
                                                        </option>
                                                                                                            <option value="EE">
                                                            Estonia
                                                        </option>
                                                                                                            <option value="ET">
                                                            Ethiopia
                                                        </option>
                                                                                                            <option value="FK">
                                                            Falkland Islands (Malvinas)
                                                        </option>
                                                                                                            <option value="FO">
                                                            Faroe Islands
                                                        </option>
                                                                                                            <option value="FJ">
                                                            Fiji
                                                        </option>
                                                                                                            <option value="FI">
                                                            Finland
                                                        </option>
                                                                                                            <option value="FR">
                                                            France
                                                        </option>
                                                                                                            <option value="GF">
                                                            French Guiana
                                                        </option>
                                                                                                            <option value="PF">
                                                            French Polynesia
                                                        </option>
                                                                                                            <option value="TF">
                                                            French Southern Territories
                                                        </option>
                                                                                                            <option value="GA">
                                                            Gabon
                                                        </option>
                                                                                                            <option value="GM">
                                                            Gambia
                                                        </option>
                                                                                                            <option value="GE">
                                                            Georgia
                                                        </option>
                                                                                                            <option value="DE">
                                                            Germany
                                                        </option>
                                                                                                            <option value="GH">
                                                            Ghana
                                                        </option>
                                                                                                            <option value="GI">
                                                            Gibraltar
                                                        </option>
                                                                                                            <option value="GR">
                                                            Greece
                                                        </option>
                                                                                                            <option value="GL">
                                                            Greenland
                                                        </option>
                                                                                                            <option value="GD">
                                                            Grenada
                                                        </option>
                                                                                                            <option value="GP">
                                                            Guadeloupe
                                                        </option>
                                                                                                            <option value="GU">
                                                            Guam
                                                        </option>
                                                                                                            <option value="GT">
                                                            Guatemala
                                                        </option>
                                                                                                            <option value="GG">
                                                            Guernsey
                                                        </option>
                                                                                                            <option value="GN">
                                                            Guinea
                                                        </option>
                                                                                                            <option value="GW">
                                                            Guinea-Bissau
                                                        </option>
                                                                                                            <option value="GY">
                                                            Guyana
                                                        </option>
                                                                                                            <option value="HT">
                                                            Haiti
                                                        </option>
                                                                                                            <option value="HM">
                                                            Heard Island & Mcdonald Islands
                                                        </option>
                                                                                                            <option value="VA">
                                                            Holy See (Vatican City State)
                                                        </option>
                                                                                                            <option value="HN">
                                                            Honduras
                                                        </option>
                                                                                                            <option value="HK">
                                                            Hong Kong
                                                        </option>
                                                                                                            <option value="HU">
                                                            Hungary
                                                        </option>
                                                                                                            <option value="IS">
                                                            Iceland
                                                        </option>
                                                                                                            <option value="IN">
                                                            India
                                                        </option>
                                                                                                            <option value="ID">
                                                            Indonesia
                                                        </option>
                                                                                                            <option value="IR">
                                                            Iran, Islamic Republic Of
                                                        </option>
                                                                                                            <option value="IQ">
                                                            Iraq
                                                        </option>
                                                                                                            <option value="IE">
                                                            Ireland
                                                        </option>
                                                                                                            <option value="IM">
                                                            Isle Of Man
                                                        </option>
                                                                                                            <option value="IL">
                                                            Israel
                                                        </option>
                                                                                                            <option value="IT">
                                                            Italy
                                                        </option>
                                                                                                            <option value="JM">
                                                            Jamaica
                                                        </option>
                                                                                                            <option value="JP">
                                                            Japan
                                                        </option>
                                                                                                            <option value="JE">
                                                            Jersey
                                                        </option>
                                                                                                            <option value="JO">
                                                            Jordan
                                                        </option>
                                                                                                            <option value="KZ">
                                                            Kazakhstan
                                                        </option>
                                                                                                            <option value="KE">
                                                            Kenya
                                                        </option>
                                                                                                            <option value="KI">
                                                            Kiribati
                                                        </option>
                                                                                                            <option value="KR">
                                                            Korea
                                                        </option>
                                                                                                            <option value="XK">
                                                            Kosovo
                                                        </option>
                                                                                                            <option value="KW">
                                                            Kuwait
                                                        </option>
                                                                                                            <option value="KG">
                                                            Kyrgyzstan
                                                        </option>
                                                                                                            <option value="LA">
                                                            Lao People's Democratic Republic
                                                        </option>
                                                                                                            <option value="LV">
                                                            Latvia
                                                        </option>
                                                                                                            <option value="LB">
                                                            Lebanon
                                                        </option>
                                                                                                            <option value="LS">
                                                            Lesotho
                                                        </option>
                                                                                                            <option value="LR">
                                                            Liberia
                                                        </option>
                                                                                                            <option value="LY">
                                                            Libyan Arab Jamahiriya
                                                        </option>
                                                                                                            <option value="LI">
                                                            Liechtenstein
                                                        </option>
                                                                                                            <option value="LT">
                                                            Lithuania
                                                        </option>
                                                                                                            <option value="LU">
                                                            Luxembourg
                                                        </option>
                                                                                                            <option value="MO">
                                                            Macao
                                                        </option>
                                                                                                            <option value="MK">
                                                            Macedonia
                                                        </option>
                                                                                                            <option value="MG">
                                                            Madagascar
                                                        </option>
                                                                                                            <option value="MW">
                                                            Malawi
                                                        </option>
                                                                                                            <option value="MY">
                                                            Malaysia
                                                        </option>
                                                                                                            <option value="MV">
                                                            Maldives
                                                        </option>
                                                                                                            <option value="ML">
                                                            Mali
                                                        </option>
                                                                                                            <option value="MT">
                                                            Malta
                                                        </option>
                                                                                                            <option value="MH">
                                                            Marshall Islands
                                                        </option>
                                                                                                            <option value="MQ">
                                                            Martinique
                                                        </option>
                                                                                                            <option value="MR">
                                                            Mauritania
                                                        </option>
                                                                                                            <option value="MU">
                                                            Mauritius
                                                        </option>
                                                                                                            <option value="YT">
                                                            Mayotte
                                                        </option>
                                                                                                            <option value="MX">
                                                            Mexico
                                                        </option>
                                                                                                            <option value="FM">
                                                            Micronesia, Federated States Of
                                                        </option>
                                                                                                            <option value="MD">
                                                            Moldova
                                                        </option>
                                                                                                            <option value="MC">
                                                            Monaco
                                                        </option>
                                                                                                            <option value="MN">
                                                            Mongolia
                                                        </option>
                                                                                                            <option value="ME">
                                                            Montenegro
                                                        </option>
                                                                                                            <option value="MS">
                                                            Montserrat
                                                        </option>
                                                                                                            <option value="MA">
                                                            Morocco
                                                        </option>
                                                                                                            <option value="MZ">
                                                            Mozambique
                                                        </option>
                                                                                                            <option value="MM">
                                                            Myanmar
                                                        </option>
                                                                                                            <option value="NA">
                                                            Namibia
                                                        </option>
                                                                                                            <option value="NR">
                                                            Nauru
                                                        </option>
                                                                                                            <option value="NP">
                                                            Nepal
                                                        </option>
                                                                                                            <option value="NL">
                                                            Netherlands
                                                        </option>
                                                                                                            <option value="AN">
                                                            Netherlands Antilles
                                                        </option>
                                                                                                            <option value="NC">
                                                            New Caledonia
                                                        </option>
                                                                                                            <option value="NZ">
                                                            New Zealand
                                                        </option>
                                                                                                            <option value="NI">
                                                            Nicaragua
                                                        </option>
                                                                                                            <option value="NE">
                                                            Niger
                                                        </option>
                                                                                                            <option value="NG">
                                                            Nigeria
                                                        </option>
                                                                                                            <option value="NU">
                                                            Niue
                                                        </option>
                                                                                                            <option value="NF">
                                                            Norfolk Island
                                                        </option>
                                                                                                            <option value="MP">
                                                            Northern Mariana Islands
                                                        </option>
                                                                                                            <option value="NO">
                                                            Norway
                                                        </option>
                                                                                                            <option value="OM">
                                                            Oman
                                                        </option>
                                                                                                            <option value="PK">
                                                            Pakistan
                                                        </option>
                                                                                                            <option value="PW">
                                                            Palau
                                                        </option>
                                                                                                            <option value="PS">
                                                            Palestine, State of
                                                        </option>
                                                                                                            <option value="PA">
                                                            Panama
                                                        </option>
                                                                                                            <option value="PG">
                                                            Papua New Guinea
                                                        </option>
                                                                                                            <option value="PY">
                                                            Paraguay
                                                        </option>
                                                                                                            <option value="PE">
                                                            Peru
                                                        </option>
                                                                                                            <option value="PH">
                                                            Philippines
                                                        </option>
                                                                                                            <option value="PN">
                                                            Pitcairn
                                                        </option>
                                                                                                            <option value="PL">
                                                            Poland
                                                        </option>
                                                                                                            <option value="PT">
                                                            Portugal
                                                        </option>
                                                                                                            <option value="PR">
                                                            Puerto Rico
                                                        </option>
                                                                                                            <option value="QA">
                                                            Qatar
                                                        </option>
                                                                                                            <option value="RE">
                                                            Reunion
                                                        </option>
                                                                                                            <option value="RO">
                                                            Romania
                                                        </option>
                                                                                                            <option value="RU">
                                                            Russian Federation
                                                        </option>
                                                                                                            <option value="RW">
                                                            Rwanda
                                                        </option>
                                                                                                            <option value="BL">
                                                            Saint Barthelemy
                                                        </option>
                                                                                                            <option value="SH">
                                                            Saint Helena
                                                        </option>
                                                                                                            <option value="KN">
                                                            Saint Kitts And Nevis
                                                        </option>
                                                                                                            <option value="LC">
                                                            Saint Lucia
                                                        </option>
                                                                                                            <option value="MF">
                                                            Saint Martin
                                                        </option>
                                                                                                            <option value="PM">
                                                            Saint Pierre And Miquelon
                                                        </option>
                                                                                                            <option value="VC">
                                                            Saint Vincent And Grenadines
                                                        </option>
                                                                                                            <option value="WS">
                                                            Samoa
                                                        </option>
                                                                                                            <option value="SM">
                                                            San Marino
                                                        </option>
                                                                                                            <option value="ST">
                                                            Sao Tome And Principe
                                                        </option>
                                                                                                            <option value="SA">
                                                            Saudi Arabia
                                                        </option>
                                                                                                            <option value="SN">
                                                            Senegal
                                                        </option>
                                                                                                            <option value="RS">
                                                            Serbia
                                                        </option>
                                                                                                            <option value="SC">
                                                            Seychelles
                                                        </option>
                                                                                                            <option value="SL">
                                                            Sierra Leone
                                                        </option>
                                                                                                            <option value="SG">
                                                            Singapore
                                                        </option>
                                                                                                            <option value="SK">
                                                            Slovakia
                                                        </option>
                                                                                                            <option value="SI">
                                                            Slovenia
                                                        </option>
                                                                                                            <option value="SB">
                                                            Solomon Islands
                                                        </option>
                                                                                                            <option value="SO">
                                                            Somalia
                                                        </option>
                                                                                                            <option value="ZA">
                                                            South Africa
                                                        </option>
                                                                                                            <option value="GS">
                                                            South Georgia And Sandwich Isl.
                                                        </option>
                                                                                                            <option value="ES">
                                                            Spain
                                                        </option>
                                                                                                            <option value="LK">
                                                            Sri Lanka
                                                        </option>
                                                                                                            <option value="SD">
                                                            Sudan
                                                        </option>
                                                                                                            <option value="SS">
                                                            South Sudan
                                                        </option>
                                                                                                            <option value="SR">
                                                            Suriname
                                                        </option>
                                                                                                            <option value="SJ">
                                                            Svalbard And Jan Mayen
                                                        </option>
                                                                                                            <option value="SZ">
                                                            Swaziland
                                                        </option>
                                                                                                            <option value="SE">
                                                            Sweden
                                                        </option>
                                                                                                            <option value="CH">
                                                            Switzerland
                                                        </option>
                                                                                                            <option value="SY">
                                                            Syrian Arab Republic
                                                        </option>
                                                                                                            <option value="TW">
                                                            Taiwan
                                                        </option>
                                                                                                            <option value="TJ">
                                                            Tajikistan
                                                        </option>
                                                                                                            <option value="TZ">
                                                            Tanzania
                                                        </option>
                                                                                                            <option value="TH">
                                                            Thailand
                                                        </option>
                                                                                                            <option value="TL">
                                                            Timor-Leste
                                                        </option>
                                                                                                            <option value="TG">
                                                            Togo
                                                        </option>
                                                                                                            <option value="TK">
                                                            Tokelau
                                                        </option>
                                                                                                            <option value="TO">
                                                            Tonga
                                                        </option>
                                                                                                            <option value="TT">
                                                            Trinidad And Tobago
                                                        </option>
                                                                                                            <option value="TN">
                                                            Tunisia
                                                        </option>
                                                                                                            <option value="TR">
                                                            Turkey
                                                        </option>
                                                                                                            <option value="TM">
                                                            Turkmenistan
                                                        </option>
                                                                                                            <option value="TC">
                                                            Turks And Caicos Islands
                                                        </option>
                                                                                                            <option value="TV">
                                                            Tuvalu
                                                        </option>
                                                                                                            <option value="UG">
                                                            Uganda
                                                        </option>
                                                                                                            <option value="UA">
                                                            Ukraine
                                                        </option>
                                                                                                            <option value="AE">
                                                            United Arab Emirates
                                                        </option>
                                                                                                            <option value="GB">
                                                            United Kingdom
                                                        </option>
                                                                                                            <option value="US" selected>
                                                            United States
                                                        </option>
                                                                                                            <option value="UM">
                                                            United States Outlying Islands
                                                        </option>
                                                                                                            <option value="UY">
                                                            Uruguay
                                                        </option>
                                                                                                            <option value="UZ">
                                                            Uzbekistan
                                                        </option>
                                                                                                            <option value="VU">
                                                            Vanuatu
                                                        </option>
                                                                                                            <option value="VE">
                                                            Venezuela
                                                        </option>
                                                                                                            <option value="VN">
                                                            Viet Nam
                                                        </option>
                                                                                                            <option value="VG">
                                                            Virgin Islands, British
                                                        </option>
                                                                                                            <option value="VI">
                                                            Virgin Islands, U.S.
                                                        </option>
                                                                                                            <option value="WF">
                                                            Wallis And Futuna
                                                        </option>
                                                                                                            <option value="EH">
                                                            Western Sahara
                                                        </option>
                                                                                                            <option value="YE">
                                                            Yemen
                                                        </option>
                                                                                                            <option value="ZM">
                                                            Zambia
                                                        </option>
                                                                                                            <option value="ZW">
                                                            Zimbabwe
                                                        </option>
                                                                                                    </select>
                                            </div>
                                        </div>
                                        <div class="form-group text-center">
                                            <button type="submit" class="btn btn-default">
                                                Update Totals
                                            </button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="secondary-cart-sidebar" id="scrollingPanelContainer">

                        <div class="order-summary" id="orderSummary">
                            <div class="loader w-hidden" id="orderSummaryLoader">
                                <i class="fas fa-fw fa-sync fa-spin"></i>
                            </div>
                            <h2 class="font-size-30">Order Summary</h2>
                            <div class="summary-container">

                                <div class="subtotal clearfix">
                                    <span class="pull-left float-left">Subtotal</span>
                                    <span id="subtotal" class="pull-right float-right">$0.00 USD</span>
                                </div>
                                                                <div class="recurring-totals clearfix">
                                    <span class="pull-left float-left">Totals</span>
                                    <span id="recurring" class="pull-right float-right recurring-charges">
                                        <span id="recurringMonthly" style="display:none;">
                                            <span class="cost"></span> Monthly<br />
                                        </span>
                                        <span id="recurringQuarterly" style="display:none;">
                                            <span class="cost"></span> Quarterly<br />
                                        </span>
                                        <span id="recurringSemiAnnually" style="display:none;">
                                            <span class="cost"></span> Semi-Annually<br />
                                        </span>
                                        <span id="recurringAnnually" style="display:none;">
                                            <span class="cost"></span> Annually<br />
                                        </span>
                                        <span id="recurringBiennially" style="display:none;">
                                            <span class="cost"></span> Biennially<br />
                                        </span>
                                        <span id="recurringTriennially" style="display:none;">
                                            <span class="cost"></span> Triennially<br />
                                        </span>
                                    </span>
                                </div>

                                <div class="total-due-today total-due-today-padded">
                                    <span id="totalDueToday" class="amt">$0.00 USD</span>
                                    <span>Total Due Today</span>
                                </div>

                                <div class="express-checkout-buttons">
                                                                    </div>

                                <div class="text-right">
                                    <a href="/billing/cart.php?a=checkout&e=false" class="btn btn-success btn-lg btn-checkout disabled" id="checkout">
                                        Checkout
                                        <i class="fas fa-arrow-right"></i>
                                    </a><br />
                                    <a href="/billing/cart.php" class="btn btn-link btn-continue-shopping" id="continueShopping">
                                        Continue Shopping
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <form method="post" action="/billing/cart.php">
<input type="hidden" name="token" value="c61c02acc0bdde011a3a31d45da767ecef253582" />
            <input type="hidden" name="a" value="remove" />
            <input type="hidden" name="r" value="" id="inputRemoveItemType" />
            <input type="hidden" name="i" value="" id="inputRemoveItemRef" />
            <input type="hidden" name="rt" value="" id="inputRemoveItemRenewalType">
            <div class="modal fade modal-remove-item" id="modalRemoveItem" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="float-right">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <h4 class="modal-title margin-bottom mb-3">
                                <i class="fas fa-times fa-3x"></i>
                                <span>Remove Item</span>
                            </h4>
                            Are you sure you want to remove this item from your cart?
                        </div>
                        <div class="modal-footer justify-content-center">
                            <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                            <button type="submit" class="btn btn-primary">Yes</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <form method="post" action="/billing/cart.php">
<input type="hidden" name="token" value="c61c02acc0bdde011a3a31d45da767ecef253582" />
            <input type="hidden" name="a" value="empty" />
            <div class="modal fade modal-remove-item" id="modalEmptyCart" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="float-right">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <h4 class="modal-title margin-bottom mb-3">
                                <i class="fas fa-trash-alt fa-3x"></i>
                                <span>Empty Cart</span>
                            </h4>
                            Are you sure you want to empty your shopping cart?
                        </div>
                        <div class="modal-footer justify-content-center">
                            <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                            <button type="submit" class="btn btn-primary">Yes</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="modal fade" id="recommendationsModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="float-left pull-left">
                                            recommendations.title.generic
                                    </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="clearfix"></div>
            </div>
            <div class="modal-body">
                <div class="product-recommendations-container">
    <div class="product-recommendations">
                    <p>recommendations.explain.generic</p>
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

    <form method="get" action="/billing/cart.php?a=view&">
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
