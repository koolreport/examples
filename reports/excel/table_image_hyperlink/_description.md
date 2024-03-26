This example demonstrates how to export table with image and hyperlink columns to an excel file.

```
<div>
    <?php
    \koolreport\excel\Table::create(array(
        'columns' => [
            'image' => [
                'formatValue' => function($value, $row, $ckey, $meta) {
                    return '/Users/dongnl/Downloads/report.jpg';
                },
                'cellType' => 'image',
            ],
            'url' => [
                'formatValue' => function ($value, $row, $ckey, $meta) {
                    return 'https://www.example.com';
                },
                'cellType' => 'hyperlink',
            ]
        ],
        ...
    ));
    ?>
</div>
```