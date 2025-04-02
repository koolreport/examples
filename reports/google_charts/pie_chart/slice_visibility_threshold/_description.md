The above example shows you how to create `PieChart` using built-in Google Charts. In this example, for purpose of chart demonstration only, we do use mock-up data from array. As you can see, the KoolReport's widget in general support dataSource could be DataStore, Process, DataSource or even simple array.

For example:

    ...
    $data = [
        ['Pizza', 'Populartiy'],
        ['Pepperoni', 33],
        ['Hawaiian', 26],
        ['Mushroom', 22],
        ['Sausage', 10], // Below limit.
        ['Anchovies', 9] // Below limit.
    ];

    "options" => array(
        "sliceVisibilityThreshold" => .2
    )