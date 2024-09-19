The above example shows you how to create `LineChart` using ChartJs package. In this example, for purpose of chart demonstration only, we do use mock-up data from array. As you can see, the KoolReport's widget in general support dataSource could be DataStore, Process, DataSource or even simple array.

This example shows you how to build a line chart with a progress bar during the chart animation using `animation`.

For example:

    ... 
    "options" => array(
        ...
        "animation" => array(
            "duration" => 2000,
            "onProgress" => "function(animation) {
                progress.value = animation.currentStep / animation.numSteps;
            }",
            "onComplete" => "function() {
                window.setTimeout(function() {
                    progress.value = 0;
                }, 2000);
            }"
        )
    )
    ...