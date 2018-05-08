<?php
/**
 * Created by PhpStorm.
 * User: Erfan_Farhan_Farin
 * Date: 10/1/2017
 * Time: 3:40 PM
 */
require_once("function.php");
function create_address () {
    if (isset($_POST['submit'])) {

        $police_station = strtoupper(escape_string($_POST['police_station']));
        $post_office = strtoupper(escape_string($_POST['post_office']));
        $post_code = escape_string($_POST['post_code']);
        $city = strtoupper(escape_string($_POST['city']));
        $division = strtoupper(escape_string($_POST['division']));

        $query = query("INSERT INTO address(police_station, post_office, post_code, city, division)
                        VALUES ('{$police_station}', '{$post_office}', '{$post_code}', '{$city}', '{$division}')");

        confirm($query);

        return last_id();
    }
}

function update_address () {
    if (isset($_POST['update'])) {

        $id = escape_string($_POST['a_id']);
        $police_station = strtoupper(escape_string($_POST['police_station']));
        $post_office = strtoupper(escape_string($_POST['post_office']));
        $post_code = escape_string($_POST['post_code']);
        $city = strtoupper(escape_string($_POST['city']));
        $division = strtoupper(escape_string($_POST['division']));
        $version = (int)escape_string($_POST['version']) + 1;

        $query = query("UPDATE address SET
                        police_station = '$police_station',
                        post_office = '$post_office',
                        post_code = '$post_code',
                        city = '$city',
                        division = '$division',
                        version = '$version',
                        updated = now()
                        WHERE id = $id
                        ");
        confirm($query);

        set_message("Address updated successfully");
        redirect("profile.php");
    }
}
?>
