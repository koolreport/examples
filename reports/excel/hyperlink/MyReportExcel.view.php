<?php
    $sheet1 = "Report";
?>

<div sheet-name="<?php echo $sheet1; ?>">
    <div cell="A1" range="A1:H1">
        Report
    </div>

    <div range="A2:H2">
        <?php
            \koolreport\excel\Hyperlink::create(array(
                //any Text widget property
                'url' => 'https://www.example.com', // override outside value or formatValue
                'text' => 'Example site'
            ));
        ?>
    </div>
</div>