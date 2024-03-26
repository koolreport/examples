This example demonstrates how to export hyperlink to an excel file.

```
    <div range="A2:H2">
        <?php
            \koolreport\excel\Hyperlink::create(array(
                //any Text widget property
                'url' => 'https://www.example.com', // override outside value or formatValue
                'text' => 'Example site'
            ));
        ?>
    </div>
```