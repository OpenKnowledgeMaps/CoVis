<!DOCTYPE html>
<?php
include 'config.php';
?>
<html>

<head>
    <?php include 'head_covis.php' ?>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <link type="text/css" rel="stylesheet" href="./map.css">
</head>

<body style="margin:0px; padding:0px; height:100%; position: relative;">
    <div id="visualization" class="headstart"></div>
    <div id="errors" class="errors-container"></div>
    <script type="text/javascript" src="data-config.js"></script>
    <script type="text/javascript" src="<?php echo $HEADSTART_PATH ?>dist/headstart.js"></script>
    <link type="text/css" rel="stylesheet" href="<?php echo $HEADSTART_PATH ?>dist/headstart.css"></link>
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
                        , text: "Errors in the data sheet were detected:"
                    });
                $("#errors").append(errors_info);
                
                let errors_table =
                     $("<table/>", {
                         id: "errors-table"
                         , class: "errors-table"
                     });   
                
                $("#errors").append(errors_table);
                
                /*$("<tr/>", {
                    id: "top-row"
                    , class: "top-row"
                }).appendTo("#errors-table");

                for (let field of ["Row", "Column", "Details"]) {
                    $("<th/>", {
                        id: "error-row-top"
                        , text: field
                    }).appendTo("#top-row");

                }*/
                
                for (let error_num in errors) {
                    let current_id = "error-row-" + error_num;
                    $("<tr/>", {
                        id: current_id
                        , class: "error-row-entry"
                    }).appendTo("#errors-table")
                    
                    $("<td/>", {
                        id: "error-row-row"
                        , class: "error-row-entry"
                        , text: errors[error_num].reason
                    }).appendTo("#" + current_id)
                }
                                          
            }
        });
        
        $(document).ready(function () {
            data_config.server_url = "<?php echo $HEADSTART_PATH ?>server/";
            data_config.files = [{
                title: 'CoVis'
                , file: "<?php echo $SHEET_ID; ?>"
            }]
            
            headstart.start();
        })
        
    </script>
</body>

</html>
