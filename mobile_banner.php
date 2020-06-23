<?php
    require_once $LIB_PATH . 'MobileDetect/Mobile_Detect.php';
    $detect = new Mobile_Detect;
    if ($detect->isMobile()): ?>

    <div class="alert alert-warning" id="desktop-warning">

        <a class="close" data-dismiss="alert">&times;</a>

        <span style="font-weight:bold;">Note:</span> the knowledge map is not optimized for mobile yet, you may encounter some rough edges.

    </div>

    <script>
        $(document).ready(function () {
            $('.reload-button').addClass('mobile');
        });
    </script>
<?php endif; ?>
