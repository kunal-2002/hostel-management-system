<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>HMS, CRSSIET, Jhajjar</title>
    <link rel="stylesheet" href="css/home.scss">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Encode+Sans+Expanded:wght@400;700&display=swap" rel="stylesheet">
</head>

<body  onscroll="changecolor()">

    <script type="text/javascript" src="js/home.js"></script>
   
    <div class="Nav" id="Nav1">
        <div class="NavbarContainer">
            <img src="assets\header_logo.png" alt="" class="NavLogo" onclick="rtohome()">
            <div class="MobileIcon">
                <i class="fa fa-bars"></i>
            </div>
            <ul class="NavMenu"> 
                <li class="NavItem"><a id="linkcolor" on class="NavLinks" href="#about">About</a></li>
                <li class="NavItem"><a id="linkcolor1" class="NavLinks" href="pricing.php">Pricing</a></li>
                <li class="NavItem"><a id="linkcolor2" class="NavLinks" href="#contact">Contact Us</a></li>
                <li class="NavItem"><a id="linkcolor3" class="NavLinks" href="signin.php">Sign in</a></li>
            </ul>
            <div class="NavBtn">
                <button type="button" name="button" class="NavBtnLink" onclick="change()">Signup</button>
            </div>
        </div>
    </div>



    <div class="HeroContainer">
        <div class="HeroBg">
            <video muted autoplay="autoplay" Loop class="VideoBg">
                <source src="assets/video2.mp4" type="video/mp4">
            </video>
        </div>
        <div class="HeroContent">
            <img class="HeroH1" src="assets/logo.png">
            <p class="HeroP">CRSSIET, Jhajjar</p>
            <div class="HeroBtnWrapper">
                <button type="button" name="button" class="NavBtnLink" onclick="change()">Get Started</button>
            </div>
        </div>
    </div>
    


    <div class="InfoContainer" id="about">
        <div class="InfoWrapper">
            <div class="InfoRow">
                <div class="Column1">
                    <div class="TextWrapper">
                        <p class="TopLine">World class Facilities</p>
                        <h1 class="Heading">Best facilities with less prices</h1>
                        <p class="Subtitle">Cherish your hostel life with our hostels</p>
                        <div class="BtnWrap">
                            <button type="button" name="button" class="NavBtnLink">Get Started</button>
                        </div>
                    </div>
                </div>

                <div class="Column2">
                    <div class="ImgWrap">
                        <img class="Img" src="assets/infosectionpic1.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="InfoContainer">
        <div class="InfoWrapper">
            <div class="InfoRow" style="grid-template-areas:'col1 col2';">
                <div class="Column1">
                    <div class="TextWrapper">
                        <p class="TopLine">Best Food</p>
                        <h1 class="Heading">Unlimited variety of dishes</h1>
                        <p class="Subtitle">Taste dishes across the world</p>
                        <div class="BtnWrap">
                            <button type="button" name="button" class="NavBtnLink">Get Started</button>
                        </div>
                    </div>
                </div>

                <div class="Column2">
                    <div class="ImgWrap">
                        <img class="Img" src="assets/infosectionpic2.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="FooterContainer" id="contact">
        <div class="FooterWrap">

            <div class="FooterLinksContainer">
                <div class="FooterLinksWrapper">
                    <div class="FooterLinkItems">
                        <h1 class="FooterLinkTitle">About Us</h1>
                        <a href="aboutme.php" class="FooterLink">Developers</a>
                        <a href="#about" class="FooterLink">Services</a>
                        <a href="pricing.php" class="FooterLink">Pricing</a>
                        <a href="admin\adminlogin.php" class="FooterLink">Admin</a>
                    </div>
                </div>
            </div>

            <div class="SocialMedia">
                <div class="SocialMediaWrap">
                    <a href="#" class="SocialLogo">HMS</a>
                    <p class="WebsiteRights">CRSSIET, Jhajjar © 2023</p>
                    <div class="SocialIcons">
                        <a href="https://www.facebook.com/CRSSIET" class="SocialIconLink"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                        <a href="https://www.linkedin.com/in/crssiet-jhajjar-684141204/" class="SocialIconLink"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        <a href="https://www.instagram.com/crssietjhajjar2017/" class="SocialIconLink"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a href="http://crssietjhajjar.ac.in" class="SocialIconLink"><i class="fa fa-globe"></i></a>
                    </div>
                </div>
            </div>


        </div>
    </div>


       
</body>

</html>
