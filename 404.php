<?php 
    session_start();
    include 'includes/header.php';
?>
    <title>RFM</title>
    <link rel="stylesheet" href="css-home/style.css">
    <link rel="stylesheet" href="css-404/style.css">
    <link rel="stylesheet" href="css-includes/waves.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>

<body>
    <?php include 'includes/navbar.php';?>
<div class="fourofour-container">
    <div class="fourofour">
        <p>404</p>
        <a class="tip">You're not supposed to be here.</a>
        <a class="backbuttoncontainer">
            <a href="index.php" class="backbutton">go back</a>
        </a>
    </div>

</div>
    <?php include 'includes/bottom-nav.php';?>
    <?php include 'includes/songsTable.php';?>


    </body>
</html>


<?php
    mysqli_close($conn);
?>