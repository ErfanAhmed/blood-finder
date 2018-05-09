<?php
/**
 * Created by PhpStorm.
 * User: erfan
 * Date: 5/2/18
 * Time: 11:14 PM
 */
ob_start();

/**
 * this keep the session information until removed
 * basically needed for user authentication
 */
session_start();

//DB connection configuration
defined("DB_HOST") ? null : define("DB_HOST", "localhost");
defined("DB_USER") ? null : define("DB_USER", "root");
defined("DB_PASS") ? null : define("DB_PASS", "");
defined("DB_NAME") ? null : define("DB_NAME", "blood_fighter");

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
?>