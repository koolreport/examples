<?php
    use \koolreport\widgets\google\Timeline;
?>
<div class="report-content">
    <div class="text-center">
        <h1>Timeline</h1>
        <p class="lead">
            This example shows how to use Timeline
        </p>
    </div>
        
    <?php
    Timeline::create(array(
        "dataSource"=>$this->dataStore("data"),
        "columns"=>array(
            "President",
            "Start"=>array(
                "type"=>"date",
            ),
            "End"=>array(
                "type"=>"date",
            )
        )
    ));
    ?>
    
</div>
