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
                
                <h2 class="question">Content curation & community management by <a href="https://refigure.org" target="_blank">Refigure</a></h2>
                <p class="paragraph-style"><a href="mailto:contactrefigure@gmail.com"><i class="far fa-envelope"></i> contactrefigure@gmail.com</a></p>
                <div id="members">

                    <div class="member">
                        <img src="./img/team/girija.png" alt="Girija">
                        <ul>
                            <li class="name">Girija Goyal, Ph.D</li>
                            <li class="job-title">ReFigure Co-Founder, Staff Scientist at Wyss Institute for Biologically Inspired Engineering at Harvard University</li>
                            <li class="country"><span class="awesome"><i class="fas fa-location-arrow"></i></span> Boston, MA, USA</li>
                        </ul>
                    </div>

                    <div class="member">
                        <img src="./img/team/james.png" alt="James">
                        <ul>
                            <li class="name">James J. Akin, Ph.D</li>
                            <li class="job-title">ReFigure Co-Founder, Immunologist</li>
                            <li class="country"><span class="awesome"><i class="fas fa-location-arrow"></i></span> Boston, MA, USA</li>
                        </ul>
                    </div>
                    
                    <div class="member">
                        <img src="./img/team/alena.png" alt="Alena">
                        <ul>
                            <li class="name">Alena Lokhmanenko</li>
                            <li class="job-title">ReFigure Intern, Neuroscience Student at Wellesley College</li>
                            <li class="country"><span class="awesome"><i class="fas fa-location-arrow"></i></span> Wellesley MA, USA</li>
                        </ul>
                    </div>
                    
                    <div class="member">
                        <img src="./img/team/team-template.png" alt="Stephany">
                        <ul>
                            <li class="name">Stephany Castillo</li>
                            <li class="job-title">ReFigure Intern, Student at University of Massachusetts Boston</li>
                            <li class="country"><span class="awesome"><i class="fas fa-location-arrow"></i></span> Boston, MA, USA</li>
                        </ul>
                    </div>
                    
                    <div class="member">
                        <img src="./img/team/abena.png" alt="">
                        <ul>
                            <li class="name">Abena Mantey</li>
                            <li class="job-title">MS in Biotechnology student at Johns Hopkins University, class of 2021</li>
                            <li class="country"><span class="awesome"><i class="fas fa-location-arrow"></i></span> Boston, MA, USA</li>
                        </ul>
                    </div>
                    
                    <div class="member">
                        <img src="./img/team/megan.png" alt="">
                        <ul>
                            <li class="name">Megan Sperry, Ph.D</li>
                            <li class="job-title">Postdoctoral Fellow, Wyss Institute</li>
                            <li class="country"><span class="awesome"><i class="fas fa-location-arrow"></i></span> Boston, MA, USA</li>
                        </ul>
                    </div>

                </div>

                <h2 class="question">Design & development by <a href="https://openknowledgemaps.org" target="_blank">Open Knowledge Maps</a></h2>
                <p class="paragraph-style"><a href="mailto:info@openknowledgemaps.org"><i class="far fa-envelope"></i> info@openknowledgemaps.org</a></p>
                <div id="members">

                    <div class="member">
                        <img src="https://openknowledgemaps.org/img/team/peter.png" alt="Peter">
                        <ul>
                            <li class="name">Dr. Peter Kraker</li>
                            <li class="job-title">OKMaps Founder, Project Lead</li>
                            <li class="country"><span class="awesome"><i class="fas fa-location-arrow"></i></span> Vienna, Austria</li>
                        </ul>
                    </div>

                    <div class="member">
                        <img src="./img/team/team-template.png" alt="Maxi">
                        <ul>
                            <li class="name">Maxi Schramm</li>
                            <li class="job-title">OKMaps Board Member, UX Designer</li>
                            <li class="country"><span class="awesome"><i class="fas fa-location-arrow"></i></span> Vienna, Austria</li>
                        </ul>
                    </div>

                    <div class="member">
                        <img src="https://openknowledgemaps.org/img/team/chris.png" alt="Christopher">
                        <ul>
                            <li class="name">Christopher Kittel</li>
                            <li class="job-title">OKMaps Board Member, Data Scientist</li>
                            <li class="country"><span class="awesome"><i class="fas fa-location-arrow"></i></span> Vienna, Austria</li>
                        </ul>
                    </div>
                </div>
                
                <h2 class="question">Contributions from our community</h2>
                <p class="paragraph-style">Special thanks to all the contributions from:</p>
                <ul class="name-list">
                    <li>Amy Williams, PhD</li>
                    <li>Wyss Institute Coronavirus Therapeutics team</li>
                    <li>Don Ingber, MD. PhD</li>
                </ul>

            </div>
        </div>

        <?php include('contribute-research.php') ?>          
        <?php include('footer.php') ?>

    </body>

</html>
