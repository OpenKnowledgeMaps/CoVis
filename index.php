<!DOCTYPE html>
<?php
include 'config.php';
?>
<html>

<head>
    <?php include 'head_covis.php' ?>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
</head>

<body style="margin:0px; padding:0px; height:100%; position: relative;">
    <div id="visualization" class="headstart"></div>
    <script type="text/javascript" src="data-config.js"></script>
    <script type="text/javascript" src="<?php echo $HEADSTART_PATH ?>dist/headstart.js"></script>
    <link type="text/css" rel="stylesheet" href="<?php echo $HEADSTART_PATH ?>dist/headstart.css"></link>
    <script type="text/javascript">
        $(document).ready(function () {
            data_config.server_url = "<?php echo $HEADSTART_PATH ?>server/";
            
            /*$.ajax({
                type: 'POST'
                , url: 'http://dev.openknowledgemaps.org/api/gsheets/search'
                , data: '{"vis_id":"covid19"}'
            })
            .done(function (data) {*/
                data_config.files = [{
                    title: 'CoVis'
                    , file: 'covis_testdata.json'
                }]
                headstart.start();
            //})
            
        })
        
    </script>
</body>

</html>
