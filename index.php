<!DOCTYPE html>
<?php
include 'config.php';
?>
<html>

    <head>
        <?php include 'head_covis.php' ?>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link type="text/css" rel="stylesheet" href="./menu.css">
        <link type="text/css" rel="stylesheet" href="./main.css">
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <script type="text/javascript" src="./menu.js "></script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    </head>

    <body class="about generalpage">
        <header>
            <?php include('menu.php'); ?>
        </header>

        <div style="max-width: 1600px; margin: 0px auto;">
        <div class="about-text">

            <h1 class="headline">A curated, visual knowledge base for Covid-19 research</h1>
            
            <p class="about-paragraph">
                In the current pandemic, many researchers seek valid scientific data and findings on Covid-19. To support them, Open Knowledge Maps and ReFigure have launched CoVis. CoVis provides a curated knowledge map of seminal works on Covid-19 research. The knowledge map is constantly evolving thanks to the collective editing of subject-matter experts.
            </p>
            <p class="search-btn">
                <a href="knowledge-map">View the Covid-19 Knowledge Map</a>
            </p>
            
            <p style="max-width: 750px; font-size: 24px; font-weight: 300;">
                <a href="contact-us" style='color: white;'>Get in touch if you'd like to contribute</a>
            </p>
            
        </div>
        
        <div class="about-image">
            <a href="knowledge-map"><img style="width: 100%;" src="./img/example.png"></a>
        </div>
        
         </div>
        <?php include('footer.php') ?>
    </body>

</html>
