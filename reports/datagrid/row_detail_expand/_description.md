How to expand row details programmatically.

```
<?php 
DataTables::create(array(
    ...
    "options" => [
        "buttons" => [
            [
                "text" => 'Toggle details',
                "action" => "function() { KRrowDetailTable.toggleAllRowDetails(); }",
            ],
            [
                "text" => 'Expand details',
                "action" => "function() { KRrowDetailTable.expandAllRowDetails(); }",
            ],
            [
                "text" => 'Collapse details',
                "action" => "function() { KRrowDetailTable.collapseAllRowDetails(); }",
            ],
        ],
    ],
    "onReady" => "function() {
        rowDetailTable.on( 'draw', function () {
            KRrowDetailTable.expandAllRowDetails();
        } );
        KRrowDetailTable.expandAllRowDetails();
    }",
));
?>
```