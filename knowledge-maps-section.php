<a name="knowledge-maps" class="anchor"></a>
<div id="km-section">  
    
<?php for($i = 0; $i < count($KNOWLEDGE_MAPS); $i++): ?>
 
    <div id="km">
        <a href="knowledge-map?id=<?php echo $SHEET_ID[$i] ?>">  
            <div id="km-title">
                Knowledge Map on <?php echo $KNOWLEDGE_MAPS[$i]["name"] ?>
            </div>
        </a>
        <div id="km-description">
            <?php echo $KNOWLEDGE_MAPS[$i]["description"] ?>
        </div>
    </div>
</a>
    
<?php endfor; ?>
    
</div>




