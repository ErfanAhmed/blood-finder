<?php
/**
 * Created by PhpStorm.
 * User: erfan
 * Date: 5/2/18
 * Time: 11:14 PM
 */
require_once("function.php");
require_once("address_function.php");

function get_donor_list() {
    $result = query("SELECT * FROM donor WHERE status = 'ACTIVE'");
    confirm($result);

    $i = 1;
    while ($row = fetch_array($result)) {
        echo "
            <tr style='text-align: left'>
    			<td>{$i}</td>
    			<td>{$row['name']}</td>
    			<td>{$row['phone_no']}</td>
    			<td>{$row['email']}</td>
    			<td>{$row['address_id']}</td>
    			<td>{$row['status']}</td>
    			<td><a href='edit.php?id={$row['id']}'>Edit</a></td>
    			<td>
    			    <form action='/isp/resources/package_function.php' method='post' role='form'>
                        <input type='hidden' name='id' id='id' value='{$row['id']}'>
                        <button type='delete' name='delete' class='btn btn-primary'>Discontinue</button>
                    </form>
    			</td>
    		</tr>
        ";
        $i++;
    }
}

function search_donor() {
    if (isset($_POST['search'])) {

        $blood_type = escape_string($_POST['blood_type']);
        $police_station = escape_string($_POST['police_station']);
        $post_office = escape_string($_POST['post_office']);
        $city = escape_string($_POST['city']);

        $result = query("SELECT * FROM donor d
                              JOIN address a
                              ON d.address_id = a.id
                              WHERE d.status = 'ACTIVE'
                              AND d.blood_type = '{$blood_type}'
                              AND a.police_station = '{$police_station}'
                              AND a.post_office = '{$post_office}'
                              AND a.city = '{$city}'");

        confirm($result);

        $i = 1;
        while ($row = fetch_array($result)) {
            echo "
            <tr style='text-align: left'>
    			<td>{$i}</td>
    			<td>{$row['name']}</td>
    			<td>{$row['blood_type']}</td>
    			<td>{$row['phone_no']}</td>
    			<td>{$row['email']}</td>
    		</tr>
        ";
            $i++;
        }
    }
}

function register_donor() {
    if (isset($_POST['submit'])) {

        $address = create_address();

        $name = escape_string($_POST['name']);
        $login_id = escape_string($_POST['login_id']);
        $password = escape_string($_POST['password']);
        $phone_no = escape_string($_POST['phone_no']);
        $email = escape_string($_POST['email']);
        $nid_no = escape_string($_POST['nid_no']);
        $address_id = escape_string($address);

        $query = query("INSERT INTO donor(name, login_id, password, phone_no, email, nid_no, address_id) 
                            VALUES ('{$name}', '{$login_id}', '{$password}', '{$phone_no}', '{$email}', '{$nid_no}',
                             '{$address_id}')");

        confirm($query);
        redirect("list.php");
    }
}

function update_package() {
    if (isset($_POST['update'])) {

        $id = escape_string($_POST['id']);
        $name = escape_string($_POST['name']);
        $speed = escape_string($_POST['speed']);
        $price = (int)escape_string($_POST['price']);
        $description = escape_string($_POST['description']);
        $version = (int)escape_string($_POST['version']) + 1;

        $query = query("UPDATE package SET
                        name = '$name',
                        speed = '$speed',
                        price = '$price',
                        description = '$description',
                        version = '$version',
                        updated = now()
                        WHERE id = '$id'
                        ");
        confirm($query);

        redirect("/isp/public/package/index.php");
    }
}

delete_package();
function delete_package() {
    if (isset($_POST['delete'])) {
        $id = escape_string($_POST['id']);

        $query = query("UPDATE package SET
                        status = 'DELETED'
                        WHERE id = '$id'
                        ");
        confirm($query);

        redirect("/isp/public/package/index.php");
    }
}

function bt_dropdown() {
    $result = query("SELECT distinct blood_type FROM donor");
    confirm($result);

    echo "<option value='' disabled>Select package</option>";

    while ($row = fetch_array($result)) {
        echo "<option value='{$row['blood_type']}'>{$row['blood_type']}</option>";
    }
}

function city_dropdown() {
    $result = query("SELECT distinct city FROM address");
    confirm($result);

    echo "<option value='' disabled>Select package</option>";

    while ($row = fetch_array($result)) {
        echo "<option value='{$row['city']}'>{$row['city']}</option>";
    }
}

function ps_dropdown() {
    $result = query("SELECT distinct police_station FROM address");
    confirm($result);

    echo "<option value='' disabled>Select package</option>";

    while ($row = fetch_array($result)) {
        echo "<option value='{$row['police_station']}'>{$row['police_station']}</option>";
    }
}

function po_dropdown() {
    $result = query("SELECT distinct post_office FROM address");
    confirm($result);

    echo "<option value='' disabled>Select package</option>";

    while ($row = fetch_array($result)) {
        echo "<option value='{$row['post_office']}'>{$row['post_office']}</option>";
    }
}