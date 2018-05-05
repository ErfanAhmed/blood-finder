<?php
/**
 * Created by PhpStorm.
 * User: Erfan_Farhan_Farin
 * Date: 9/19/2017
 * Time: 9:00 PM
 */
ob_start();
session_start();

//DB connection configuration
defined("DB_HOST") ? null : define("DB_HOST", "localhost");
defined("DB_USER") ? null : define("DB_USER", "root");
defined("DB_PASS") ? null : define("DB_PASS", "");
defined("DB_NAME") ? null : define("DB_NAME", "blood_fighter");

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
?>