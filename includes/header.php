<div  class="header">
    <nav class="navbar navbar-expand-md navbar-light" >
        <a class="navbar-brand" href="index.php">
            <img src="assets/logo.png" />
            <img class="second-logo" src="assets/header_logo.png" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#my-navbar" >
            <span class="navbar-toggler-icon" ></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="my-navbar">
            <ul class="navbar-nav">
                <?php
                //Check if user is loging or not
                if (!isset($_SESSION["user_id"])) {
                ?>
                    <li class="nav-item">
                        <a class="nav-link white" href="#" data-toggle="modal" data-target="#signup-modal">
                            <i class="fas fa-user white"></i><span class="white">Signup</span>
                        </a>
                    </li>
                    <div class="nav-vl white"></div>
                    <li class="nav-item">
                        <a class="nav-link white" href="#" data-toggle="modal" data-target="#login-modal">
                            <i class="fas fa-sign-in-alt white"></i><span class="white">Login</span>
                        </a>
                    </li>
                <?php
                } else {
                ?>
                    <div class="nav-name white">
                        Hi, <?php echo $_SESSION["full_name"] ?>
                    </div>
                    <li class="nav-item">
                        <a class="nav-link white" href="dashboard.php">
                            <i class="fas fa-user white"></i><span class="white">Dashboard</span>
                        </a>
                    </li>
                    <div class="nav-vl white"></div>
                    <li class="nav-item">
                        <a class="nav-link white" href="logout.php">
                            <i class="fas fa-sign-out-alt white"></i><span class="white">Logout</span>
                        </a>
                    </li>
                <?php
                }
                ?>
            </ul>
        </div> 
    </nav>
</div>

<div id="loading">
</div>