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
