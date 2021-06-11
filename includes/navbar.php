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
        <a href="documentation.php" id="documentationLink">About</a>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="javascript/waves.js"></script>
    <script src="javascript/script-home.js"></script>
    <script type="text/javascript">
    Waves.attach('button', ['waves-effect', 'waves-light']);
    Waves.attach('.navlinks a', ['waves-effect', 'waves-light']);
    Waves.attach('.flat-buttons', ['waves-effect', 'waves-light']);
    Waves.init();
</script>