<div id="hidden" style="display: none">
    <div class="col-div col-md-6" style="padding: 25px"></div>
    <?php
    $chartExamples = [
        "line/dashed_line",
        "area/negative",
        "column/stacked_100",
        "bar/negative",
        "mixed_combo/line_column_area",
        "range_area/combo",
        "timeline/custom_colors",
        "funnel/pyramid",
        "candlestick/basic",
        "box_whisker/boxplot_scatter",
        "pie_donut/pie_monochrome",
        "pie_donut/donut_basic",
        "radar/basic",
        "polar_area/monochrome",
        "radialbar_circle/multiple",
        "radialbar_circle/stroked_gauge",
        "bubble/basic",
        "scatter/basic",
        "heatmap/color_range",
        "treemap/distributed",
    ];
    foreach ($chartExamples as $chartExample) {
        $chartType = explode("/", $chartExample)[0];
        echo "<div class='chart-example' example-name='$chartType'>";
        include "../$chartExample/MyReport.view.php";
        echo "</div>";
    }
    ?>
</div>

<div id="display" class="repport-content">
    <div class="text-center">
        <h1>ApexCharts</h1>
        <p class="lead">
            Great offline chart library with various chart types and functionalities
        </p>
    </div>
    <div class="row-div row"></div>
</div>

<script>
    function moveCharts() {
        var allChartDivs = [];
        var colDiv = document.querySelector(".col-div")
        var exampleDivs = document.querySelectorAll("#hidden .chart-example");
        exampleDivs.forEach(function(exampleDiv) {
            var exampleName = exampleDiv.getAttribute('example-name');
            var krwidgets = exampleDiv.querySelectorAll("#hidden krwidget");
            krwidgets.forEach(function(krwidget) {
                var colDivClone = colDiv.cloneNode();
                colDivClone.appendChild(krwidget.parentElement);
                var h6 = document.createElement('h6');
                h6.className = 'text-center';
                h6.textContent = exampleName;
                colDivClone.appendChild(h6);
                allChartDivs.push(colDivClone);
            });
        });

        var rowDiv = document.querySelector(".row-div");
        allChartDivs.forEach(function(chartDiv) {
            rowDiv.appendChild(chartDiv);
        })
    }
    moveCharts();
    // setTimeout(moveCharts, 2000);
</script>