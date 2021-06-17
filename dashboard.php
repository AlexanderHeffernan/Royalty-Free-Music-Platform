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
                <?php echo '<img src="' . htmlspecialchars($_SESSION["usersProfilePicture"]) . '" alt="Default Profile Image"/>' ?>
            </div>
            <h1 id="artistText"><?php echo htmlspecialchars($_SESSION["usersUsername"]); ?></h1>
            <p><?php echo htmlspecialchars($_SESSION["userEmail"]); ?></p>
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
                <h1>Upload song:</h1>
                <div class="form-box">              
                    <section class="signup-form">
                        <form action="addSong.inc.php" method="post" id="login" class="input-group" enctype="multipart/form-data">
                            <input type="text" name="title" class="input-field" placeholder="ENTER TITLE" required>
                            <input id="artistInput" type="text" name="artist" class="input-field" placeholder="ENTER ARTIST" required readonly>
                            <label>Songs Audio file:</label>
                            <input type="file" accept="audio/*" name="audio" class="input-field" required>
                            <label>Songs Cover file:</label>
                            <input type="file" accept="image/*" name="cover" class="input-field" required>
                            <input type="text" name="duration" class="input-field" placeholder="ENTER DURATION" required>
                            <select name="genre" class="input-field" placeholder="NONE">
                                <option value="None">ENTER GENRE</option>
                                <option value="Pop">Pop</option>
                                <option value="Rock">Rock</option>
                                <option value="Hip hop">Hip hop</option>
                                <option value="Jazz">Jazz</option>
                            </select>
                            <select name="mood" class="input-field" placeholder="NONE">
                                <option value="None">ENTER MOOD</option>
                                <option value="Cheerful">Cheerful</option>
                                <option value="Happy">Hapyy</option>
                                <option value="Sad">Sad</option>
                                <option value="Angry">Angry</option>
                            </select>
                            <select name="instrument" class="input-field">
                                <option value="None">ENTER MAIN INSTRUMENT</option>
                                <option value="Piano">Piano</option>
                                <option value="Guitar">Guitar</option>
                                <option value="Drum">Drum</option>
                            </select>
                            <button type="submit" name="submit" class="submit-btn">Upload</button>
                        </form>
                    </section>
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
        sortSongs("AllSongsContainer", "musiclist", 2, 10, "false", 0, 1);
    </script>
    <script src="javascript/script-dashboard.js"></script>
    
</body>
</html>