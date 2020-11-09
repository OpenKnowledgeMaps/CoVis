<!DOCTYPE html>
<?php
include 'config.php';
?>
<html>

<head>
    
    <?php 
        $title = "COVID-19 Knowledge Map - CoVis";
        include 'head_covis.php';
        $km_id_get = filter_input(INPUT_GET, "id", FILTER_SANITIZE_STRING);
        $km_id = ($km_id_get === null || $km_id_get === false)?($SHEET_ID[0]):($km_id_get);
        $km_index = array_search($km_id, $SHEET_ID);
        $km_name = $KNOWLEDGE_MAPS[$km_index]["name"];
        $km_description = $KNOWLEDGE_MAPS[$km_index]["description"];
    ?>
    <link type="text/css" rel="stylesheet" href="./css/map.css">
</head>

<body class="knowledge-map" style="margin:0px; padding:0px; height:100%;">
    <header>
        <?php include('menu.php'); ?>
    </header>
    <div class="topheader"></div>
    <?php include "browser_unsupported_banner.php"; ?>
    <?php include "mobile_banner.php"; ?>
    <div id="visualization" class="headstart"></div>
    <div id="errors" class="errors-container"></div>
    <div id="reload" class="reload-button"><i class="fas fa-redo"></i><span id="reload-text"> An update is available <br><a id="reload" class="dismiss-reload">reload now</a> or <a id="dismiss-reload" class="dismiss-reload">do it later</a></span></div>
    <?php include('footer.php') ?>
    <script type="text/javascript">
        
        function displayErrors(errors) {
            if(errors.length > 0) {
                $("#errors").addClass("show-errors")
                
                let errors_info =
                    $("<p/>", {
                        id: "errors-info"
                        , class: "errors-info"
                        , html: '<i id="expand-icon" class="fa fa-plus-circle expand-icon" aria-hidden="true"/> The following errors were detected in the data sheet:</i>'
                    });
                $("#errors").append(errors_info);
                
                let errors_table =
                     $("<table/>", {
                         id: "errors-table"
                         , class: "errors-table errors-table-hidden"
                     });   
                
                $("#errors").append(errors_table);
                
                $("<tr/>", {
                    id: "top-row"
                    , class: "top-row"
                }).appendTo("#errors-table");

                for (let field of ["Row", "Column", "Details"]) {
                    $("<th/>", {
                        class: "error-row-top"
                        , text: field
                    }).appendTo("#top-row");

                }
                
                for (let error_num in errors) {
                    let current_id = "error-row-" + error_num;
                    $("<tr/>", {
                        id: current_id
                        , class: "error-row-entry"
                    }).appendTo("#errors-table")
                    
                    for (let field of ["row", "column", "reason"]) {
                        $("<td/>", {
                            id: "error-row-row"
                            , class: "error-row-entry"
                            , text: errors[error_num][field]
                        }).appendTo("#" + current_id)
                    }
                }
                                          
            }
            
            $("#errors-info").on("click", function () {
                $("#errors-table").toggleClass("errors-table-hidden");
                $("#expand-icon").toggleClass("fa-minus-circle");
            });
        }
        
        function updateCheck(context) {
            $.getJSON("<?php echo $HEADSTART_PATH ?>server/services/GSheetUpdateAvailable.php?vis_id=<?php echo $km_id ?>&gsheet_last_updated=" + encodeURIComponent(context.last_update),
                        function(output) {
                            if (output.update_available) {
                                $("#reload").addClass("show-reload-button");
                                $("#reload-text").removeClass("hide-reload-text");
                                window.clearInterval(check_update);
                            }
                        });
        }
        
        <?php if(isset($DEBUG) && $DEBUG === true): ?>
            function updateMap() {
                $.getJSON("<?php echo $HEADSTART_PATH ?>server/services/updateGSheetsMap.php?q=covis&sheet_id=<?php echo $km_id ?>&gsheet_last_updated=" + encodeURIComponent(context.last_update),
                            function(output) {
                            });
            }

            var update_map = window.setInterval(updateMap, 45000);
        <?php endif; ?>
        
        let elem = document.getElementById('visualization');
        var check_update = null;
        
        elem.addEventListener('headstart.data.loaded', function(e) {
            let errors = e.detail.data.errors;
            displayErrors(errors);
            check_update = window.setInterval(updateCheck, 6000, e.detail.data.context);
            
        });
            
    </script>
    <script type="text/javascript" src="./js/data-config.js"></script>
    <script type="text/javascript" src="<?php echo $HEADSTART_PATH ?>dist/headstart.js"></script>
    <link type="text/css" rel="stylesheet" href="<?php echo $HEADSTART_PATH ?>dist/headstart.css"></link>
    <script>
            
            data_config.server_url = window.location.href.replace(/[^/]*$/, '') + "<?php echo $HEADSTART_PATH ?>server/";
            data_config.files = [{
                title: 'CoVis'
                , file: "<?php echo $km_id; ?>"
            }]
            data_config.title = "Knowledge map of <b><?php echo $km_name ?> on COVID-19</b>";
            data_config.intro = {
                title: "Knowledge map of <?php echo $km_name ?> on COVID-19"
                , body: "<p><?php echo $km_description ?></p><h3>About Covis</h3><p>CoVis was created with the intent to make important biomedical laboratory research on coronavirus infection and COVID-19 disease more discoverable. The knowledge maps are not meant to be exhaustive, but to offer a single reference point for definitive research in key areas. CoVis makes it easier to get started on the topic - but also helps you to stay up-to-date. The knowledge maps are constantly evolving thanks to the collective editing of subject-matter experts.</p><p><a class='link-popup' href='faqs'>Read our FAQs to find out more</a>.</p><h3>Data Source curated by ReFigure</h3><p>The articles, datasets and ReFigures in CoVis are curated by an editorial team led by immunologists and ReFigure founders Dr. Girija Goyal and Dr. James Akin. Given the fast pace of research and the limited historical data on COVID-19, many findings are under debate and only understandable after reading several reports from different sources. Team <a target='_blank' class='link-popup' href='https://refigure.org/'>ReFigure</a> creates visual, easy to understand, annotated, figure collections which provide analyses and consensus on key issues.</p><p>Find out more about the curation process and the methodology for paper inclusion <a class='link-popup' href='faqs#methodology'>in our FAQs</a>. We invite subject-matter experts to help us with our efforts. If you would like to contribute to CoVis, please <a class='link-popup' href='contact-us'>get in touch</a>.</p><h3>Software created by Open Knowledge Maps</h3><p>The resources selected for inclusion in CoVis are visualized in knowledge maps. Knowledge maps provide an instant overview of a topic by showing the main areas at a glance, and resources related to each area. This makes it possible to easily identify useful, pertinent information. The knowledge maps are based on award-winning software <a target='_blank' class='link-popup' href='https://openknowledgemaps.org/'>developed by Open Knowledge Maps</a>.</p><p>In the knowledge map, research areas are displayed as bubbles. By clicking on one of the bubbles, you can inspect the resources assigned to it; open access papers can be directly viewed and downloaded within the interface. Find out more about knowledge maps and their properties <a class='link-popup' href='faqs#knowledge-map'>in our FAQs</a>.</p>"
    },
            
            $(document).ready(function () {
                headstart.start();
            })
        
    </script>
        
    <script>
        var calcDivHeight = function () {

            let height = $(window).height();
            let width = $(window).width();
            let calculated_height = 0;
            let calculation_method = "";

            if(height <= 730 || width < 904 || (width >= 985 && width  < 1070)) {
                calculation_method = "Height calculation min_height";
                calculated_height = 689;              
             } else if (width >= 904 && width <= 984) {
                 calculation_method = "Height calculation no. 1";
                calculated_height = 670 + (width - 904);
            } else if (height >= 890 && width >= 1070 && width < 1400) {
                calculation_method = "Height calculation no. 2";
                calculated_height = 670 + (width - 1070)/2;
            } else if (width >= 1441 && height >= 1053) {
                calculation_method = "Height calculation large";
                calculated_height = 1000; 
            } else if (height >= 988 && height < 1053 && width >= 1404 && width < 1435) {
                calculation_method = "Height calculation no. 3";
                calculated_height = 670 + (width - 1170);
            }  else {
                calculation_method = "Height calculation default";
                calculated_height = $(window).height() - $("header").outerHeight();
            }
            
            <?php if(isset($DEBUG) && $DEBUG === true): ?>
                console.log("Height: " +height);
                console.log("Width: " +width);
                console.log("Calculation method: " +calculation_method);
                console.log("Calculated height: " +calculated_height);
            <?php endif; ?>

            return calculated_height;
        }

        <?php if (!isset($_GET['embed']) || $_GET['embed'] === 'false'): ?>

            $(document).ready( function () {
                $(window).on("resize", function () {
                    let div_height = calcDivHeight();
                    $("#visualization").css("height", div_height + "px")
                });
                $(window).trigger('resize');
                
                $("#reload").on("click", function () {
                    location.reload();
                });
                
                $("#dismiss-reload").on("click", function (event) {
                    $("#reload-text").addClass("hide-reload-text");
                    event.stopPropagation() 
                });
            });

        <?php endif ?>
    </script>
    <script type="text/javascript" src="./js/menu.js "></script>

</body>

</html>
