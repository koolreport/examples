<div id="hidden" style="display: none">
    <div class="col-div col-md-6" style="padding: 25px"></div>
    <?php
    $chartExamples = [
        "basic",
        "multiple",
        "custom_angle",
        "gradient",
        "with_image",
        "stroked_gauge",
        "semi_cirle_gauge"
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