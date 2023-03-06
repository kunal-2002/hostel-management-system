<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome | HMS, CRSSIET, Jhajjar</title>
    <?php
        include "includes/head_links.php";
    ?>
    <link href="css/home.scss" rel="stylesheet" />
</head>

<body>
        
    <?php
        include "includes/header.php";
    ?>

    <div class="background"></div>

    <div class="page-container">
      <article contentEditable>Content</article>
    </div>


    <?php
        include "includes/signup_modal.php";
        include "includes/login_modal.php";
        include "includes/footer.php";
    ?>
    <script type="text/javascript" src="js/home.js"></script>
   
</body>

</html>
