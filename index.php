<?php 
    session_start();
    include 'includes/header.php';
?>
    <title>RFM</title>
    <link rel="stylesheet" href="css-home/style.css">
    <link rel="stylesheet" href="css-includes/waves.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>
<body>
    <?php include 'includes/navbar.php';?>
    <section class="herocontainer">
        <div class="hero">
        <div class="container">
            <div class="header-container">
                <h1>
                The World's Largest 
                Royalty Free Music Library – That is free!!!
                </h1>
            </div>
            <div class="search">
                <span class="material-icons search-icon">
                    search
                </span>
                <input type="text" placeholder="What mood are you looking for?...">
            </div>
            <div class="arrow">
                <span class="material-icons">
                    keyboard_arrow_down
                </span>
            </div>
        </div>
        </div>
    </section>
    <section class="content" id="content">
        <div id="listensSection">
            <div class="top-songs">
                <h1>most listened to songs of the week</h1>
            </div>  
        </div>
        <div id="downloadsSection">
            <div class="top-songs">
                <h1>most downloaded songs of the week</h1>
            </div>
        </div>
        <div id="newestSongs">
            <div class="top-songs">
                <h1>most recent songs of the week</h1>
            </div>
        </div>
    </section>
    <?php include 'includes/bottom-nav.php';?>
    <?php include 'includes/songsTable.php';?>

    <style>
        #colored-button .btn { color: #fff; }
        #colored-button a, 
        #colored-button a:hover { background: #01BCFF; }
        #colored-button button,
        #colored-button button:hover { background: #1bb556; }
        #colored-button input,
        #colored-button input:hover { background: #ff4f0f; }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="javascript/waves.js"></script>
    <script src="javascript/script-home.js"></script>
    <script src="javascript/sortingAlgorithms.js"></script>
    <script>
        sortSongs("listensSection", "musiclist", 1, 10, "true", 0);
        sortSongs("downloadsSection", "musiclist1", 3, 10, "true", 1);
        sortSongs("newestSongs", "musiclist2", 2, 13, "false", 2);
    </script>


    
</body>
</html>

<?php
    mysqli_close($conn);
?>