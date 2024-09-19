<div id="report_render" style="width: 50%;">
	<?php
	function randomScalingFactor()
	{
		return mt_rand(-100, 100);
	}
	$data = [
		['labels' => 'Red', 'series1' => 300],
		['labels' => 'Orange', 'series1' => 50],
		['labels' => 'Yellow', 'series1' => 100],
		['labels' => 'Green', 'series1' => 40],
		['labels' => 'Blue', 'series1' => 10],
	];

	\koolreport\chartjs\PieChart::create(array(
		'dataSource' => $data,
		'columns' => array(
			'labels',
			"series1"
		),
		"colorScheme" => array(
			"rgb(255, 99, 132)",
			"rgb(255, 159, 64)",
			"rgb(255, 205, 86)",
			"rgb(75, 192, 192)",
			"rgb(54, 162, 235)"
		),
		"options" => array(
			"responsive" => true,
			"legend" => array(
				'display' => false,
			),
			'tooltips' => array(
				'enabled' => false,
				"custom" => "function(tooltip) {
			    	// Tooltip Element
			        var tooltipEl = document.getElementById('chartjs-tooltip');

			        // Hide if no tooltip
			        if (tooltip.opacity === 0) {
				        tooltipEl.style.opacity = 0;
				        return;
			        }

			        // Set caret Position
			        tooltipEl.classList.remove('above', 'below', 'no-transform');
			        if (tooltip.yAlign) {
				        tooltipEl.classList.add(tooltip.yAlign);
			        } else {
				        tooltipEl.classList.add('no-transform');
			        }

			        function getBody(bodyItem) {
				        return bodyItem.lines;
			        }

			        // Set Text
			        if (tooltip.body) {
				        var titleLines = tooltip.title || [];
				        var bodyLines = tooltip.body.map(getBody);

				        var innerHtml = '<thead>';

				        titleLines.forEach(function(title) {
					        innerHtml += '<tr><th>' + title + '</th></tr>';
				        });
				        innerHtml += '</thead><tbody>';

				        bodyLines.forEach(function(body, i) {
					        var colors = tooltip.labelColors[i];
					        var style = 'background:' + colors.backgroundColor;
					        style += '; border-color:' + colors.borderColor;
					        style += '; border-width: 2px';
					        var span = '<span class=\"chartjs-tooltip-key\" style=\"' + style + '\"></span>';
					        innerHtml += '<tr><td>' + span + body + '</td></tr>';
				        });
				        innerHtml += '</tbody>';

				        var tableRoot = tooltipEl.querySelector('table');
				        tableRoot.innerHTML = innerHtml;
			        }

			        var positionY = this._chart.canvas.offsetTop;
			        var positionX = this._chart.canvas.offsetLeft;

			        // Display, position, and set styles for font
			        tooltipEl.style.opacity = 1;
			        tooltipEl.style.left = positionX + tooltip.caretX + 'px';
			        tooltipEl.style.top = positionY + tooltip.caretY + 'px';
			        tooltipEl.style.fontFamily = tooltip._bodyFontFamily;
			        tooltipEl.style.fontSize = tooltip.bodyFontSize;
			        tooltipEl.style.fontStyle = tooltip._bodyFontStyle;
			        tooltipEl.style.padding = tooltip.yPadding + 'px ' + tooltip.xPadding + 'px';
		        }"
			),
			"pointHitDetectionRadius" => 1
		)
	));
	?>
	<div id="chartjs-tooltip">
		<table></table>
	</div>
</div>