<?php 
    session_start();
    include 'includes/header.php';
?>
    <title>RFM | Dashboard</title>
    <link rel="stylesheet" href="css-dashboard/style.css">
    <link rel="stylesheet" href="css-explore/waves.css"> 
    <link rel="stylesheet" href="css-includes/songs-list-styling.css">
</head>
<body>
    <?php include 'includes/navbar.php';?>  
    <main>
        <div class="profile">
            <div class="profile-picture">
                <img src="resources/defualt_profile_image_large_224px.png" alt="Default Profile Image">
            </div>
            <h1><?php echo htmlspecialchars($_SESSION["usersUsername"]); ?></h1>
            <p>account@gmail.com</p>
            <div class="analytics-header">
                <h2>Profile Analytics</h2>
                <p onclick="profileSettingsFunction()">Profile Settings</p>
            </div>
            <div class="profile-settings" onclick="profileSettingsFunctionHide()">
                <div class="profile-settings-card"></div>
            </div>
            <div class="profile-analytics">
                <div>
                    <h3>Total Listens:</h3>
                    <h2 id="totalListens">0</h2>
                </div>
                <div>
                    <h3>Total Likes:</h3>
                    <h2>0</h2>
                </div>
                <div>
                    <h3>Total Downloads:</h3>
                    <h2 id="totalDownloads">0</h2>
                </div>
                <div>
                    <h3>Total Uploads:</h3>
                    <h2 id="totalUploads">0</h2>
                </div>
            </div>

        </div>
        <div class="recent">
            <h1>Recent</h1>
            <div>
                <img class="song-cover" id="recentSongCover"></img>
                <div class="song-details">
                    <h2 id="recentSongName">A New Song</h1>
                    <h4 id="recentSongArtist">By Upwards.</h4>
                    <div class="statistics">
                        <div>
                            <p id="recentSongListens">0 Listens</p>
                            <p id="recentSongLikes">0 Likes</p>
                            <p id="recentSongDownloads">0 Downloads</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="playlist">
            <div class="container">
                <div class="playlist-header">
                    <h2>Albums & Playlists</h2>
                    <div class="filter" onclick="filterClickOne()">
                        Filter <span class="material-icons filter-button-one">
                            arrow_drop_down
                            </span>
                    </div>
                </div>
                <div class="playlist-container">
                    <div class="playlist"></div>
                    <div class="playlist"></div>
                    <div class="playlist"></div>
                    <div class="playlist"></div>
                    <div class="playlist"></div>
                    <div class="playlist"></div>
                    <div class="playlist"></div>
                    <div class="playlist"></div>
                    <div class="playlist"></div>
                    <div class="playlist"></div>
                    <div class="playlist"></div>
                    <div class="playlist"></div>
                    <div class="playlist"></div>
                    <div class="playlist"></div>
                    <div class="playlist"></div>
                </div>
            </div>
        </div>
        <div class="songs">
            <div class="container">
                <div class="song-header">
                    <h2>All Songs</h2>
                    <div class="filter" onclick="filterClickTwo()">
                        Filter 
                        <span class="material-icons filter-button-two" id="filter">
                            arrow_drop_down
                        </span>
                    </div>
                </div>
                <div id="AllSongsContainer" class="song-container">
                    
                </div>
            </div>
        </div>
    </main>

    <p id="username"><?php echo htmlspecialchars($_SESSION["usersUsername"]); ?></p>

    <?php include 'includes/bottom-nav.php';?>
    <?php include 'includes/songsTable.php';?>

    <!-- Javascript -->
    <script src="javascript/sortingAlgorithms.js"></script>
    <script>
        sortSongs("AllSongsContainer", "musiclist", 1, 10, "false", 0, 1);
    </script>
    <script src="javascript/script-dashboard.js"></script>
    
</body>
</html>