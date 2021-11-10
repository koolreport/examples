This example shows how to collapse/expand row groups programmatically.

```
<?php 
DataTables::create(array(
    ...
    "name" => "MyTable1",
    "options" => [
        "buttons" => [
            [
                "text" => 'Collapse Customers',
                "action" => "function() { KRMyTable1.collapseAllGroups(0); }",
            ],
            [
                "text" => 'Expand Customers',
                "action" => "function() { KRMyTable1.expandAllGroups(0); }",
            ],
            [
                "text" => 'Toggle Customers',
                "action" => "function() { KRMyTable1.toggleAllGroups(0); }",
            ],
        ],
    ],
    "onReady" => "function() {
        MyTable1.on( 'draw.dt', function () {
            KRMyTable1.collapseAllGroups(0);
        } );
        KRMyTable1.collapseAllGroups(0);
    }",
));
?>
```