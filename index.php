<!DOCTYPE html>
<?php
include 'config.php';
?>
<html>

    <head>
        <?php include 'head_covis.php' ?>
    </head>

    <body class="about generalpage">
        <header>
            <?php include('menu.php'); ?>
        </header>
        
        <div style="max-width: 1600px; margin: 0px auto;">
            <div class="about-image-mobile">
                <a href="knowledge-map"><img style="width: 100%;" src="./img/example.png"></a>
            </div>
            <div class="about-text">

                <h1 class="headline">A curated, visual knowledge base for Covid-19 research</h1>

                <p class="about-paragraph">
                    In the current pandemic, many researchers seek valid scientific data and findings on Covid-19. To support them, Open Knowledge Maps and ReFigure have launched CoVis. CoVis provides a curated knowledge map of seminal works on Covid-19 research. The knowledge map is constantly evolving thanks to the collective editing of subject-matter experts.
                </p>
                <p>
                    <a class="search-btn" href="knowledge-map">View the Covid-19 Knowledge Map</a>
                </p>

                <p class="link1">
                    <a href="faqs" style='color: white;'>Read our FAQs to find out more about the project</a>
                </p>

<!--<p style="font-size: 24px; font-weight: 300;">
    <a href="contact-us" style='color: white;'>Get in touch if you'd like to contribute</a>
</p>-->
            </div>

            <div class="about-image">
                <a href="knowledge-map"><img style="width: 100%;" src="./img/example.png"></a>
            </div>
        </div>

        <?php include('contribute-research.php') ?>
        <?php include('footer.php') ?>
    </body>
</html>
