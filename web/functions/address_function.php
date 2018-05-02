<?php
/**
 * Created by PhpStorm.
 * User: Erfan_Farhan_Farin
 * Date: 10/1/2017
 * Time: 3:40 PM
 */
function create_address () {
    if (isset($_POST['submit'])) {

        $house_no = escape_string($_POST['house_no']);
        $road_no = escape_string($_POST['road_no']);
        $block_no = escape_string($_POST['block_no']);
        $police_station = escape_string($_POST['police_station']);
        $post_office = escape_string($_POST['post_office']);
        $post_code = escape_string($_POST['post_code']);
        $area_name = escape_string($_POST['area_name']);
        $area_location = escape_string($_POST['area_location']);
        $city = escape_string($_POST['city']);
        $division = escape_string($_POST['division']);

        $query = query("INSERT INTO address(house_no, road_no, block_no, police_station, post_office, post_code,
                        area_name, area_location, city, division)
                        VALUES ('{$house_no}', '{$road_no}', '{$block_no}', '{$police_station}', '{$post_office}',
                                '{$post_code}', '{$area_name}', '{$area_location}', '{$city}', '{$division}')");
        confirm($query);

        return last_id();
    }
}

function update_address ($id) {
    if (isset($_POST['update'])) {

        $house_no = escape_string($_POST['house_no']);
        $road_no = escape_string($_POST['road_no']);
        $block_no = escape_string($_POST['block_no']);
        $police_station = escape_string($_POST['police_station']);
        $post_office = escape_string($_POST['post_office']);
        $post_code = escape_string($_POST['post_code']);
        $area_name = escape_string($_POST['area_name']);
        $area_location = escape_string($_POST['area_location']);
        $city = escape_string($_POST['city']);
        $division = escape_string($_POST['division']);
        $version = (int)escape_string($_POST['a_version']) + 1;

        $query = query("UPDATE address SET
                        house_no = '$house_no',
                        road_no = '$road_no',
                        block_no = '$block_no',
                        police_station = '$police_station',
                        post_office = '$post_office',
                        post_code = '$post_code',
                        area_name = '$area_name',
                        area_location = '$area_location',
                        city = '$city',
                        division = '$division',
                        version = '$version',
                        updated = now()
                        WHERE id = '$id'
                        ");
        confirm($query);
    }
}
?>
