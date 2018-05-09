<?php
/**
 * Created by PhpStorm.
 * User: erfan
 * Date: 5/8/18
 * Time: 2:07 AM
 */
require_once("function.php");

function get_count() {
    $result = query("SELECT blood_type, count FROM search_frequency WHERE id > 0");
    confirm($result);

    $data_points[] = array("",0);

    while ($row = fetch_array($result)) {
        $temp = array((string)$row['blood_type'], (int)$row['count']);
        $data_points[] = $temp;
    }

    return json_encode($data_points);
}

?>