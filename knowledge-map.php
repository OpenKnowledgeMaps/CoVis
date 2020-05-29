<!DOCTYPE html>
<?php
include 'config.php';
?>
<html>

<head>
    <?php include 'head_covis.php' ?>
    <link type="text/css" rel="stylesheet" href="./css/map.css">
</head>

<body class="knowledge-map" style="margin:0px; padding:0px; height:100%;">
    <header>
        <?php include('menu.php'); ?>
    </header>
    <div class="topheader"></div>
    <?php include "browser_unsupported_banner.php"; ?>
    <div id="visualization" class="headstart"></div>
    <div id="errors" class="errors-container"></div>
    <?php include('footer.php') ?>
    <script type="text/javascript">
        
        let elem = document.getElementById('visualization');
        
        elem.addEventListener('headstart.data.loaded', function(e) {
            let errors = e.detail.data.errors;
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
            
        });
            
    </script>
    <script type="text/javascript" src="./js/data-config.js"></script>
    <script type="text/javascript" src="<?php echo $HEADSTART_PATH ?>dist/headstart.js"></script>
    <link type="text/css" rel="stylesheet" href="<?php echo $HEADSTART_PATH ?>dist/headstart.css"></link>
    <script>
            
            data_config.server_url = "<?php echo $HEADSTART_PATH ?>server/";
            data_config.files = [{
                title: 'CoVis'
                , file: "<?php echo $SHEET_ID; ?>"
            }]
            
            $(document).ready(function () {
                headstart.start();
            })
        
    </script>
        
    <script>
        var calcDivHeight = function () {

            let height = $(window).height();
            let width = $(window).width();
            let calculated_height = 0;
            
            console.log("Height: " +height)
            console.log("Width: " +width)

            if(height <= 730 || width < 904 || (width >= 985 && width  < 1070)) {
                console.log("Height calculation min_height");
                calculated_height = 689;              
             } else if (width >= 904 && width <= 984) {
                 console.log("Height calculation no. 1")
                calculated_height = 670 + (width - 904);
            } else if (height >= 890 && width >= 1070 && width < 1400) {
                console.log("Height calculation no. 2");
                calculated_height = 670 + (width - 1070)/2;
            } else if (width >= 1441 && height >= 1053) {
                console.log("Height calculation large");
                calculated_height = 1000; 
            } else if (height >= 988 && height < 1053 && width >= 1404 && width < 1435) {
                console.log("Height calculation no. 3");
                calculated_height = 670 + (width - 1170);
            }  else {
                console.log("Height calculation default")
                calculated_height = $(window).height() - $("header").outerHeight();
            }
            
            console.log("Calculated height: " +calculated_height)

            return calculated_height;
        }

        <?php if (!isset($_GET['embed']) || $_GET['embed'] === 'false'): ?>

            $(document).ready( function () {
                $(window).on("resize", function () {
                    let div_height = calcDivHeight();
                    $("#visualization").css("height", div_height + "px")
                });
                $(window).trigger('resize');
            });

        <?php endif ?>
    </script>
    <script type="text/javascript" src="./js/menu.js "></script>

</body>

</html>
