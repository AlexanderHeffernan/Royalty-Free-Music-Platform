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
<p class="fof">404 get the fuckout of here</p>



    <?php include 'includes/bottom-nav.php';?>
    <?php include 'includes/songsTable.php';?>
    </body>
</html>

<?php
    mysqli_close($conn);
?>