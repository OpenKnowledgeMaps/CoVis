<!DOCTYPE html>
<?php
include 'config.php';
?>
<html>

    <head>
        <?php
        $title = "FAQs - CoVis";
        include 'head_covis.php'
        ?>
    </head>

    <body class="generalpage">
        <header>
            <?php include('menu.php'); ?>
        </header>

        <div class="page">

            <div class="page-section">

                <h1 class="page-headline">FAQs</h1>

                <h4 class="question">What is the idea behind CoVis and how did it come about?
                </h4>
                <p class="paragraph-style">This knowledge map was created with the intent to make important biomedical laboratory research on coronavirus infection and COVID-19 disease more discoverable. The collection is not meant to be exhaustive, but to offer highlights that are a jumping off point in eight key areas: immunity, vaccines, therapeutics, diagnostics, viral biology, host biology and clinical findings and epidemiology. After careful review and discussion with users from both of our intended audiences, we added an additional area, introduction to coronavirus research, which includes foundational papers in coronavirus research to those who have no prior background. Selected articles within each category have been included based on the collective review of our editorial team with consideration to the potential impact and novelty of the findings, as well as the potential to encourage and bring forward important questions during this dynamic time. New content and categories can be proposed for CoVis. For more information please <a href="contact-us">view our contact page</a>.</p>

                <h4 class="question">How do you decide what is included / excluded in the knowledge map?
                </h4>

                <p class="paragraph-style">The articles and ReFigures in CoVis are curated by a team of curators and contributors. Resources are nominated based on the interest of the individual contributor and posed for inclusion along with the rationale for inclusion. The nominated resources are discussed by curators as to their exhibited impact, or potential impact for moving the field forward. This collection is not exhaustive, but rather a single reference point for definitive research in select areas of coronavirus and COVID-19 research to accelerate the research and knowledge of researchers without prior experience in this field. However, we believe that careful, open curation makes this a resource for even experienced researchers.
                </p>

                <a class="anchor" name="contribute"></a>
                <h4 class="question">How can I contribute to CoVis?</h4>

                <p class="paragraph-style">Please <a href="contact-us">view our contact page</a>.</p>


                <h4 class="question">Who is behind CoVis?</h4>
                
                <p class="paragraph-style">
                    CoVis is a collaboration project of Open Knowledge Maps and ReFigure.
                </p>
                
                <p class="paragraph-style">
                    <a href="https://openknowledgemaps.org" target="_blank">Open Knowledge Maps</a> is a charitable nonprofit organization dedicated to improving the visibility of
                    scientific knowledge for science and society. As part of its mission, Open Knowledge Maps operates the world’s largest visual search engine for research, which enables a diverse set of audiences to explore, discover and make use of scientific content. In addition, Open Knowledge Maps carries out training events to improve literature search skills, and it enables broad community participation through its support and engagement programs.
                </p>

                <p class="paragraph-style"><a target="_blank" href="https://refigure.org/" target="_blank">ReFigure</a> is the flagship platform created by Scimpact, LLC, a social-impact startup with the mission to re-imagine the way scientific results are communicated. With a growing community of users, ReFigure makes research results more interactive to scientists of all training levels. ReFigure has demonstrated impact across scientific disciplines to encourage critical review, comparison and curation of scientific results through its novel, web-native platform.</p>

                <a class="anchor" name="knowledge-map"></a>
                <h4 class="question">What is a knowledge map?</h4>

                <p class="example">
                    <a href="./img/knowledgemap-covid-19.png" data-toggle="lightbox">
                        <img class="shadow2 abstand" src="./img/knowledgemap-covid-19.png" alt="Screenshot Knowledge Map on COVID-19 research">
                    </a>
                    <span style="font-size: 12px;">Screenshot: Knowledge Map on COVID-19 research</span>
                </p>
                <p class="paragraph-style">Knowledge maps provide an instant overview of a topic by showing the main areas at a glance, and resources related to each area annotated with keywords, comments and tags. This makes it possible to easily identify useful, pertinent information.</p>
                <p class="paragraph-style">Research areas are displayed as bubbles. By clicking on one of the bubbles, you can inspect the resources assigned to it. The size of the bubbles is relative to the number of resources assigned to it. Closeness of bubbles implies subject similarity. The closer two bubbles, the closer they are subject-wise. Centrality of bubbles implies subject similarity with the rest of the map, not importance. The closer a bubble is to the center, the closer it is subject-wise to all the other bubbles in the map.
                </p>
                <p class="paragraph-style">The knowledge map is based on the award-winning open source software <a target="_blank" href="https://github.com/OpenKnowledgeMaps/Headstart" target="_blank">Head Start</a> developed by Open Knowledge Maps. Head Start is capable of creating knowledge maps from a variety of data, including text, metadata and references. The visual interface allows the user to explore a large amount of resources with ease on a single page; those that are open access can be downloaded directly from the interface. If you have any questions please get in touch with team Open Knowledge Maps at <a href="mailto:info@openknowledgemaps.org">info@openknowledgemaps.org</a></p>

                <a class="anchor" name="methodology"></a>
                <h4 class="question">Methodology for paper inclusion</h4>
                <p class="paragraph-style">Members of the ReFigure team nominated articles based on, first, what areas they were most interested in and, second, by determining the amount of current, or potential discussion an article might engender. Other members of the team either validated the article’s selection, or offered alternatives. The articles were then sorted and annotated with the Open Knowledge Maps team to be presented optimally in the CoVis visualization. This collection is not exhaustive, but rather provides some relevant and impactful starting points for further pursuing coronavirus research. If you would like to participate, please email us your interest at <a href="mailto:contactrefigure@gmail.com">contactrefigure@gmail.com</a>.</p>



                <h4 class="question">What is a ReFigure?</h4>
                <p class="example">
                    <a href="./img/refigure-example.jpg" data-toggle="lightbox">
                        <img class="shadow2 abstand" src="./img/refigure-example.jpg" alt="Screenshot Example of a ReFigure">
                    </a>
                    <span style="font-size: 12px;">Screenshot: Example of a ReFigure</span>
                </p>
                <p class="paragraph-style">A ReFigure is a user-generated collection of figures from different scientific publications. They may be created to address a specific hypothesis, or might be a collection of results that are tied together by a single element (e.g. SARS-CoV-2 pre-clinical models, or validated anti-spike protein antibody clones). <a target="_blank" href="https://refigure.org/" target="_blank">ReFigure</a> is free to use and ReFigures can be created by anyone. If you would like to create a ReFigure and/or have it featured in CoVis <a href="faqs#contribute">please reach out</a>.
                </p>

                <h4 class="question">Can I reuse CoVis?</h4>

                <p class="paragraph-style">Unless otherwise noted, all content on CoVis is licensed under a Creative Commons Attribution 4.0 International License. The CoVis database is made available under CC0 (Public Domain Dedication). Our software is open source and hosted on <a target="_blank" href="https://github.com/OpenKnowledgeMaps/Headstart" target="_blank">Github</a>.</p>

                <h4 class="question">Can I create my own CoVis for another research topic?</h4>

                <p class="paragraph-style">
                    CoVis is only available for COVID-19 research for now. But
                    you can automatically create knowledge maps for any research topic on <a href="https://openknowledgemaps.org" target="_blank">openknowledgemaps.org</a>. These knowledge maps are based on 150 mio. documents from any discipline.
                </p>

                <h4 class="question">How is CoVis funded?</h4>
                <p class="paragraph-style">
                    This project has received funding from <a target="_blank" href="https://www.eoscsecretariat.eu/funding-opportunities/COVID-19-Fast-Track-Funding">“COVID-19 Fast Track Funding” by EOSCSecretariat</a>.
                </p>
                <p class="paragraph-style">
                    Please get in touch at <a href="mailto:info@openknowledgemaps.org">info@openknowledgemaps.org</a> if you'd like to fund us.
                </p>

                <h4 class="question">I have a question that is not listed here</h4>

                <p class="paragraph-style">
                    We'd love to hear from you! Please get in touch at <a href="mailto:info@openknowledgemaps.org">info@openknowledgemaps.org</a>.
                </p>

            </div>
        </div>

        <?php include('footer.php') ?>
    </body>

</html>