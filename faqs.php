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

                <h4 class="question">What is a knowledge map?</h4>
                
                <p class="example">
                    <a href="./img/knowledgemap-covid-19.png" data-toggle="lightbox">
                        <img class="shadow2 abstand" src="./img/knowledgemap-covid-19.png" alt="Screenshot Knowledge Map on Covid-19 research">
                    </a>
                    <span>Screenshot: Knowledge Map on Covid-19 research</span>
                </p>
                
                <p class="paragraph-style">
                    Knowledge maps provide an instant overview of a topic by showing the main areas at a glance, and resources related to each area. This makes it possible to easily identify useful, pertinent information.
                </p>
                
                <p class="paragraph-style">Areas are displayed as bubbles. By clicking on one of the bubbles, you can inspect the resources assigned to it. The size of the bubbles is relative to the number of resources assigned to it. Closeness of bubbles implies subject similarity. The closer two bubbles, the closer they are subject-wise. Centrality of bubbles implies subject similarity with the rest of the map, not importance. The closer a bubble is to the center, the closer it is subject-wise to all the other bubbles in the map.</p>

                <p class="paragraph-style">The knowledge map is based on the open source software <a href="https://github.com/OpenKnowledgeMaps/Headstart" target="_blank">Head Start</a> developed by Open Knowledge Maps.</p>

                <h4 class="question">What is a ReFigure?</h4>

                <p class="paragraph-style">
                    A ReFigure ...
                </p>

                <h4 class="question">How do you decide what is included in the knowledge map?</h4>

                <p class="paragraph-style">
                    Describe the collaborative editing process here.
                </p>

                <h4 class="question">How can I contribute to CoVis?</h4>

                <p class="paragraph-style">
                    Please check the <a href="contact-us">contact page</a>.
                </p>
                
                <h4 class="question">Can I reuse CoVis?</h4>

                <p class="paragraph-style">Describe the licenses for software, data and content.</p>

                <h4 class="question">Who is behind CoVis?</h4>

                <p class="paragraph-style">
                    Open Knowledge Maps is a charitable nonprofit organization dedicated to improving the visibility of
                    scientific knowledge for science and society. As part of its mission, Open Knowledge Maps operates the world’s largest visual search engine for research, which enables a diverse set of audiences to explore, discover and make use of scientific content. In addition, Open Knowledge Maps carries out training events to improve literature search skills, and it enables broad community participation through its support and engagement programs.
                </p>
                <p class="paragraph-style">
                    ReFigure is...
                </p>

                <h4 class="question">Can I create my own CoVis for another research topic?</h4>

                <p class="paragraph-style">
                    CoVis is only avialable for Covid-19 research for now. But
                    you can automatically create knowledge maps for any research topic on <a href="https://openknowledgemaps.org" target="_blank">openknowledgemaps.org</a>. These knowledge maps are based on 150 mio. documents from any discipline.
                </p>

                <h4 class="question">How is CoVis funded?</h4>

                <p class="paragraph-style">
                    At the moment we are looking for funding. Please get in touch if you'd like to fund us.
                </p>
                
                <h4 class="question">I have a question that is not listed here</h4>

                <p class="paragraph-style">
                    We'd love to hear from you! Please <a href="contact-us">get in touch</a>.
                </p>

            </div>
        </div>

        <?php include('footer.php') ?>
    </body>

</html>