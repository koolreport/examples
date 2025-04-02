<?php

use \koolreport\widgets\google\WordTree;

$data = [
    ['Phrases'],
    ['cats are better than dogs'],
    ['cats eat kibble'],
    ['cats are better than hamsters'],
    ['cats are awesome'],
    ['cats are people too'],
    ['cats eat mice'],
    ['cats meowing'],
    ['cats in the cradle'],
    ['cats eat mice'],
    ['cats in the cradle lyrics'],
    ['cats eat kibble'],
    ['cats for adoption'],
    ['cats are family'],
    ['cats eat mice'],
    ['cats are better than kittens'],
    ['cats are evil'],
    ['cats are weird'],
    ['cats eat mice'],
];
?>
<div class="report-content">
    <div class="text-center">
        <h1>WordTree</h1>
        <p class="lead">
            This example shows how to use WordTree
        </p>
    </div>
    <div style="margin-bottom:50px;">
        <?php
        WordTree::create(array(
            "title" => 'Red Sox Attendance',
            "dataSource" => $data,
            "columns" => array(
                'Phrases'
            ),
            "options" => array(
                "wordtree" => array(
                    "format" => 'implicit',
                    "word" => 'cats'
                )
            )
        ));
        ?>
    </div>
</div>