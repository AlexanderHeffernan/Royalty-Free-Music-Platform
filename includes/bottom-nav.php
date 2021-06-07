    <link rel="stylesheet" href="css-includes/bottom-nav.css">
    <!-- bottom navigation -->
    <section class="btm-nav">
        <div class="col1">
            <div class="subpart">
                <p id="songTitle" class="songTitle"></p>
                <p id="songArtist" class="artist"></p>
            </div>
        </div>
        <div class="col2">
            <div class="part">
                <img id="btm-nav_cover" class="cover">
                <div id="audio-player-container">
                    <audio src=" " preload="metadata" loop></audio>
                    <!-- swaps with pause icon -->
                    <button class="playButton" id="play-icon" onclick="play('current')"><img id="playPauseButton" src="resources/play.png" width="25px" height="25px"></img></button>
                    <button class="nextButton" id="skip-icon" onclick="next()"><img src="resources/fast-forward.png" width="25px" height="25px"></img></button>
                    
                    <span id="current-time" class="timeBottomNav">0:00</span>
                    <input class="durationScroller" type="range" id="seek-slider" max="100" value="0">

                    <a onclick="downloadSong()" id="btm-nav_downloadButton" download><img class="bottom-nav-icons" src="resources/download-icon.png"></img></a>
            
                    <img class="bottom-nav-icons" src="resources/love.png"></img>
                    <img class="bottom-nav-icons" src="resources/bookmark.png"></img>
                    <img class="bottom-nav-icons" src="resources/notifications.png"></img>
                    <img class="bottom-nav-icons" src="resources/share.png"></img>

                    <input class="volumeScroller" type="range" id="volume-slider" max="100" value="100">
                    <button id="mute-icon"></button>
                </div>

                <!--
                <div class="subpart">
                    <button class="playButton" onclick="play('current')"><img id="playPauseButton" src="resources/play.png" width="25px" height="25px"></img></button>
                </div>
                <div class="subpart">
                    <button class="nextButton" onclick="next()"><img src="resources/fast-forward.png" width="25px" height="25px"></img></button>
                </div>
                <div class="subpart">
                    <p class="songtime"></p>
                </div
                -->
            </div>
        </div>
    </section>