<!DOCTYPE html>
<?php
include 'config.php';
?>
<html>

    <head>
        <?php include 'head_covis.php' ?>
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
                    <span style="font-size: 12px;">Screenshot: Knowledge Map on Covid-19 research</span>
                </p>
                
                <p class="paragraph-style">
                    Knowledge maps provide an instant overview of a topic by showing the main areas at a glance, and resources related to each area. This makes it possible to easily identify useful, pertinent information.
                </p>
                
                <p class="paragraph-style">Areas are displayed as bubbles. By clicking on one of the bubbles, you can inspect the resources assigned to it. The size of the bubbles is relative to the number of resources assigned to it. Closeness of bubbles implies subject similarity. The closer two bubbles, the closer they are subject-wise. Centrality of bubbles implies subject similarity with the rest of the map, not importance. The closer a bubble is to the center, the closer it is subject-wise to all the other bubbles in the map.</p>

                <p class="paragraph-style">The knowledge map is based on the open source software <a href="https://github.com/OpenKnowledgeMaps/Headstart" target="_blank">Head Start</a> developed by Open Knowledge Maps.</p>
                
                <h4 class="question">Methodology for paper inclusion</h4>
                <p class="paragraph-style">Members of the ReFigure team nominated articles based on, first, what areas they were most interested in and, second, by determining the amount of current, or potential discussion an article might engender. Other members of the team either validated the article’s selection, or offered alternatives. The articles were then sorted and annotated with the Open Knowledge Maps team to be presented optimally in the CoVis visualization. This collection is not exhaustive, but rather provides some relevant and impactful starting points for further pursuing coronavirus research. If you would like to participate, please email us your interest at <a href="mailto:contactrefigure@gmail.com">contactrefigure@gmail.com</a>.</p>
               
                

                <h4 class="question">Who is behind CoVis?</h4>

                <p class="paragraph-style">
                    <a href="https://openknowledgemaps.org" target="_blank">Open Knowledge Maps</a> is a charitable nonprofit organization dedicated to improving the visibility of
                    scientific knowledge for science and society. As part of its mission, Open Knowledge Maps operates the world’s largest visual search engine for research, which enables a diverse set of audiences to explore, discover and make use of scientific content. In addition, Open Knowledge Maps carries out training events to improve literature search skills, and it enables broad community participation through its support and engagement programs.
                </p>
                <p class="paragraph-style">
                    <a href="https://refigure.org/" target="_blank">ReFigure</a> is the flagship platform created by Scimpact, LLC, a social-impact startup with the mission to re-imagine the way scientific results are communicated. With a growing community of users, ReFigure makes research results more interactive to scientists of all training levels. ReFigure has demonstrated impact across scientific disciplines to encourage critical review, comparison and curation of scientific results through its novel, web-native platform.
                </p>
                
                <h4 class="question">What is a ReFigure?</h4>

                <p class="paragraph-style">
                   A ReFigure is a user-generated collection of figures from different scientific publications. They may be created to address a specific hypothesis, or might be a collection of results that are tied together by a single element (e.g. SARS-CoV-2 pre-clinical models, or validated anti-spike protein antibody clones). The ReFigures featured in CoVis are created by our editors and contributors at ReFigure.
                </p>
                
                <h4 class="question">How do you decide what is included / excluded in the knowledge map?</h4>

                <p class="paragraph-style">
                    This knowledge map was created with the intent to make important scientific research on coronavirus infection and COVID-19 disease more discoverable. The collection is not meant to be exhaustive, but to offer highlights that are a jumping off point in 8 key areas: immunity, vaccines, therapeutics, diagnostics, viral biology, host biology and clinical findings and epidemiology. After careful review and discussion with users from both of our intended audiences, we added an additional area, introduction to coronavirus research, which includes foundational papers in coronavirus research to those who have no prior background. Selected articles within each aforementioned category have been included based on the collective review of our editorial team with consideration to the potential impact and novelty of the findings, as well as the potential to encourage and bring forward important questions during this dynamic time.
                </p>
                
                 <h4 class="question">How can I contribute to CoVis?</h4>

                <p class="paragraph-style">
                    If you have recommendations for a paper to be included in the platform, please send your recommendation as well as your rationale to contactrefigure@gmail.com to start a discussion with us.
If you would like to create your own collections and interpretations of research findings, sign up as a ReFigure user here. Once you have signed up, you can find a tutorial of how to create ReFigure collections here. After you have created your coronavirus related ReFigure, please send us an email at <a href="mailto:contactrefigure@gmail.com">contactrefigure@gmail.com</a> to begin a discussion with us.
                </p>
                
                <h4 class="question">Can I reuse CoVis?</h4>

                <p class="paragraph-style">Describe the licenses for software, data and content.</p>

                <h4 class="question">Can I create my own CoVis for another research topic?</h4>

                <p class="paragraph-style">
                    CoVis is only available for Covid-19 research for now. But
                    you can automatically create knowledge maps for any research topic on <a href="https://openknowledgemaps.org" target="_blank">openknowledgemaps.org</a>. These knowledge maps are based on 150 mio. documents from any discipline.
                </p>

                <h4 class="question">How is CoVis funded?</h4>

                <p class="paragraph-style">
                   Add funder. Please <a href="contact-us">get in touch</a> if you'd like to fund us.
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