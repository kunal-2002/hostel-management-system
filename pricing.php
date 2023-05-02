<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Pricing</title>
        <link rel="stylesheet" href="./css/pricing.css">
    </head>
    <body>
        <script type="text/javascript" src="./js/pricing.js"></script>

        <div class="Nav" id="Nav1">
            <div class="NavbarContainer">
                <img src="./assets/logo.png" alt="hmslogo" class="NavLogo" onclick="rtohome()">
                <div class="MobileIcon">
                    <i class="fa fa-bars"></i>
                </div>
                <ul class="NavMenu">
                    <li class="NavItem"><a id="linkcolor" on class="NavLinks" href="index.php#about">About</a></li>
                    <li class="NavItem"><a id="linkcolor1" on class="NavLinks" href="pricing.php#about">Pricing</a></li>
                    <li class="NavItem"><a id="linkcolor2" on class="NavLinks" href="index.php#contact">Contact Us</a></li>
                    <li class="NavItem"><a id="linkcolor3" on class="NavLinks" href="signin.php">Sign in</a></li>
                </ul>
                <div class="NavBtn">
                    <button type="button" name="button" class="NavBtnLink" onclick="change()">Signup</button>
                </div>
            </div>
        </div>


        <div class="pricingcontainer">
            <div class="pricingwrapper">
                <div class="columns">
                    <ul class="price">
                        <li class="header">Boys Hostel (A BLOCK)</li>
                        <div class="imagewrapper">
                            <img style="height:150px; width:150px;" src="./assets/boys_hostel.jpg" alt="">
                        </div>
                        <li class="grey">6100₹ per Semester</li>
                        <li>24*7 Wifi Service</li>
                        <li>Common Room with Television</li>
                        <li>Clean and Green Playground</li>
                        <li>RO water Facility</li>
                        <li class="grey"><a href="signin.php" class="button">Select</a></li>
                    </ul>
                </div>

                <div class="columns">
                    <ul class="price">
                        <li class="header">Girls Hostel (B BLOCK)</li>
                        <div class="imagewrapper">
                            <img style="height:150px; width:150px;" src="./assets/girls_hostel.jpg" alt="">
                        </div>
                        <li class="grey">6100₹ per Semester</li>
                        <li>24*7 Wifi Service</li>
                        <li>Common Room with Television</li>
                        <li>Clean and Green Playground</li>
                        <li>RO water Facility</li>
                        <li class="grey"><a href="signin.php" class="button">Select</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>