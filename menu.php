<div>
    <div class="menu">
        <!-- Menu icon -->
        <div class="icon-close">
            <i class="fa fa-times" aria-hidden="true"></i>
        </div>

        <!-- Mobile Menu -->
        <ul>
            <li><a href="index">About</a></li>
            <li><a href="knowledge-map">Covid-19 Knowledge Map</a></li>
            <li><a href="data"><i class="fas fa-pencil-alt"></i> Data Source</a></li>
            <li><a href="faqs">FAQs</a></li>
            <li><a href="contact-us">Contact us</a></li>
        </ul>
    </div>

    <div class="icon-menu">
        <span class="awesome"><i class="fas fa-bars"></i></span>
    </div>

    <!--<div class="imglogo">
        <a href="index"><img src="https://www.oeaw.ac.at/typo3conf/ext/oeaw_redesign/Resources/Public/Icons/logo-kurz.png"></a>
    </div>-->

    <p class="description">
        <a href="index">CoVis</a>
    </p>

    <ul class="nav_top">
        <li><a href="index">About</a></li>
        <li><a href="knowledge-map">Covid-19 Knowledge Map</a></li>
        <li><a href="data"><i class="fas fa-pencil-alt"></i> Data Source</a></li>
        <li><a href="faqs">FAQs</a></li>
        <li><a href="contact-us">Contact us</a></li>
    </ul>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        let hash_compare = null;
        let path_compare = null;
        $(".nav_top > li > a").each(function (key, item) {
            let hash1 = item.href.substr(item.href.lastIndexOf('#') + 1);
            let hash2 = location.hash.substr(location.hash.lastIndexOf('#') + 1);
            if (hash1 === hash2) {
                hash_compare = $(this);
            } else if (item.href.substr(item.href.lastIndexOf('/') + 1) === location.pathname.substr(location.pathname.lastIndexOf('/') + 1)) {
                path_compare = $(this);
            }
        });
        if (hash_compare !== null) {
            hash_compare.addClass("underline-menu");
        } else if (path_compare !== null) {
            path_compare.addClass("underline-menu");
        }
    });
</script>