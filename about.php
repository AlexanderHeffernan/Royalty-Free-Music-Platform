<?php 
    session_start();
    include 'includes/header.php';
?>
    
    <title>RFM - Royalty Free Music</title>
    <link rel="stylesheet" href="css-about/style.css">
    <link rel="stylesheet" href="css-explore/waves.css"> 
</head>
<body>
    <?php include 'includes/navbar.php';?>


    <!-- content -->
<div class="main-container" id="main-container"> 
    <div class="head">
        <div class="head-container">
            <div class="head-content"> 
                <p class="head-text">Who are we?</p>
            </div>            
        </div>
    </div>
    <div class="features">
        <p class="featureheadtext">Who are we?</p>

        <div class="features-container">
            <div class="features-content">
                <img class="imagepannel border1" src="https://i.imgur.com/AspwLAO.png" alt="">
                <div class="textpannel">
                    <p>is it dog</p>
                </div>
            </div>
        </div>
    </div>

    <div class="features2">
        <div class="features-container">
            <div class="features-content">
                <div class="textpannel">
                    <p>is it dog</p>
                </div>
                <img class="imagepannel border2" src="https://i.imgur.com/AspwLAO.png" alt="">

            </div>
        </div>
    </div>

    <section class="herocontainer">
        <div class="hero">
        <div class="container">
            <div class="header-container">
                <h1>
                What are you waiting for?
                </h1>
            </div>
            <div class="search">
                <form action="explore.php" method="POST">
                    <input type="text" name="search" placeholder="What mood are you looking for?...">
                    <button type="submit" name="submit-search" class="material-icons search-icon">search</button> 
                </form>
            </div>
        
        </div>
        </div>
    </section>


</div>


    <?php include 'includes/bottom-nav.php';?>
    <?php include 'includes/songsTable.php';?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="javascript/waves.js"></script>
    <script src="javascript/script-library.js"></script>
    <script src="javascript/sortingAlgorithms.js"></script>
</body>
</html>

<?php
    mysqli_close($conn);
?>