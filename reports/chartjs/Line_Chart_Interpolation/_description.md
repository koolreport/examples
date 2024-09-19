The above example shows you how to create `LineChart` using ChartJs package. In this example, for purpose of chart demonstration only, we do use mock-up data from array. As you can see, the KoolReport's widget in general support dataSource could be DataStore, Process, DataSource or even simple array.

This example shows how to build line charts with different geometric line styles using the <code>cubicInterpolationMode</code> and <code>lineTension</code> properties.

The following interpolation modes are supported.
    'default'
    'monotone'
The 'default' algorithm uses a custom weighted cubic interpolation, which produces pleasant curves for all types of datasets.

The 'monotone' algorithm is more suited to y = f(x) datasets: it preserves monotonicity (or piecewise monotonicity) of the dataset being interpolated, and ensures local extremums (if any) stay at input data points.

If left untouched (undefined), the global options.elements.line.cubicInterpolationMode property is used.

The 'lineTension' property specifies the tension of the bezier curve of the line. Set to 0 to draw a straight line. This option is ignored if using monotone cubic interpolation.

For example:
    ...
    "columns" => array(
        'labels',
        'Cubic interpolation (monotone)' => array(
            ...
            "cubicInterpolationMode" => 'monotone'
        ),
        'Cubic interpolation (default)' => array(
            ...
        ),
        'Linear interpolation' => array(
            ...
            "lineTension" => 0
        )
    ),
