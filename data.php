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

        <div class="page2">
            
            <div class="page-section">

                    <h1 class="page-headline">Data Source</h1>
                    
                    <p class="paragraph-style">
                        Below you can find the Spreadsheet with select seminal works on Covid-19 research on which the <a href="knowledge-map">Covid-19 knowledge map</a> is based on. The spreadsheet is curated by subject matter experts.
                    </p>
                    
                    <p> 
                        <a href="contact-us">Please get in touch</a> if you'd like to contribute to the Spreadsheet!
                    </p>
                    
                    <p class="paragraph-style">
                        <a target="_blank" href="https://docs.google.com/spreadsheets/d/<?php echo $SHEET_ID; ?>/edit#gid=0"><i class="fas fa-link"></i> Link to spreadsheet</a>
                    </p>
            </div>
                    
                    <div>
                    
            <iframe width="100%" height="800" src="https://docs.google.com/spreadsheets/d/<?php echo $SHEET_ID; ?>/edit#gid=0"></iframe>
                    </div>
        </div>
                    
        <?php include('footer.php') ?>
    </body>

</html>
