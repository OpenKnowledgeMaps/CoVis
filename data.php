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
                
                <p class="example">
                    <a target="_blank" href="https://docs.google.com/spreadsheets/d/<?php echo $SHEET_ID; ?>/edit#gid=0">
                        <img class="shadow2 abstand" src="./img/data-source-example.jpg" alt="Screenshot Data Source CoVis">
                    </a>
                    <span style="font-size: 12px;">Screenshot: Data Source CoVis, please <a target="_blank" href="https://docs.google.com/spreadsheets/d/<?php echo $SHEET_ID; ?>/edit#gid=0">view spreadsheet here</a>.</span>
                </p>

                <p class="paragraph-style">
                    The <a href="knowledge-map">COVID-19 knowledge map</a> is based on a spreadsheet with select seminal works on COVID-19 research. The curation of the spreadsheet is led by immunologists and ReFigure founders Dr. Girija Goyal and Dr. James Akin. 
                </p>
                
                <p class="paragraph-style">
                    <a target="_blank" href="https://docs.google.com/spreadsheets/d/<?php echo $SHEET_ID; ?>/edit#gid=0"><i class="fas fa-link"></i> Link to spreadsheet</a>
                </p>

                </p>

                <p class="paragraph-style">
                    <a target="_blank" href="https://creativecommons.org/share-your-work/public-domain/cc0/"><img style="vertical-align: middle;" src="https://licensebuttons.net/p/zero/1.0/88x31.png"></a> The CoVis database is made available under <a target="_blank" href="https://creativecommons.org/share-your-work/public-domain/cc0/">CC0 (Public Domain Dedication)</a>.         
                </p>
                
            </div>
            
        </div>
        
        <?php include('contribute-research.php') ?>          
        <?php include('footer.php') ?>
        
    </body>

</html>
