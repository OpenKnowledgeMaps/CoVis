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
    <link type="text/css" rel="stylesheet" href="./map.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./menu.js "></script>
</head>

<body style="margin:0px; padding:0px; height:100%;">
    <header>
        <?php include('menu.php'); ?>
    </header>
    <div class="topheader"></div>
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
                        , text: "The following errors were detected in the data sheet:"
                    });
                $("#errors").append(errors_info);
                
                let errors_table =
                     $("<table/>", {
                         id: "errors-table"
                         , class: "errors-table"
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
        });
            
    </script>
    <script type="text/javascript" src="data-config.js"></script>
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

            if(height <= 670 || width < 904 || (width >= 985 && width  < 1070)) {
                calculated_height = 670;
            }  else {
                calculated_height = $(window).height() - $("header").outerHeight();
            }

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
</body>

</html>
