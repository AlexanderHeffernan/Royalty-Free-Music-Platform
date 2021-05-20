// AUDIO CONTROLING //
var ids = [];
var directories = [];
var titles = [];
var artists = [];
var covers = [];
var listens = [];
var downloads = [];
var duration = [];
var genre = [];
var mood = [];
var instrument = [];

var songsTable = document.getElementById('songsTable');

var rowLength = songsTable.rows.length;

for (i = 1; i < rowLength; i++){

    var songsCells = songsTable.rows.item(i).cells;

    var cellLength = songsCells.length;

    for(var j = 0; j < cellLength; j++){

        var cellVal = songsCells.item(j).innerHTML;
        if(j == 0) {
            ids.push(cellVal);
        }
        else if(j == 1) {
            directories.push(cellVal);
        }
        else if(j == 2) {
            titles.push(cellVal);
        }
        else if(j == 3) {
            artists.push(cellVal);
        }
        else if(j == 4) {
            covers.push(cellVal);
        }
        else if(j == 5) {
            listens.push(parseInt(cellVal));
        }
        else if(j == 6) {
            downloads.push(parseInt(cellVal));
        }
        else if(j == 7) {
            duration.push(cellVal.toString());
        }
        else if(j == 8) {
            genre.push(cellVal);
        }
        else if(j == 9) {
            mood.push(cellVal);
        }
        else if(j == 10) {
            instrument.push(cellVal);
        }
    }
}

var isPlaying = false;
var songID = 1;

var myAudio = [];

for(var i = 0; i < directories.length; i++) {
    myAudio.push(new Audio("../rfm/" + directories[i]));
}

function play(songIdInput) {
    if(songIdInput == "current" || songIdInput == songID) {
        if(isPlaying == true) {
            myAudio[songID].pause()
            document.getElementById('playPauseButton').src = "resources/play.png";
            document.getElementById('playButton' + songID).src = "resources/play.png";
            isPlaying = false;
        }
        else if(isPlaying == false) {
            myAudio[songID].play();
            document.getElementById('playPauseButton').src = "resources/pause.png";
            document.getElementById('playButton' + songID).src = "resources/pause.png";
            isPlaying = true;
        }
        document.getElementById('btm-nav_cover').src = "../rfm/" + covers[songID];
        document.getElementById('btm-nav_downloadButton').href = "../rfm/" + directories[songID];
        document.getElementById('songTitle').innerHTML = titles[songID];
        document.getElementById('songArtist').innerHTML = artists[songID];
    }
    else {
        myAudio[songID].pause();
        document.getElementById('playPauseButton').src = "resources/pause.png";
        document.getElementById('playButton' + songID).src = "resources/play.png";
        if(songID == songIdInput && isPlaying) {
            isPlaying = false;
        }
        else {
            songID = songIdInput;
            myAudio[songID].play();
            document.getElementById('playButton' + songID).src = "resources/pause.png";
            document.getElementById('btm-nav_cover').src = "../rfm/" + covers[songID];
            document.getElementById('btm-nav_downloadButton').href = "../rfm/" + directories[songID];
            document.getElementById('songTitle').innerHTML = titles[songID];
            document.getElementById('songArtist').innerHTML = artists[songID];
            isPlaying = true;
        }
        var statType = '0';
        $.ajax({
            url: "includes/incrementSongStats.inc.php",
            type: 'post',
            data: 'songID='+ids[songID]+'&statType='+statType
        })
    }
    
};

function next() {
    myAudio[songID].pause();
    document.getElementById('playButton' + songID).src = "resources/play.png";
    if(songID + 1 >= myAudio.length) {
        songID = 0;
    }
    else {
        songID += 1;
    }
    myAudio[songID].play();
    document.getElementById('playButton' + songID).src = "resources/pause.png";
    document.getElementById('playPauseButton').src = "resources/pause.png";
    document.getElementById('playButton' + songID).src = "resources/pause.png";
    document.getElementById('btm-nav_cover').src = "../rfm/" + covers[songID];
    document.getElementById('btm-nav_downloadButton').href = "../rfm/" + directories[songID];
    document.getElementById('songTitle').innerHTML = titles[songID];
    document.getElementById('songArtist').innerHTML = artists[songID];
    isPlaying = true;
}

myAudio.onplaying = function() {
  isPlaying = true;
};
myAudio.onpause = function() {
  isPlaying = false;
};

function downloadSong() {
    console.log('yay');
    var statType = '1';
    $.ajax({
        url: "includes/incrementSongStats.inc.php",
        type: 'post',
        data: 'songID='+ids[songID]+'&statType='+statType
    })
};


// WAVE EFFECTS //
Waves.attach('button', ['waves-effect', 'waves-light']);
Waves.attach('.ripple', ['waves-effect', 'waves-light']);
Waves.attach('#myUL Li', ['waves-effect', 'waves-light']);
Waves.attach('.active', ['waves-effect', 'waves-dark']);
Waves.attach('#sort', ['waves-effect', 'waves-dark']);
Waves.attach('#sort option', ['waves-effect', 'waves-dark']);

Waves.init();


// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();

// ACCORDION? //

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
        panel.style.maxHeight = null;
    } else {
        panel.style.maxHeight = panel.scrollHeight + "px";
    } 
    });
}


$(document).ready(function(){
    $(".showfilter1").click(function(){
    if($(".ddarrow1").hasClass("activeate")){
    $(".ddarrow1").removeClass("activeate")
    }else{
    $(".ddarrow1").addClass("activeate")
    }
    });
    });
    

$(document).ready(function(){
    $(".showfilter2").click(function(){
    if($(".ddarrow2").hasClass("activeate")){
    $(".ddarrow2").removeClass("activeate")
    }else{
    $(".ddarrow2").addClass("activeate")
    }
    });
    });

$(document).ready(function(){
    $(".showfilter3").click(function(){
    if($(".ddarrow3").hasClass("activeate")){
    $(".ddarrow3").removeClass("activeate")
    }else{
    $(".ddarrow3").addClass("activeate")
    }
    });
    });
        
$(document).ready(function(){
    $(".showfilter4").click(function(){
    if($(".ddarrow4").hasClass("activeate")){
    $(".ddarrow4").removeClass("activeate")
    }else{
    $(".ddarrow4").addClass("activeate")
    }
    });
    });

$(document).ready(function(){
    $(".hamburger").click(function(){
    $(".filters").toggleClass("toggleshowmobile");
    });
});