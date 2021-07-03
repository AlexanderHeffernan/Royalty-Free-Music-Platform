<link rel="stylesheet" href="css-includes/navbar.css">

<style>
.dropbtn {
  background-color: transparent;
  color: white;
  padding: 5px;
  font-size: 16px;
  border: none;
  cursor: pointer;
  height: 100%;
}

.accountDropdown {
  float: right;
  position: relative;
  display: inline-block;
  height: 100%;
}

.dropdown-content {
    margin: 0;
    display: none;
    position: absolute;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    right: 0;
    z-index: 1;
    background-color: black;
    color: white;
    text-align: center;
    text-decoration: none;
    font-size: 16px;
    outline: none;
    border: none;
    width: 100px;
    transition: 0.4s;
}


.dropdown-content a {
  color: white;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {
    text-decoration: underline;
    text-decoration-color: #8F0099;
    text-decoration-thickness: 4px;
}

.show {display: block;}
</style>
 
<header>
    <div class="logo">
        <a href="index.php">
            <img id="navBar-logo" src="resources/STRIGHTFRM.png"></img>
        </a>
    </div>
    <div class="navlinks">
        <button onclick="window.location.href='index.php';" id="homeLink"><p>Home</p></button>
        <button onclick="window.location.href='explore.php';" id="exploreLink"><p>Explore</p></button>
        <button onclick="window.location.href='library.php';" id="libraryLink"><p>Library</p></button>
        <button onclick="window.location.href='documentation.php';" id="documentationLink"><p>About</p></button>
        <button id="searchIcon"><span class="material-icons">search</span></button>
    </div>
    <div class="rightlinks">
    <?php
        if (!isset($_SESSION["userid"])) {
            echo "<button onclick=\"window.location.href='login.php'\" class='flat-buttons logIn'><p>Login / Sign Up</p></button>";
        }
        else {
            echo "<div class='accountDropdown'>
                    <button onclick=\"accountDropDown()\" class='dropbtn'>";
            if(htmlspecialchars($_SESSION["usersProfilePicture"]) === "resources/users/profilePicture/") {
                    
                echo '<img src="resources/users/profilePicture/defualt_profile_image_large_224px.png" alt="Default Profile Image" width="150px" height="auto" class="profilePicture clickOff" id="profilePicture"/>';
            } else {
                echo '<img src="' . htmlspecialchars($_SESSION["usersProfilePicture"]) . '" alt="Default Profile Image" width="150px" height="auto" class="profilePicture clickedOff" id="profilePicture"/>';                  
            }
            echo "</button>
            <div id='myDropdown' class='dropdown-content'>
                <a href='dashboard.php'>Dashboard</a>
                <a href='includes/logout.inc.php'>Logout</a>
            </div>
            </div>";
        }
    ?>
    </div>
    
</header>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="javascript/waves.js"></script>
<script src="javascript/script-home.js"></script>
<script type="text/javascript">
    /* When the user clicks on the button, 
    toggle between hiding and showing the dropdown content */
    function accountDropDown() {
        document.getElementById("myDropdown").classList.toggle("show");
        document.getElementById("profilePicture").classList.toggle("clickedOn");
        document.getElementById("profilePicture").classList.toggle("clickedOff");
    }

    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
    if (!event.target.matches('.profilePicture')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var dropdownButton = document.getElementById("profilePicture");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
            if(dropdownButton.classList.contains("clickedOn")) {
                dropdownButton.classList.remove("clickedOn")
            }
            if(!dropdownButton.classList.contains("clickedOff")) {
                dropdownButton.classList.toggle("clickedOff");
            }
        }
    }
    }

    Waves.attach('button', ['waves-effect', 'waves-light']);
    Waves.attach('.navlinks a', ['waves-effect', 'waves-light']);
    Waves.attach('.flat-buttons', ['waves-effect', 'waves-light']);
    Waves.init();

</script>