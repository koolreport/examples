The above example shows you how to create `ScatterChart` using ChartJs package. In this example, for purpose of chart demonstration only, we do use mock-up data from array. As you can see, the KoolReport's widget in general support dataSource could be DataStore, Process, DataSource or even simple array.

This example shows how to build a scatter chart with values ​​on the y-axis and x-axis set using a callback.

For example:

    ...
    "scales" => array(
        "xAxes" => array(
            array(
                ...
                "ticks" => array(
                    "callback" => "function(tick) {
                        var remain = tick / (Math.pow(10, Math.floor(Math.log10(tick))));
                        if (remain === 1 || remain === 2 || remain === 5) {
                            return tick.toString() + 'Hz';
                        }
                        return '';
                    }"
                ),
            )
        ),
        "yAxes" => array(
            array(
                ...
                "ticks" => array(
                    "callback" => "function (tick) {
                        return tick.toString() + 'dB';
                    }"
                ),
            )
        )
    )
