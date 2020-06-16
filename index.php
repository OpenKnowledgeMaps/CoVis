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

                <h1 class="headline">Kick start your COVID-19 literature research</h1>

                <p class="about-paragraph">
                    For the development of therapeutics and vaccines for COVID-19, scientists need reliable research results. To support them, Open Knowledge Maps and ReFigure have launched CoVis. CoVis provides a curated knowledge map of seminal works on COVID-19 from eight critical areas of biomedical research. The knowledge map is constantly evolving thanks to the collective editing of subject-matter experts.
                </p>
                <p class="about-paragraph">CoVis enables you to spend less time on reviewing COVID-19 literature and more time on your research.</p>
                <p>
                    <a class="search-btn" href="knowledge-map">View the COVID-19 Knowledge Map</a>
                </p>

                <p class="link1">
                    <a href="faqs" style='color: white;'>Read our FAQs to find out more about the project</a>
                </p>
            </div>

            <div class="about-image">
                <a href="knowledge-map"><img style="width: 100%;" src="./img/example.png"></a>
            </div>
        </div>

        <?php include('contribute-research.php') ?>
        <?php include('footer.php') ?>
    </body>
</html>
