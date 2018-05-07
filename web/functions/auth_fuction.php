<?php
/**
 * Created by PhpStorm.
 * User: erfan
 * Date: 5/2/18
 * Time: 11:14 PM
 */
require_once("function.php");

function login() {
    if (isset($_POST['submit'])) {

        $login_id = $_POST['login_id'];
        $password = $_POST['password'];

        $result = query("SELECT login_id, password, name 
                              FROM donor  
                              where login_id = '$login_id' 
                              and password = '$password'
                            ");

        confirm($result);

        if (mysqli_num_rows($result) == 0) {
            set_message("incorrect login id or password");
            redirect("login.php");
        } else {
            $row = fetch_array($result);

            $_SESSION['user_name'] = $row['name'];
            $_SESSION['user_id'] = $row['login_id'];

            redirect("../../view/donor/profile.php");
        }
    }
}
