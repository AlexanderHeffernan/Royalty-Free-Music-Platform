// WAVE EFFECTS //
Waves.attach('button', ['waves-effect', 'waves-light']);
Waves.attach('.bottom-btn', ['waves-effect', 'waves-light']);
Waves.attach('.ripple', ['waves-effect', 'waves-light']);
Waves.attach('.playmusic', ['waves-effect', 'waves-light']);
Waves.attach('.active', ['waves-effect', 'waves-dark']);
Waves.attach('#sort', ['waves-effect', 'waves-dark']);
Waves.attach('#sort option', ['waves-effect', 'waves-dark']);

Waves.init();



const filterOne = document.querySelector(".filter-button-one");
const filterTwo = document.querySelector(".filter-button-two");

var clickOne = false
function filterClickOne() {
    if (clickOne == false) {
        filterOne.classList.add('material-icons-clicked')
        clickOne = true;
    } else {
        filterOne.classList.remove('material-icons-clicked')
        clickOne = false;
    }
}
var clickTwo = false
function filterClickTwo() {
    if (clickTwo == false) {
        filterTwo.classList.add('material-icons-clicked')
        clickTwo = true;
    } else {
        filterTwo.classList.remove('material-icons-clicked')
        clickTwo = false;
    }
}


const profileSettings = document.querySelector(".profile-settings");
var clickThree = false
function profileSettingsFunction() {
    if (clickThree == false) {
        profileSettings.classList.add('clicked')
        clickThree = true;
    }
}
function profileSettingsFunctionHide() {
    if (clickThree == true) {
        profileSettings.classList.remove('clicked')
        clickThree = false;
    }
}

var recentSongName = myTitles[myTitles.length - 1];
var recentSongCover = myCovers[myCovers.length - 1];
var recentSongArtist = myArtists[myArtists.length - 1];
var recentSongListen = myListens[myListens.length - 1];
var recentSongDownloads = myDownloads[myDownloads.length - 1];

document.getElementById("recentSongCover").src = recentSongCover;
document.getElementById("recentSongName").innerHTML = recentSongName;
document.getElementById("recentSongArtist").innerHTML = recentSongArtist;
document.getElementById("recentSongListens").innerHTML = recentSongListen + " Listens";
document.getElementById("recentSongDownloads").innerHTML = recentSongDownloads + " Downloads";

var totalListens = 0;
for(var i = 0; i < myListens.length; i++) {
    totalListens += myListens[i];
}
document.getElementById("totalListens").innerHTML = totalListens;

var totalDownloads = 0;
for(var i = 0; i < myDownloads.length; i++) {
    totalDownloads += myDownloads[i];
}
document.getElementById("totalDownloads").innerHTML = totalDownloads;

document.getElementById("totalUploads").innerHTML = myDirectories.length;
