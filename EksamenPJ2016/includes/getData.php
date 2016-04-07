<?php
/**
 * Created by PhpStorm.
 * User: Labbetuss
 * Date: 07.04.2016
 * Time: 21.07
 */

require 'config.inc.php';

function returnData()
{
    global $dbc;
    $sqlSelect = "SELECT postTitle, postContent, postDate FROM blog_posts WHERE type = 'Alle' ORDER BY postID DESC LIMIT 3;";

    $selectResult = mysqli_query($dbc, $sqlSelect);
    $returnArray = array();
    while ($row = mysqli_fetch_array($selectResult, MYSQLI_ASSOC)) {
        $returnArray[] = $row;
    }

    return $returnArray;
}
