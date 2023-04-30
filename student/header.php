<script type="text/javascript" >
    function rtohome(){
        window.location.href = "studentdashboard.php";
    }
    function logout(){
        window.location.href = "../index.php";
    }
</script>
<?php
    if(session_status() === PHP_SESSION_NONE){
        session_start();
    }
    $regno = $_SESSION['regno'];
?>
<div class="Nav" id="Nav1" >
    <div class="NavbarContainer">
        <img src="../assets/logo.png" alt="logo" class="NavLogo" onclick="rtohome()">
        <div class="MobileIcon">
            <i class="fa fa-bars"></i>
        </div>
        <ul class="NavMenu">
            <li style="color: white; padding-top: 30px; margin-left: 250px;" class="NavItem"><?php echo "Welcome $regno"; ?></li>
        </ul>
        <!-- <ul class="NavMenu">
            <li class="NavItem"><a id="linkcolor" on class="NavLinks" href="#about">About</a></li>
            <li class="NavItem"><a id="linkcolor1" on class="NavLinks" href="pricing.html">Pricing</a></li>
            <li class="NavItem"><a id="linkcolor2" on class="NavLinks" href="#contact">Contact Us</a></li>
            <li class="NavItem"><a id="linkcolor3" on class="NavLinks" href="signin.html">Sign in</a></li>
        </ul> -->
        <div class="NavBtn">
            <button type="button" name="button" class="NavBtnLink" onclick="logout()">Logout</button>
        </div>
    </div>
</div>