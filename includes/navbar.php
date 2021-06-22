<link rel="stylesheet" href="css-includes/navbar.css">
 
<header>
    <div class="logo">
        <a href="index.php">
            <img id="navBar-logo" src="resources/STRIGHTFRM.png"></img>
        </a>
    </div>
    <div class="navlinks">
        <button onclick="window.location.href='index.php';" id="homeLink"><p>Home</p></button>
        <button onclick="window.location.href='explore.php';" id="exploreLink"><p>Explore</p></button>
        <button onclick="window.location.href='library.php';"><p>Library</p></button>
        <button onclick="window.location.href='documentation.php';" id="documentationLink"><p>About</p></button>
        <button id="searchIcon"><span class="material-icons">search</span></button>
    </div>
    <div class="rightlinks">
    <?php
        if (!isset($_SESSION["userid"])) {
            echo "<button onclick=\"window.location.href='login.php'\" class='flat-buttons'><p>Login / Sign Up</p></button>";
        }
        else {
            if(htmlspecialchars($_SESSION["usersProfilePicture"]) === "") {
                    
                echo '<img src="resources/users/profilePicture/defualt_profile_image_large_224px.png" alt="Default Profile Image" width="150px" height="auto" class="profilePicture"/>';
            } else {
                echo '<img src="' . htmlspecialchars($_SESSION["usersProfilePicture"]) . '" alt="Default Profile Image" width="150px" height="auto" class="profilePicture"/>';                  
            }
            //echo "<button onclick=\"window.location.href='includes/logout.inc.php';\" class='flat-buttons'><p>Log Out</p></button>";
        }
    ?>
    </div>
    
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