<?php
/**
 * Created by PhpStorm.
 * User: Erfan_Farhan_Farin
 * Date: 10/6/2017
 * Time: 11:02 PM
 */
require_once("function.php");

if (isset($_SESSION['user_name']) || isset($_SESSION['user_id'])) {
    unset($_SESSION['user_name']);
    unset($_SESSION['user_id']);
    redirect("../../public/view/auth/login.php");
} else {
    redirect("../../public/view/auth/login.php");
}
?>
