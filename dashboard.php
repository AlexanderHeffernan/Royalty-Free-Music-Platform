<?php 
    session_start();
    include 'includes/header.php';
?>
    <title>RFM | Dashboard</title>
    <link rel="stylesheet" href="css-dashboard/style.css">
</head>
<body>
    <?php include 'includes/navbar.php';?>  
    <main>
        <div class="profile">
            <div class="profile-picture">
                <img src="resources/defualt_profile_image_large_224px.png" alt="Default Profile Image">
            </div>
            <h1>Upwards</h1>
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
                    <h2>0</h2>
                </div>
                <div>
                    <h3>Total Likes:</h3>
                    <h2>0</h2>
                </div>
                <div>
                    <h3>Total Downloads:</h3>
                    <h2>0</h2>
                </div>
                <div>
                    <h3>Total Uploads:</h3>
                    <h2>0</h2>
                </div>
            </div>

        </div>
        <div class="recent">
            <h1>Recent</h1>
            <div>
                <div class="song-cover"></div>
                <div class="song-details">
                    <h1>A New Song</h1>
                    <h4>By Upwards.</h4>
                    <div class="statistics">
                        <div>
                            <p>0 Listens</p>
                            <p>0 Likes</p>
                            <p>0 Downloads</p>
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
                        <div class="filer-content">weofhwufh</div>
                    </div>
                </div>
                <div class="song-container">
                    <div class="song"></div>
                    <div class="song"></div>
                    <div class="song"></div>
                    <div class="song"></div>
                    <div class="song"></div>
                    <div class="song"></div>
                    <div class="song"></div>
                    <div class="song"></div>
                    <div class="song"></div>
                    <div class="song"></div>
                    <div class="song"></div>
                    <div class="song"></div>
                    <div class="song"></div>
                    <div class="song"></div>
                    <div class="song"></div>
                    <div class="song"></div>
                    <div class="song"></div>
                    <div class="song"></div>
                    <div class="song"></div>
                    <div class="song"></div>
                    <div class="song"></div>
                    <div class="song"></div>
                    <div class="song"></div>
                    <div class="song"></div>
                    <div class="song"></div>
                    <div class="song"></div>
                    <div class="song"></div>
                    <div class="song"></div>
                    <div class="song"></div>
                    <div class="song"></div>
                </div>
            </div>
        </div>
    </main>
    <section class="btm-nav">
        <div class="col1">
            
        </div>
        <div class="col2">
            <div class="part">
                <img id="btm-nav_cover" class="cover">
            </div>   
            <div class="part">
                
                <div class="subpart">
                    <button class="playButton" onclick="play('current')"><img src="../media/img/play.png" width="25px" height="25px"></img></button>
                </div>
                <div class="subpart">
                    <button class="nextButton" onclick="next()"><img src="../media/img/fast-forward.png" width="25px" height="25px"></img></button>
                </div>
                <div class="subpart">
                    <p class="songtime"></p>
                </div>
                
            </div>
            <div class="part-last">
                <div class="subpart">
                    <p id="songTitle" class="songTitle"></p>
                    <p id="songArtist" class="artist"></p>
                </div>
            </div>
        </div>
        <div class="col3">
            <img src="../media/img/download-icon.png" width="25px" height="auto"></img>
            <img src="../media/img/love.png" width="25px" height="auto"></img>
            <img src="../media/img/bookmark.png" width="25px" height="auto"></img>
            <img src="../media/img/notifications.png" width="25px" height="auto"></img>
            <img src="../media/img/share.png" width="25px" height="auto"></img>
        </div>
        <div class="col4">
            <img src="../media/img/volume.png" width="25px" height="auto"></img>
            <input type="range" min="1" max="100" value="50" class="slider">
        </div>
    </section>

    <!-- Javascript -->
    <script src="javascript/script-dashboard.js"></script>
</body>
</html>