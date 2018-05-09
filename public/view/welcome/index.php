<?php
require_once("../../../web/functions/donor_function.php");
require_once("../../../web/functions/chart_function.php");
include("../../../web/resources/template/header.php");
?>
<script type="text/javascript">

    // Load the Visualization API and the corechart package.
    google.charts.load('current', {'packages':['corechart']});

    // Set a callback to run when the Google Visualization API is loaded.
    google.charts.setOnLoadCallback(drawChart);

    // Callback that creates and populates a data table,
    // instantiates the pie chart, passes in the data and
    // draws it.
    function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();

        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');

        data.addRows(<?php echo get_count()?>);

        // Set chart options
        var options = {'title':'BLOOD GROUP VS SEARCH COUNT',
                        'width':400,
                        'height':300,
                        'is3D' : false,
                        'legend' : 'right'
        };

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));

        chart.draw(data, options);
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
                    <div id="chart_div"></div>
                </div>
            </div>
        </div>

    </div>

</div>

<?php include("../../../web/resources/template/footer.php");?>
