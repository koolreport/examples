<div id="report_render">
    <?php
    function randomScalingFactor()
    {
        return mt_rand(-100, 100);
    }
    $data = [
        ['month' => 'January', 'My First dataset' => randomScalingFactor(), 'My Second dataset' => randomScalingFactor()],
        ['month' => 'February', 'My First dataset' => randomScalingFactor(), 'My Second dataset' => randomScalingFactor()],
        ['month' => 'March', 'My First dataset' => randomScalingFactor(), 'My Second dataset' => randomScalingFactor()],
        ['month' => 'April', 'My First dataset' => randomScalingFactor(), 'My Second dataset' => randomScalingFactor()],
        ['month' => 'May', 'My First dataset' => randomScalingFactor(), 'My Second dataset' => randomScalingFactor()],
        ['month' => 'June', 'My First dataset' => randomScalingFactor(), 'My Second dataset' => randomScalingFactor()],
        ['month' => 'July', 'My First dataset' => randomScalingFactor(), 'My Second dataset' => randomScalingFactor()],
    ];

    \koolreport\chartjs\LineChart::create(array(
        'dataSource' => $data,
        'columns' => array(
            "month",
            "My First dataset" => array(
                "borderColor" => 'rgb(255, 99, 132)',
                "pointBackgroundColor" => 'rgb(255, 99, 132)',
                'fill' => false
            ),
            "My Second dataset" => array(
                "borderColor" => 'rgb(54, 162, 235) ',
                "pointBackgroundColor" => 'rgb(54, 162, 235)',
                'fill' => false
            )
        ),
        "options" => array(
            "responsive" => true,
            "title" => array(
                "display" => true,
                "text" => 'Chart.js Line Chart - Custom Tooltips'
            ),
            "tooltips" => array(
                "mode" => 'index',
                "position" => 'nearest',
                "enabled" => false,
                "custom" => " function(tooltip) {
                    // Tooltip Element
                    var tooltipEl = document.getElementById('chartjs-tooltip');

                    if (!tooltipEl) {
                        tooltipEl = document.createElement('div');
                        tooltipEl.id = 'chartjs-tooltip';
                        tooltipEl.innerHTML = '<table></table>';
                        this._chart.canvas.parentNode.appendChild(tooltipEl);
                    }

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
                            var span = '<span class= \"chartjs-tooltip-key\" style= \"' + style + '\"></span>';
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
                    tooltipEl.style.fontSize = tooltip.bodyFontSize + 'px';
                    tooltipEl.style.fontStyle = tooltip._bodyFontStyle;
                    tooltipEl.style.padding = tooltip.yPadding + 'px ' + tooltip.xPadding + 'px';
                }",
            ),
            "pointHitDetectionRadius" => 1
        )
    ));
    ?>
    <div id="chartjs-tooltip">
        <table></table>
    </div>
</div>