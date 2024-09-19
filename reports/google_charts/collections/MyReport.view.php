<div id="hidden" style="display: none">
    <div class="col-div col-md-6" style="padding: 25px"></div>
    <?php
    $chartExamples = [
        'area_chart', 'bar_chart', 'color_scheme', 'column_chart', 'combo_chart', 'donut_chart',
        'gauge_chart', 'geo_chart', 'histogram_chart', 'line_chart', 'multi_annotation', 'pareto_chart',
        'pie_chart', 'sankey', 'scatter_chart', 'stepped_area_chart', 'timeline_chart', 'treemap'
    ];
    foreach ($chartExamples as $chartExample) {
        echo "<div class='chart-example' example-name='$chartExample'>";
        include "../$chartExample/MyReport.view.php";
        echo "</div>";
    }
    ?>
</div>

<div id="display" class="repport-content">
    <div class="text-center">
        <h1>Google Charts</h1>
        <p class="lead">
            Great online chart library with various chart types and functionalities
        </p>
    </div>
    <div class="row-div row text-center"></div>
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
                colDivClone.innerHTML += "<h6>" + exampleName + "</h6>";
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