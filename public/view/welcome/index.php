<?php
require_once("../../../web/functions/donor_function.php");
require_once("../../../web/functions/chart_function.php");
include("../../../web/resources/template/header.php");
?>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

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

<div class="container">

    <div class="starter-template">

        <div class="container">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-5">
                    <h2>Search </h2>
                    <div>
                        <form action="../donor/filtered_list.php" method="post" role="form">

                            <div class="form-group">
                                <select name="blood_type" class="form-control">
                                    <?php bt_dropdown() ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <select name="police_station" class="form-control">
                                    <?php ps_dropdown() ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <select name="post_office" class="form-control">
                                    <?php po_dropdown() ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <select name="city" class="form-control">
                                    <?php city_dropdown() ?>
                                </select>
                            </div>


                            <div class="form-group">
                                <button class="btn btn-info btn-lg" type="submit" name="search">
                                    <i class="glyphicon glyphicon-search"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-4">
                    <div id="chartContainer" style="height: 100px; width: 100px;"></div>
                </div>
            </div>
        </div>

    </div>

</div>

<?php include("../../../web/resources/template/footer.php");?>
