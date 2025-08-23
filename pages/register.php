
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="noindex,nofollow"/>
    <title>Register - TiVistation</title>
    <!-- Styling -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">

<!-- FontAwesome CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="../assets/css/login/all.min.css?v=2ecd99" rel="stylesheet">

<link href="../assets/css/login/theme.min.css?v=2ecd99" rel="stylesheet">
<link href="../assets/css/login/custom.css" rel="stylesheet">
<link href="../assets/css/login/open-sans-family.css" rel="stylesheet" type="text/css" />


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
    var csrfToken = '2c4b09d153b3e1de803f4a9e63d922e071820ba8',
        markdownGuide = 'Markdown Guide',
        locale = 'en',
        saved = 'saved',
        saving = 'autosaving',
        whmcsBaseUrl = "/billing";
    </script>
<script src="../assets/js/scripts.min.js"></script>

    
<!-- Google Analytics -->
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'G-ESC1W7JB0D', { cookieDomain: 'worthystream.com' });
ga('send', 'pageview');

</script>
<!-- End Google Analytics -->


</head>
<body class="primary-bg-color" data-phone-cc-input="1">

    

    
    <nav class="master-breadcrumb" aria-label="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
            <li class="breadcrumb-item">
            <a href="index.php">            Portal Home
            </a>        </li>
            <li class="breadcrumb-item active" aria-current="page">
                        Register
                    </li>
    </ol>
        </div>
    </nav>

    
    
    <section id="main-body">
        <div class="container">
            <div class="row">

                            <div class="col-lg-4 col-xl-3">
                    <div class="sidebar">
                            <div menuItemName="Already Registered" class="mb-3 card card-sidebar">
        <div class="card-header">
            <h3 class="card-title m-0">
                <i class="fas fa-user"></i>&nbsp;                Already Registered?
                                <i class="fas fa-chevron-up card-minimise float-right"></i>
            </h3>
        </div>
        <div class="collapsable-card-body">
                                        <div class="list-group list-group-flush d-md-flex" role="tablist">
                                                                        <div menuItemName="Already Registered Heading" class="list-group-item list-group-item-action" id="Primary_Sidebar-Already_Registered-Already_Registered_Heading">
                                                                                                Already registered with us? If so, click the button below to login to our client area from where you can manage your account.
                            </div>
                                                                                                <a menuItemName="Login"
                               href="/billing/login.php"
                               class="list-group-item list-group-item-action"
                                                                                                                                                           id="Primary_Sidebar-Already_Registered-Login"
                            >
                                <div class="sidebar-menu-item-wrapper">
                                                                            <div class="sidebar-menu-item-icon-wrapper">
                                                                                        <i class="fas fa-user sidebar-menu-item-icon"></i>
                                        </div>
                                                                        <div class="sidebar-menu-item-label">
                                        Login
                                    </div>
                                                                    </div>
                            </a>
                                                                                                <a menuItemName="Lost Password Reset"
                               href="/billing/index.php?rp=/password/reset"
                               class="list-group-item list-group-item-action"
                                                                                                                                                           id="Primary_Sidebar-Already_Registered-Lost_Password_Reset"
                            >
                                <div class="sidebar-menu-item-wrapper">
                                                                            <div class="sidebar-menu-item-icon-wrapper">
                                                                                        <i class="fas fa-asterisk sidebar-menu-item-icon"></i>
                                        </div>
                                                                        <div class="sidebar-menu-item-label">
                                        Lost Password Reset
                                    </div>
                                                                    </div>
                            </a>
                                                            </div>
                    </div>
            </div>
                        </div>
                                    </div>
                        <div class="col-lg-8 col-xl-9 primary-content">



<script src="../assets/js/StatesDropdown.js"></script>
<script src="../assets/js/PasswordStrength.js"></script>
<script>
    window.langPasswordStrength = "Password Strength";
    window.langPasswordWeak = "Weak";
    window.langPasswordModerate = "Moderate";
    window.langPasswordStrong = "Strong";
    jQuery(document).ready(function() {
        jQuery("#inputNewPassword1").keyup(registerFormPasswordStrengthFeedback);
    });
</script>


    <div id="registration">
        <form method="post" class="using-password-strength" action="/billing/register.php" role="form" name="orderfrm" id="frmCheckout">
