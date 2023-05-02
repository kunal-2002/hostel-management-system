<script type="text/javascript" >
    function rtohome(){
        window.location.href = "studentdashboard.php";
    }
    function logout(){
        window.location.href = "../index.php";
    }
    function openNav(){
        document.getElementById("mySidenav").style.width = "250px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }
</script>
<style>
.sidenav{
    display: none;
}
.MobileIcon{
    display: none;
    color: white;
}

.MobileIcon:hover{
    color: #01bf71;
}

@media screen and (max-width: 768px){
    .MobileIcon{
        display: block;
        position: absolute;
        top:0;
        right: 0;
        transform: translate(-100%,60%);
        font-size: 1.8rem;
        cursor: pointer;
        color: #fff;
   }

   .NavLogo{
    justify-self: flex-start;
    cursor: pointer;
    display: flex;
    align-items: center;
    margin-left: 0;
    }

    .navbar-menu{
        background: whitesmoke;
        color: black;
        list-style: none;
    }

}
    /* Sidenav */
.sidenav a{
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s
}

.sidenav a:hover, .offcanvas a:focus{
    color: #01bf71;
}

.closebtn{
    position: absolute;
    top: 8px;
    right: 0;
    font-size: 36px !important;
    margin-right: 26px;
    transform: scale(1.5);
    display: block;
    cursor: pointer;
}

@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
}
/* sidenav  */

</style>
<?php
    if(session_status() === PHP_SESSION_NONE){
        session_start();
    }
    $regno = $_SESSION['regno'];
    require_once('../dbConnect.php');
    $sql = "SELECT name FROM users WHERE regno='$regno';";
    $query1= mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($query1);
    $name = $row['name'];
?>
<div class="Nav" id="Nav1" >
    <div class="NavbarContainer">
        <img src="../assets/logo.png" alt="logo" class="NavLogo" onclick="rtohome()">
        <div class="MobileIcon" id="linkcolor3" onclick="openNav()">
            <i class="fa fa-bars"></i>
        </div>
        <div class="sidenav" id="mySidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <li style="color: white; padding-top: 30px; margin-left: 250px;" class="NavItem"><?php echo "Welcome ".$name." ( ".$regno." )"; ?></li>
                <li class="NavItem"><a class="NavLinks" href="../index.php" >Logout</a></li>
        </div>
        <ul class="NavMenu">
            <li style="color: white; padding-top: 30px; margin-left: 250px;" class="NavItem"><?php echo "Welcome ".$name." ( ".$regno." )"; ?></li>
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