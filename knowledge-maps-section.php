<a name="knowledge-maps" class="anchor"></a>
<div id="km-section" class="contribution" style="background-color: #f7f7f7; font-weight: 300;">
    <div style="max-width: 1600px; margin: 0px auto;">
     <h3 class="headline3">Discover COVID-19 Knowledge Maps</h3>
<?php for($i = 0; $i < count($KNOWLEDGE_MAPS); $i++): ?>
 
    <div class="km">
        <div class="hoverlink">
            <a href="knowledge-map?id=<?php echo $SHEET_ID[$i] ?>">
                <div width="80%" class="hoverlinkimg"></div>
            </a>
        </div>
        
        <div class="km-tile">
        <a href="knowledge-map?id=<?php echo $SHEET_ID[$i] ?>">  
            <h4 class="km-title">
                Overview of <?php echo $KNOWLEDGE_MAPS[$i]["name"] ?>
            </h4>
        </a>
        
        <p class="km-description">
            <?php echo $KNOWLEDGE_MAPS[$i]["description"] ?>
        </p>
        
        <p style="padding-top: 10px;">
            <a class="contact-btn" style="margin: 0; font-size: 18px;" href="knowledge-map?id=<?php echo $SHEET_ID[$i] ?>">View Knowledge Map</a>
        </p>
        </div>
        
    </div>
    
<?php endfor; ?>
    </div>
</div>