<input type="hidden" name="token" value="2c4b09d153b3e1de803f4a9e63d922e071820ba8" />
            <input type="hidden" name="register" value="true"/>

            <div id="containerNewUserSignup">

                
                <div class="card mb-4">
                    <div class="card-body p-4" id="personalInformation">
                        <h3 class="card-title">Personal Information</h3>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group prepend-icon">
                                    <label for="inputFirstName" class="field-icon">
                                        <i class="fas fa-user"></i>
                                    </label>
                                    <input type="text" name="firstname" id="inputFirstName" class="field form-control" placeholder="First Name" value="" required autofocus>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group prepend-icon">
                                    <label for="inputLastName" class="field-icon">
                                        <i class="fas fa-user"></i>
                                    </label>
                                    <input type="text" name="lastname" id="inputLastName" class="field form-control" placeholder="Last Name" value="" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group prepend-icon">
                                    <label for="inputEmail" class="field-icon">
                                        <i class="fas fa-envelope"></i>
                                    </label>
                                    <input type="email" name="email" id="inputEmail" class="field form-control" placeholder="Email Address" value="">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group prepend-icon">
                                    <label for="inputPhone" class="field-icon">
                                        <i class="fas fa-phone"></i>
                                    </label>
                                    <input type="tel" name="phonenumber" id="inputPhone" class="field" placeholder="Phone Number" value="">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-body p-4">
                        <h3 class="card-title">Billing Address</h3>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group prepend-icon">
                                    <label for="inputCompanyName" class="field-icon">
                                        <i class="fas fa-building"></i>
                                    </label>
                                    <input type="text" name="companyname" id="inputCompanyName" class="field" placeholder="Company Name (Optional)" value="">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group prepend-icon">
                                    <label for="inputAddress1" class="field-icon">
                                        <i class="far fa-building"></i>
                                    </label>
                                    <input type="text" name="address1" id="inputAddress1" class="field form-control" placeholder="Street Address" value=""  required>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group prepend-icon">
                                    <label for="inputAddress2" class="field-icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </label>
                                    <input type="text" name="address2" id="inputAddress2" class="field" placeholder="Street Address 2" value="">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group prepend-icon">
                                    <label for="inputCity" class="field-icon">
                                        <i class="far fa-building"></i>
                                    </label>
                                    <input type="text" name="city" id="inputCity" class="field form-control" placeholder="City" value=""  required>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="form-group prepend-icon">
                                    <label for="state" class="field-icon" id="inputStateIcon">
                                        <i class="fas fa-map-signs"></i>
                                    </label>
                                    <label for="stateinput" class="field-icon" id="inputStateIcon">
                                        <i class="fas fa-map-signs"></i>
                                    </label>
                                    <input type="text" name="state" id="state" class="field form-control" placeholder="State" value=""  required>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group prepend-icon">
                                    <label for="inputPostcode" class="field-icon">
                                        <i class="fas fa-certificate"></i>
                                    </label>
                                    <input type="text" name="postcode" id="inputPostcode" class="field form-control" placeholder="Postcode" value="" required>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group prepend-icon">
                                    <label for="inputCountry" class="field-icon" id="inputCountryIcon">
                                        <i class="fas fa-globe"></i>
                                    </label>
                                    <select name="country" id="inputCountry" class="field form-control">
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
                                                                                    <option value="US" selected="selected">
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
                                                    </div>

                    </div>
                </div>

                            </div>

            <div id="containerNewUserSecurity" >

                <div class="card mb-4">
                    <div class="card-body p-4">
                        <h3 class="card-title">Account Security</h3>

                        <div id="containerPassword" class="row">
                            <div id="passwdFeedback" class="alert alert-info text-center col-sm-12 w-hidden"></div>
                            <div class="col-sm-6">
                                <div class="form-group prepend-icon">
                                    <label for="inputNewPassword1" class="field-icon">
                                        <i class="fas fa-lock"></i>
                                    </label>
                                    <input type="password" name="password" id="inputNewPassword1" data-error-threshold="50" data-warning-threshold="75" class="field" placeholder="Password" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group prepend-icon">
                                    <label for="inputNewPassword2" class="field-icon">
                                        <i class="fas fa-lock"></i>
                                    </label>
                                    <input type="password" name="password2" id="inputNewPassword2" class="field" placeholder="Confirm Password" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <button type="button" class="btn btn-default btn-sm btn-sm-block generate-password" data-targetfields="inputNewPassword1,inputNewPassword2">
                                        Generate Password
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="password-strength-meter">
                                    <div class="progress">
                                        <div class="progress-bar bg-success bg-striped" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="passwordStrengthMeterBar">
                                        </div>
                                    </div>
                                    <p class="text-center small text-muted" id="passwordStrengthTextLabel">Password Strength: Enter a Password</p>
                                </div>
                            </div>
                        </div>
                                            </div>

                </div>
            </div>

            
                <div class="text-center row justify-content-center">
        
                    <div class="col-md-8 mx-auto mb-3 mb-sm-0">
                <div id="default-captcha-domainchecker" class="text-center row pb-3">
                    <p>Please enter the characters you see in the image below into the text box provided. This is required to prevent automated submissions.</p>

                    <div class="col-6 captchaimage">
                        <img id="inputCaptchaImage" data-src="https://tivistation.com/billing/includes/verifyimage.php" src="https://tivistation.com/billing/includes/verifyimage.php" align="middle" />
                    </div>

                    <div class="col-6">
                        <input id="inputCaptcha" type="text" name="code" maxlength="6" class="form-control float-left"
                               data-toggle="tooltip" data-placement="right" data-trigger="manual" title="Required"/>
                    </div>
                </div>
            </div>
        
            </div>

            
            <p class="text-center">
                <input class="btn btn-lg btn-primary" type="submit" value="Register"/>
            </p>
        </form>
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

    <div class="w-hidden">
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

    <form method="get" action="/billing/register.php?">
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
                <?php

                                /*
               include footer
                */
                ?>
            </div>
        </div>
    </div>
</form>

    

</body>
</html>
