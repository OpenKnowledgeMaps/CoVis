<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php

if($EXTERNAL_COMPONENTS) {
    
    $default_labels = array(
        "title" => "CoVis"
        , "app-name" => "CoVis"
        , "description" => ""
        , "url" => (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"
        , "twitter-type" => "summary"
        , "twitter-image" => ""
        , "fb-image" => ""
    );
    
    include $EXTERNAL_COMPONENTS_PATH . "head_components/meta_tags.php";
}

?>

<link type="text/css" rel="stylesheet" href="./css/menu.css">
<link type="text/css" rel="stylesheet" href="./css/main.css">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script type="text/javascript" src="./js/menu.js "></script>