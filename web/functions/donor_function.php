<?php
/**
 * Created by PhpStorm.
 * User: erfan
 * Date: 5/2/18
 * Time: 11:14 PM
 */
require_once("function.php");
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

function save_package() {
    if (isset($_POST['submit'])) {

        $name = escape_string($_POST['name']);
        $speed = escape_string($_POST['speed']);
        $price = escape_string($_POST['price']);
        $description = escape_string($_POST['description']);

        $query = query("INSERT INTO package(name, speed, price, description) VALUES ('{$name}', '{$speed}', '{$price}',
                      '{$description}')");
        confirm($query);
        redirect("index.php");
    }
}

function update_package() {
    if(isset($_POST['update'])) {

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

function package_dropdown() {
    $result = query("SELECT id, name FROM package");
    confirm($result);
    echo "<option value='' disabled>Select package</option>";

    while($row = fetch_array($result)) {
        echo "<option value='{$row['id']}'>{$row['name']}</option>";
    }
}