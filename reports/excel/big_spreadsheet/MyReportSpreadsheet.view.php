<?php
    use \koolreport\excel\Table;

    $sheet1 = "Sales by Customer";
?>
<meta charset="UTF-8">

<div sheet-name="<?php echo $sheet1; ?>">
    <?php
    $spreadsheetStyle = [
		'font' => [
			'bold' => false,
			'italic' => true,
			'underline' => false,
			'strikethrough' => true,
			'name' => 'Arial',
			'size' => '14',
			'color' => '808080',
		],
		'border' => [
			// 'color' => '000000',
			'width' => 'thick', //'thin', 'medium', 'thick'
			// 'style' => 'solid', //'none', 'solid', 'dashed', 'dotted', 'double'.
			'top' => [
				'color' => '000000',
				'width' => 'medium', //'thin', 'medium', 'thick'
				'style' => 'solid', //'none', 'solid', 'dashed', 'dotted', 'double'.
			],
			'right' => [],
			'bottom' => [],
			'left' => [],
		],
		'backgroundColor' => '00ff00',
		'wrapText' => true,
	];
    ?>
    <div>
        Sales Report
    </div>

    <div>Orders</div>

    <div>
        <?php
        Table::create(array(
            "dataSource" => $this->dataStore('sales'),
        ));
        ?>
    </div>
    
</div>
