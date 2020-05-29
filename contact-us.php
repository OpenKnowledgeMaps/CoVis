<!DOCTYPE html>
<?php
include 'config.php';
?>
<html>

    <head>
        <?php 
            $title = "Contact Us - CoVis";
            include 'head_covis.php' 
        ?>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link type="text/css" rel="stylesheet" href="./css/menu.css">
        <link type="text/css" rel="stylesheet" href="./css/main.css">
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <script type="text/javascript" src="./lib/menu.js "></script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    </head>

    <body class="generalpage">
        <header>
            <?php include('menu.php'); ?>
        </header>

        <div class="page">

            <div class="page-section">

                <h1 class="page-headline">Contact us</h1>

                <h4 class="question">I am a subject matter expert and would like to contribute to CoVis</h4>

                <p class="paragraph-style">
                    If you have recommendations for a paper to be included in the platform, please send your recommendation as well as your rationale to start a discussion with us.
                </p>

                <p class="paragraph-style">
                    Please get in touch with team ReFigure at <a href="mailto:contactrefigure@gmail.com">contactrefigure@gmail.com</a>
                </p>
                

                <h4 class="question">All other inquiries</h4>

                <p class="paragraph-style">
                    Please get in touch with team Open Knowledge Maps at <a href="mailto:info@openknowledgemaps.org">info@openknowledgemaps.org</a>
                </p>

            </div>
        </div>

        <?php include('footer.php') ?>
    </body>

</html>