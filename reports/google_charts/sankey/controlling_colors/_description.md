The above example shows you how to create `Sankey` using built-in Google Charts.

For example:

    ...
    "options" => array(
                "sankey" => array(
                    "node" => array(
                        "colors" => [
                            '#a6cee3',
                            '#b2df8a',
                            '#fb9a99',
                            '#fdbf6f',
                            '#cab2d6',
                            '#ffff99',
                            '#1f78b4',
                            '#33a02c'
                        ]
                    ),
                    "link" => array(
                        "colorMode" => 'gradient',
                        "colors" => ['#a6cee3', '#b2df8a', '#fb9a99', '#fdbf6f', '#cab2d6', '#ffff99', '#1f78b4', '#33a02c']
                    )
                )
            )