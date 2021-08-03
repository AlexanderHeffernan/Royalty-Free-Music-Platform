<?php 
    session_start();
    include 'includes/header.php';
?>
    <title>RFM</title>
    <link rel="stylesheet" href="css-about/style.css">
    <link rel="stylesheet" href="css-includes/waves.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>
<body>
    <?php include 'includes/navbar.php';?>
    <!--
    <div class="container">
    <div class="main-title1"><h1>Who are we?</h1></div>
    </div>

    <div class="main-title"><h1>Who are we?</h1></div>
-->

    <section class="herocontainer">
        <div class="hero">
        <div class="container">
            <div class="header-container">
                <h1>
                Who are we?
                </h1>
            </div>
            <div class="arrow">
                <span class="material-icons">
                    keyboard_arrow_down
                </span>
            </div>
        </div>
        </div>
    </section>
<div class="container"></div>
        <div class="first-section">
            <p class="text-content">With unlimited downloads, talented artists and a wide collection of genres, RFM is your one stop site for music</p>
            <img class="images" src="resources/about-page-img-1.png" alt="Piano">
        </div>

    <?php include 'includes/bottom-nav.php';?>
    <?php include 'includes/songsTable.php';?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="javascript/waves.js"></script>
    <script src="javascript/script-home.js"></script>
    <script src="javascript/sortingAlgorithms.js"></script>

    

</body>
</html>