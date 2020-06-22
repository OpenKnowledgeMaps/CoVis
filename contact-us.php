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

                <h4 class="question">For subject-matter experts who want to contribute to CoVis</h4>
                
                <p class="paragraph-style">You can contribute to CoVis in a number of ways:</p>
                
                <ul class="paragraph-style list-style">
                    <li>To propose research resources or provide feedback on CoVis, please <a target="_blank" href="https://forms.gle/X5VXanrxTuweKYfF9">fill out this short form</a>.</li>
                    <li>If you would like to create your own collections and interpretations of research findings around key issues, such as whether a drug is effective, we suggest creating a ReFigure. A ReFigure is a user-generated collection of figures from different scientific publications that can be included in the knowledge map.<br>
You can <a target="_blank" href="https://refigure.org/signup/">sign up as a ReFigure user here</a>. Once you have signed up, you can find a tutorial of <a target="_blank" href="https://www.youtube.com/watch?v=FxGLRB6y0tc">how to create ReFigure collections here</a>. After you have created your coronavirus related ReFigure, please send us an email at <a href="mailto:contactrefigure@gmail.com">contactrefigure@gmail.com</a> to begin a discussion with us.
                    </li>
                </ul>

                <p class="paragraph-style">
                    The curation team is led by immunologists and ReFigure founders Dr. Girija Goyal and Dr. James Akin. If you have any more questions on how to contribute, please get in touch with them at <a href="mailto:contactrefigure@gmail.com">contactrefigure@gmail.com</a>.
                </p>
                

                <h4 class="question">All other inquiries</h4>

                <p class="paragraph-style">
                    Please get in touch with team Open Knowledge Maps at <a href="mailto:info@openknowledgemaps.org">info@openknowledgemaps.org</a>.
                </p>

            </div>
        </div>

        <?php include('footer.php') ?>
    </body>

</html>