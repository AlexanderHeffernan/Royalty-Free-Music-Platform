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
var currentList = 0;

var myAudio = [];

for(var i = 0; i < directories.length; i++) {
    myAudio.push(new Audio("../rfm/" + directories[i]));
}

var sortingOrder = [];
var listNames = [];
function sortSongs(containerName, listName, sortType, amount, ranked, listID) {
    if(document.getElementById(listName))
        document.getElementById(listName).remove();

    var newSortingOrder = [];

    if(amount > directories.length) {
        amount = directories.length;
    }

    if(listNames.includes(listName)) {
        sortingOrder = [];
    }
    else {
        listNames.push(listName);
    }

    if(sortType == 0)
    {
        for(var i = 0; i < amount; i++) {
            newSortingOrder.push(i);
        }
    }
    else if(sortType == 1) {
        for(var s = 0; s < amount; s++) {
            var largestNumberId;
            var largestNumber = 0;
            for(var i = 0; i < directories.length; i++) {
                if(listens[i] >= largestNumber && !newSortingOrder.includes(i))
                {
                    largestNumber = listens[i];
                    largestNumberId = i;
                }
            }
            newSortingOrder.push(largestNumberId);
        }
    }
    else if(sortType == 2) {
        i = directories.length - 1;
        for(var s = 0; s < amount; s++) {
            newSortingOrder.push(i - s);
        }
    }
    else if(sortType == 3) {
        for(var s = 0; s < amount; s++) {
            var largestNumberId;
            var largestNumber = 0;
            for(var i = 0; i < downloads.length; i++) {
                if(downloads[i] >= largestNumber && !newSortingOrder.includes(i))
                {
                    largestNumber = downloads[i];
                    largestNumberId = i;
                }
            }
            newSortingOrder.push(largestNumberId);
        }
    }

    sortingOrder.push(newSortingOrder);

    var list = document.createElement("ul");
    list.className = "musiclist";
    list.id = listName;

    for(var i = 0; i < amount; i++) {
        var ShareText = document.createElement("p");
        ShareText.innerHTML = "Share";

        var NotifyMeText = document.createElement("p");
        NotifyMeText.innerHTML = "Notify Me";

        var NotificationsText = document.createElement("p");
        NotificationsText.innerHTML = "Notifications";

        var SaveText = document.createElement("p");
        SaveText.innerHTML = "Save";

        var LikeText = document.createElement("p");
        LikeText.innerHTML = "Like";

        var DownloadText = document.createElement("p");
        DownloadText.innerHTML = "Download";

        var DropdownDiv = document.createElement("div");
        DropdownDiv.className = "dropdown-content";
        DropdownDiv.appendChild(ShareText);
        DropdownDiv.appendChild(NotifyMeText);
        DropdownDiv.appendChild(NotificationsText);
        DropdownDiv.appendChild(SaveText);
        DropdownDiv.appendChild(LikeText);
        DropdownDiv.appendChild(DownloadText);

        var moreIcon = document.createElement("i");
        moreIcon.className = "material-icons";
        moreIcon.title = "Add to playlist";
        moreIcon.innerHTML = "more_vert";

        var moreButton = document.createElement("button");
        moreButton.className = "more";
        moreButton.appendChild(moreIcon);

        var moreSpan = document.createElement("span");
        moreSpan.appendChild(moreButton);

        var dropdownDiv = document.createElement("div");
        dropdownDiv.className = "dropdown";
        dropdownDiv.appendChild(DropdownDiv);
        dropdownDiv.appendChild(moreSpan);

        var rightIconsDiv = document.createElement("div");
        rightIconsDiv.className = "rightIcons";
        rightIconsDiv.appendChild(dropdownDiv);

        var timeText = document.createElement("p");
        timeText.className = "time";
        timeText.innerHTML = duration[sortingOrder[listID][i]];

        var tagsDiv = document.createElement("div");
        tagsDiv.className = "tagcont";

        if(genre[sortingOrder[listID][i]] !== "") {
            var tagsText1 = document.createElement("p");
            tagsText1.className = "tags";
            tagsText1.innerHTML = genre[sortingOrder[listID][i]];
            tagsDiv.appendChild(tagsText1);
        }
        

        if(mood[sortingOrder[listID][i]] !== "") {
            var tagsText2 = document.createElement("p");
            tagsText2.className = "tags";
            tagsText2.innerHTML = mood[sortingOrder[listID][i]];
            tagsDiv.appendChild(tagsText2);
        }

        if(instrument[sortingOrder[listID][i]] !== "") {
            var tagsText3 = document.createElement("p");
            tagsText3.className = "tags";
            tagsText3.innerHTML = instrument[sortingOrder[listID][i]];
            tagsDiv.appendChild(tagsText3);
        }

        tagsDiv.appendChild(timeText);

        var artistText = document.createElement("p");
        artistText.className = "composer";
        artistText.innerHTML = artists[sortingOrder[listID][i]];

        var titleText = document.createElement("p");
        titleText.className = "title";
        titleText.innerHTML = titles[sortingOrder[listID][i]];

        var titleArtistDiv = document.createElement("div");
        titleArtistDiv.appendChild(titleText);
        titleArtistDiv.appendChild(artistText);

        var infoDiv = document.createElement("div");
        infoDiv.className = "info";
        infoDiv.appendChild(titleArtistDiv);
        infoDiv.appendChild(tagsDiv);

        var coverImage = document.createElement("img");
        coverImage.className = "cover";
        coverImage.src = covers[sortingOrder[listID][i]];

        var playIcon = document.createElement("img");
        playIcon.className = "playButton";
        playIcon.title = "Play";
        playIcon.src = "resources/play.png";
        playIcon.id = "playButton" + i + "" + listID;

        var playButton = document.createElement("button");
        playButton.className = "playmusic";
        playButton.appendChild(playIcon);

        var detailsDiv = document.createElement("div");
        detailsDiv.className = "details";
        detailsDiv.id = "defaultOpen";
        detailsDiv.appendChild(playButton);
        detailsDiv.appendChild(coverImage);
        detailsDiv.appendChild(infoDiv);

        if(ranked == "true") {
            var ranking = document.createElement("h1");
            ranking.className = "topSongsRanking";
            ranking.innerHTML = (i + 1) + ".";
        }

        var listItem = document.createElement("li");
        listItem.setAttribute('onclick', "play(" + i + ", " + listID + ")");
        if(ranked == "true")
            listItem.appendChild(ranking);

        listItem.appendChild(detailsDiv);
        listItem.appendChild(rightIconsDiv);

        list.appendChild(listItem);
    }
    
    var section;
    if(document.getElementById(containerName))
    {
        section = document.getElementById(containerName);
        section.appendChild(list);
    }
}

