<?php

function getRootPath()
{
    return str_replace("\\","/",realpath(dirname(dirname(__FILE__))));
}

function getRootUrl()
{
    $document_root = $_SERVER["DOCUMENT_ROOT"];
    $script_name = dirname($_SERVER["SCRIPT_NAME"]);
    $root_url = $script_name;
    while(!is_file($document_root.$root_url."/reports.json"))
    {
        $root_url = dirname($root_url);
    }
    return $root_url;
}

$menu = json_decode(file_get_contents(realpath(dirname(__FILE__))."/../reports.json"),true);
$root_url = getRootUrl();