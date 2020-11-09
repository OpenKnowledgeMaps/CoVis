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
                    <img class="shadow2 abstand" src="./img/data-source-example.jpg" alt="Screenshot Data Source CoVis">
                    <span style="font-size: 12px;">Screenshot: Spreadsheet on <?php echo $KNOWLEDGE_MAPS[0]["name"] ?>, please <a target="_blank" href="https://docs.google.com/spreadsheets/d/<?php echo $SHEET_ID[0]; ?>/edit#gid=0">view spreadsheet here</a>.</span>
                </p>

                <p class="paragraph-style">
                    The CoVis knowledge maps are based on a spreadsheets with select seminal works on COVID-19 research. The curation of the database is led by immunologists and ReFigure founders Dr. Girija Goyal and Dr. James Akin. 
                </p>
                
                <?php for($i = 0; $i < count($KNOWLEDGE_MAPS); $i++): ?>
                    <p class="paragraph-style">
                        <a target="_blank" href="https://docs.google.com/spreadsheets/d/<?php echo $SHEET_ID[$i]; ?>/edit#gid=0"><i class="fas fa-link"></i> Spreadsheet on <?php echo $KNOWLEDGE_MAPS[$i]["name"]; ?></a>
                    </p>
                <?php endfor; ?>

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
