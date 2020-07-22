<!DOCTYPE html>
<?php
include 'config.php';
?>
<html>

    <head>
        <?php
        $title = "Team - CoVis";
        include 'head_covis.php'
        ?>
    </head>

    <body class="generalpage">
        <header>
            <?php include('menu.php'); ?>
        </header>

        <div class="page2">

            <div class="page-section">

                <h1 class="page-headline">Team</h1>
                
                <h2 class="question">Content curation & Community management by Refigure</h2>
                <p class="paragraph-style"><a href="mailto:contactrefigure@gmail.com"><i class="far fa-envelope"></i> contactrefigure@gmail.com</a></p>
                <div id="members">

                    <div class="member">
                        <img src="./img/team-template.png" alt="Girija Goyal">
                        <ul>
                            <li class="name">Girija Goyal</li>
                            <li class="job-title">Immunologist</li>
                            <li class="country"><span class="awesome"><i class="fas fa-location-arrow"></i></span> Boston</li>
                        </ul>
                    </div>

                    <div class="member">
                        <img src="./img/team-template.png" alt="James Akin">
                        <ul>
                            <li class="name">James Akin</li>
                            <li class="job-title">Immunologist</li>
                            <li class="country"><span class="awesome"><i class="fas fa-location-arrow"></i></span> Boston</li>
                        </ul>
                    </div>

                </div>

                <h2 class="question">UX Design & Development by Open Knowledge Maps</h2>
                <p class="paragraph-style"><a href="mailto:info@openknowledgemaps.org"><i class="far fa-envelope"></i> info@openknowledgemaps.org</a></p>
                <div id="members">

                    <div class="member">
                        <img src="https://openknowledgemaps.org/img/team/peter.png" alt="Peter Kraker">
                        <ul>
                            <li class="name">Peter Kraker</li>
                            <li class="job-title">Project Lead</li>
                            <li class="country"><span class="awesome"><i class="fas fa-location-arrow"></i></span> Vienna</li>
                        </ul>
                    </div>

                    <div class="member">
                        <img src="./img/team-template.png" alt="Maxi Schramm">
                        <ul>
                            <li class="name">Maxi Schramm</li>
                            <li class="job-title">UX Designer</li>
                            <li class="country"><span class="awesome"><i class="fas fa-location-arrow"></i></span> Vienna</li>
                        </ul>
                    </div>

                    <div class="member">
                        <img src="https://openknowledgemaps.org/img/team/chris.png" alt="Christopher Kittel">
                        <ul>
                            <li class="name">Christopher Kittel</li>
                            <li class="job-title">Data Scientist</li>
                            <li class="country"><span class="awesome"><i class="fas fa-location-arrow"></i></span> Vienna</li>
                        </ul>
                    </div>
                </div>
                
                <h2 class="question">Contributions from our community</h2>
                <p class="paragraph-style">Special thanks to all the contributions from our community: list of names (only if we are allowed to name them).</p>
                
                <div id="members">
                    <div class="member">
                        <a href="contact-us"><img src="./img/team-you.png" alt="Girija Goyal"></a>
                    </div>
                </div>

            </div>

        </div>

        <?php include('contribute-research.php') ?>          
        <?php include('footer.php') ?>

    </body>

</html>
