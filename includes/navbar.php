<link rel="stylesheet" href="css-includes/navbar.css">
 
<header>
    <div class="logo">
        <a href="index.php">
            <img id="navBar-logo" src="resources/STRIGHTFRM.png"></img>
        </a>
    </div>
    <div class="navlinks">
        <a href="index.php" id="homeLink">Home</a>
        <a href="explore.php" id="exploreLink">Explore</a>
        <a>Library</a>
        <a>About</a>
        <a id="searchIcon"><span class="material-icons">search</span></a>
    </div>
    <div>
    <?php
        if (!isset($_SESSION["userid"])) {
            echo "<div class='login'><a href='login.php' class='flat-buttons'>Login / Sign Up</a></div>";
        }
        else {
            echo "<div class='login'><a href='includes/logout.inc.php' class='flat-buttons'>Log Out</a></div>";
        }
    ?>
    
</header>