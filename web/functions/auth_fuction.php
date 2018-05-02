<?php
/**
 * Created by PhpStorm.
 * User: Erfan_Farhan_Farin
 * Date: 10/6/2017
 * Time: 8:22 PM
 */
require_once("function.php");

function login() {
    if (isset($_POST['submit'])) {
        $login_id = $_POST['login_id'];
        $password = $_POST['password'];

        $result = query("SELECT u.id as id, u.login_id as login_id, p.name as name FROM app_user u
                          JOIN person p ON u.person_id = p.id
                          where u.login_id = '$login_id' and u.password = '$password'
                        ");
        confirm($result);
        if (mysqli_num_rows($result) == 0) {
            set_message("incorrect login id or password");
            redirect("login.php");
        } else {
            $row = fetch_array($result);

            $_SESSION['user_name'] = $row['name'];
            $_SESSION['user_id'] = $row['id'];

            set_message("you successfully logged in");

            redirect("/isp/public/index.php");
        }
    }
}