function play(songIdInput, listID) {
    if(listID == undefined) {
        console.log(currentList);
        listID = currentList;
    }
    
    if(songIdInput == "current" || songIdInput == songID) {
        if(isPlaying == true) {
            myAudio[sortingOrder[currentList][songID]].pause()
            document.getElementById('playPauseButton').src = "resources/play.png";
            document.getElementById('playButton' + songID + "" + currentList).src = "resources/play.png";
            isPlaying = false;
        }
        else if(isPlaying == false) {
            myAudio[sortingOrder[listID][songID]].play();
            document.getElementById('playPauseButton').src = "resources/pause.png";
            document.getElementById('playButton' + songID + "" + currentList).src = "resources/pause.png";
            isPlaying = true;
        }
        document.getElementById('btm-nav_cover').src = "../rfm/" + covers[sortingOrder[listID][songID]];
        document.getElementById('btm-nav_downloadButton').href = "../rfm/" + directories[sortingOrder[listID][songID]];
        document.getElementById('songTitle').innerHTML = titles[sortingOrder[listID][songID]];
        document.getElementById('songArtist').innerHTML = artists[sortingOrder[listID][songID]];
    }
    else {
        myAudio[sortingOrder[currentList][songID]].pause();
        document.getElementById('playPauseButton').src = "resources/pause.png";
        document.getElementById('playButton' + songID + "" + currentList).src = "resources/play.png";
        if(songID == songIdInput && isPlaying) {
            isPlaying = false;
        }
        else {
            songID = songIdInput;
            myAudio[sortingOrder[listID][songID]].play();
            document.getElementById('playButton' + songID + "" + listID).src = "resources/pause.png";
            document.getElementById('btm-nav_cover').src = "../rfm/" + covers[sortingOrder[listID][songID]];
            document.getElementById('btm-nav_downloadButton').href = "../rfm/" + directories[sortingOrder[listID][songID]];
            document.getElementById('songTitle').innerHTML = titles[sortingOrder[listID][songID]];
            document.getElementById('songArtist').innerHTML = artists[sortingOrder[listID][songID]];
            isPlaying = true;
        }
        var statType = '0';
        $.ajax({
            url: "includes/incrementSongStats.inc.php",
            type: 'post',
            data: 'songID='+ids[sortingOrder[listID][songID]]+'&statType='+statType
        })
    }

    if(listID != currentList && listID != undefined) {
        currentList = listID;
    }
    
};

function next() {
    console.log(sortingOrder[currentList]);
    myAudio[sortingOrder[currentList][songID]].pause();
    document.getElementById('playButton' + songID + "" + currentList).src = "resources/play.png";
    if(songID + 1 >= sortingOrder[currentList].length) {
        if(currentList + 1 >= sortingOrder.length) {
            currentList = 0;
        }
        else {
            currentList += 1;
        }
        songID = 0;
    }
    else {
        songID += 1;
    }
    console.log(songID + " and " + sortingOrder[currentList].length);
    console.log(sortingOrder[currentList]);
    myAudio[sortingOrder[currentList][songID]].play();
    document.getElementById('playButton' + songID + "" + currentList).src = "resources/pause.png";
    document.getElementById('playPauseButton').src = "resources/pause.png";
    document.getElementById('playButton' + songID + "" + currentList).src = "resources/pause.png";
    document.getElementById('btm-nav_cover').src = "../rfm/" + covers[sortingOrder[currentList][songID]];
    document.getElementById('btm-nav_downloadButton').href = "../rfm/" + directories[sortingOrder[currentList][songID]];
    document.getElementById('songTitle').innerHTML = titles[sortingOrder[currentList][songID]];
    document.getElementById('songArtist').innerHTML = artists[sortingOrder[currentList][songID]];
    isPlaying = true;
};

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
        data: 'songID='+ids[sortingOrder[songID]]+'&statType='+statType
    })
};