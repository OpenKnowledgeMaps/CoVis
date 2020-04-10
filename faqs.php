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

    <body class="generalpage">
        <header>
            <?php include('menu.php'); ?>
        </header>

        <div class="page">

                <div class="page-section">

                    <h1 class="page-headline">FAQs</h1>
                    
                    <h4 class="question">How can I contribute to CoVis?</h4>
                    <!--<p class="example">
                        <a href="./img/data-example.png" data-toggle="lightbox">
                            <img class="shadow2 abstand" src="./img/data-example.png" alt="">
                        </a>
                        <span>Screenshot: Datensatz</span>
                    </p>-->
                    <p class="paragraph-style">
                       You are subject matter expert and would like to contribute to CoVis? Please get in touch with...
                    </p>
                    
                    <h4 class="question">What is a knowledge map?</h4>
                    <!--<p class="example">
                        <a href="./img/data-example.png" data-toggle="lightbox">
                            <img class="shadow2 abstand" src="./img/data-example.png" alt="">
                        </a>
                        <span>Screenshot: Datensatz</span>
                    </p>-->
                    <p class="paragraph-style">
                       Knowledge maps provide an instant overview of a topic by showing the main areas at a glance, and papers related to each area. This makes it possible to easily identify useful, pertinent information.
                    </p>
                    
                    <h4 class="question">Can I create my own CoVis for another research topic?</h4>
                    <!--<p class="example">
                        <a href="./img/data-example.png" data-toggle="lightbox">
                            <img class="shadow2 abstand" src="./img/data-example.png" alt="">
                        </a>
                        <span>Screenshot: Datensatz</span>
                    </p>-->
                    <p class="paragraph-style">
                        CoVis is only avialable for Covid-19 research for now. But
                        you can automatically create knowledge maps for any research topic on <a href="https://openknowledgemaps.org" target="_blank">openknowledgemaps.org</a>. These knowledge maps are based on 150 mio. documents from any discipline.
                    </p>
                    
                    <h4 class="question">How is CoVis funded?</h4>
                    <!--<p class="example">
                        <a href="./img/data-example.png" data-toggle="lightbox">
                            <img class="shadow2 abstand" src="./img/data-example.png" alt="">
                        </a>
                        <span>Screenshot: Datensatz</span>
                    </p>-->
                    <p class="paragraph-style">
                       At the moment we are looking for funding. Please get in touch if you'd like to fund us.
                    </p>
                    
                </div>
        </div>
                    
        <?php include('footer.php') ?>
    </body>

</html>