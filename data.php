<!DOCTYPE html>
<?php
include 'config.php';
?>
<html>

    <head>
        <?php
        $title = "Data Source - CoVis";
        include 'head_covis.php'
        ?>
    </head>

    <body class="generalpage">
        <header>
            <?php include('menu.php'); ?>
        </header>

        <div class="page2">

            <div class="page-section">

                <h1 class="page-headline">Data Source</h1>

                <p class="paragraph-style">
                    Below you can find the spreadsheet with select seminal works on COVID-19 research on which the <a href="knowledge-map">COVID-19 knowledge map</a> is based on. The spreadsheet is curated by subject matter experts.
                </p>

                <p class="paragraph-style"> 
                    If you are a subject matter expert and want to support us in curating the knowledge map, please <a href="contact-us">get in touch</a>.
                </p>

                <p class="paragraph-style">
                    The CoVis database is made available under CC0 (Public Domain Dedication).
                </p>

                <p class="paragraph-style">
                    <a target="_blank" href="https://docs.google.com/spreadsheets/d/<?php echo $SHEET_ID; ?>/edit#gid=0"><i class="fas fa-link"></i> Link to spreadsheet</a>
                </p>
            </div>

            <div>

                <iframe width="100%" height="800" src="https://docs.google.com/spreadsheets/d/<?php echo $SHEET_ID; ?>/edit#gid=0"></iframe>
            </div>
        </div>
        <?php include('contribute-research.php') ?>          
        <?php include('footer.php') ?>
    </body>

</html>
