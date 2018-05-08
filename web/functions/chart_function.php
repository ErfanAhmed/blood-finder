<?php
/**
 * Created by PhpStorm.
 * User: erfan
 * Date: 5/8/18
 * Time: 2:07 AM
 */
require_once("function.php");

function get_count() {
    $result = query("SELECT blood_type, count FROM search_frequency WHERE id > 0");
    confirm($result);

    $data_points[] = array();

    while ($row = fetch_array($result)) {
        $data_points[] = array("label"=>$row['blood_type'], "y"=>$row['count']);
    }

    return $data_points;
}

?>
<!DOCTYPE HTML>
<html>
<head>
    <script>
        window.onload = function () {

            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                theme: "light2", // "light1", "light2", "dark1", "dark2"
                title: {
                    text: "Blood Group VS Search count",
                    fontSize: 20
                },
                axisY: {
                    title: "Search Count",
                    includeZero: false
                },
                data: [{
                    type: "column",
                    dataPoints: <?php echo json_encode(get_count(), JSON_NUMERIC_CHECK); ?>
                }]
            });
            chart.render();

        }
    </script>
</head>
<body>
<div id="chartContainer" style="height: 400px; width: 500px;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>
