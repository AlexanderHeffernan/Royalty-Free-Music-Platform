<?php 
    session_start();
    include 'includes/header.php';
?>
    
    <title>RFM - Royalty Free Music</title>
    <link rel="stylesheet" href="css-explore/style.css">
    <link rel="stylesheet" href="css-explore/waves.css"> 
</head>
<body>
    <?php include 'includes/navbar.php';?>

    <div class="sortingNavigation">
        <div class="exploretextcontainer">
            <p class="exploretext">Explore - Alex was here!</p>
            <button class="hamburger" onclick="filterhamburger()"><i class="material-icons">menu</i></button>
        </div>
        <div class="sortresult">
            <div class="sortresultbtn">    
                <button class="sortbutton" id="defaultOpen" >A-Z</button>
                <button class="sortbutton">Z-A</button>
                <button class="sortbutton" onclick="sortSongs('main-container', 'musicList', 2, 15, 'false', 0)">New</button>
                <button class="sortbutton" onclick="sortSongs('main-container', 'musicList', 1, 15, 'false', 0)">Popular</button>
                <button class="sortbutton">Shortest</button>
                <button class="sortbutton">Longest</button>
                <button class="sortbutton" onclick="sortSongs('main-container', 'musicList', 3, 15, 'false', 0)">Most downloaded</button>
            </div>
        </div>
    </div>

    <!-- content -->
    <div class="main-container" id="main-container"> 
        <ul class="filters" id="filters">
            <div class="filtercontainer">
                <button class="accordion showfilter1">Genres <i class="material-icons ddarrow1 arrowicon">chevron_right</i></button>
                <div class="panel">
                    <button>JAZZ</button><br>
                    <button>ELECTRONIC</button><br>
                    <button>HIP HOP</button><br>
                    <button>COUNTRY</button><br>
                    <button>POP</button><br>
                    <button>ROCK</button><br>
                    <button>CINEMATIC</button>        
                </div>

                <button class="accordion showfilter2">Mood <i class="material-icons ddarrow2 arrowicon">chevron_right</i></button>
                <div class="panel">
                    <button>HAPPY</button><br>
                    <button>SAD</button><br>
                    <button>JOYFUL</button><br>
                    <button>NOSTALGIA</button><br>
                    <button>PEACEFUL</button>
                </div>

                <button class="accordion showfilter3">Theme <i class="material-icons ddarrow3 arrowicon">chevron_right</i>
                </button>
                <div class="panel">
                    <button>UNKNOWN</button>
                </div>

                <button class="accordion showfilter4">Instruments <i class="material-icons ddarrow4 arrowicon">chevron_right</i>
                </button>
                <div class="panel">
                    <button>UNKNOWN</button>
                </div>
            </div>
        </ul>
        <div id="ONE" class="tabcontent"></div><div id="TWO" class="tabcontent"></div><div id="THREE" class="tabcontent"></div><div id="FOUR" class="tabcontent"></div><div id="FIVE" class="tabcontent"></div><div id="SIX" class="tabcontent"></div><div id="SEVEN" class="tabcontent"></div>

        <ul id="musicList" class="musiclist">
            <!--
            <li onclick="play()">    
                <div class="details" onclick="openCity(event, 'London')" id="defaultOpen">
                    <button class="playmusic" ><i class=" material-icons" title="Play">play_arrow</i></button>
                    <img class="cover" src="http://s2.hulkshare.com/song_images/original/8/c/d/8cd78bb2fce2651b759f3586853f1885.jpg" alt="">
                    <div class="info">
                        <div>
                            <p class="title">Comptine d'un autre été</p>
                            <p class="composer">Upwards</p>
                        </div>
                        <div class="tagcont">
                            <p class="tags">EDM</p>
                            <p class="tags">Future</p>
                            <p class="time">3:59 </p>
                        </div>
                    </div>
                </div>         
                <div class="rightIcons">
                    <div class="dropdown">
                        <span>
                            <button class="more"><i class="material-icons" title="Add to playlist">more_vert</i></button>
                        </span>
                        <div class="dropdown-content">
                            <p>Download</p>
                            <p>Like</p>
                            <p>Save</p>
                            <p>Notifications</p>
                            <p>Notify Me</p>
                            <p>Share</p>
                        </div>
                    </div>
                </div>
            </li>
            -->
        </ul> 
    </div>
    <?php include 'includes/bottom-nav.php';?>
    <?php include 'includes/songsTable.php';?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="javascript/waves.js"></script>
    <script src="javascript/script-explore.js"></script>
    <script src="javascript/sortingAlgorithms.js"></script>
    <script>
        sortSongs("main-container", "musicList", 1, 15, "false", 0)
    </script>
</body>
</html>

<?php
    mysqli_close($conn);
?>