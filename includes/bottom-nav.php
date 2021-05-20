    <link rel="stylesheet" href="css-includes/bottom-nav.css">
    <!-- bottom navigation -->
    <section class="btm-nav">
        <div class="col1">
            
        </div>
        <div class="col2">
            <div class="part">
                <img id="btm-nav_cover" class="cover">
            </div>   
            <div class="part">
                
                <div class="subpart">
                    <button class="playButton" onclick="play('current')"><img id="playPauseButton" src="resources/play.png" width="25px" height="25px"></img></button>
                </div>
                <div class="subpart">
                    <button class="nextButton" onclick="next()"><img src="resources/fast-forward.png" width="25px" height="25px"></img></button>
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
            <a onclick="downloadSong()" id="btm-nav_downloadButton" download><img src="resources/download-icon.png" width="25px" height="auto"></img></a>
            
            <img src="resources/love.png" width="25px" height="auto"></img>
            <img src="resources/bookmark.png" width="25px" height="auto"></img>
            <img src="resources/notifications.png" width="25px" height="auto"></img>
            <img src="resources/share.png" width="25px" height="auto"></img>
        </div>
        <div class="col4">
            <img src="resources/volume.png" width="25px" height="auto"></img>
            <input type="range" min="1" max="100" value="50" class="slider">
        </div>
    </section>