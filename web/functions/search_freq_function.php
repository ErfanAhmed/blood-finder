<?php
/**
 * Created by PhpStorm.
 * User: erfan
 * Date: 5/7/18
 * Time: 1:59 AM
 */
require_once("function.php");

function add_freq($blood_type) {

    $result = query("SELECT count FROM search_frequency WHERE blood_type = '{$blood_type}'");
    confirm($result);

    $single_result = fetch_array($result);
    $count = $single_result['count'] + 1;


    $query = query("UPDATE search_frequency SET
                        count = '{$count}'
                        WHERE blood_type = '$blood_type'
                        ");
    confirm($query);
}