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
    <div class="hero">
        <p>rfm</p>

    </div>
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