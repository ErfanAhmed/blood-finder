<?php
/**
 * Created by PhpStorm.
 * User: Erfan_Farhan_Farin
 * Date: 9/19/2017
 * Time: 9:00 PM
 */
require_once("config.php");
function redirect($location) {
    header("Location: $location");
}

function query($sql) {
    global $connection;
    return mysqli_query($connection, $sql);
}

function confirm($result) {
    global $connection;

    if (!$result) {
        die("Query Failed".mysqli_error($connection));
    }
}

function escape_string($string) {
    global $connection;

    return mysqli_real_escape_string($connection, $string);
}

function fetch_array($result) {
    return mysqli_fetch_array($result);
}

function last_id() {
    global $connection;

    return $connection->insert_id;
}

function set_message($msg) {
    if(!empty($msg)) {
        $_SESSION['message'] = $msg;
    } else {
        $msg = "";
    }
}

function get_message() {
    if(isset($_SESSION['message'])) {
        echo "
            <div class=\"alert alert-warning\">
                <strong>{$_SESSION['message']}</strong>
            </div>
        ";

        unset($_SESSION['message']);
    }
}
?>