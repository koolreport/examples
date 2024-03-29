<div id="hidden" style="display: none">
    <div class="col-div col-md-6" style="padding: 25px"></div>
    <?php
    $chartExamples = [
        "column_chart", "bar_chart", "line_chart", "area_chart", "pie_chart", "donut_chart",
        "spline_chart", "funnel_chart", "waterfall", 
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
        <h1>D3 Charts</h1>
        <p class="lead">
            Utilized the power of great D3js library at client-side, D3 package provides you a large range of chart types with various customization.
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
    // setTimeout(moveCharts, 200);
</script>