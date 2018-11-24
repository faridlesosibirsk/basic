<?php

use yii\helpers\Html;
?>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<div id="chart_div"></div>
<script type="text/javascript">
    google.charts.load('current', {'packages': ['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

        var data = new google.visualization.DataTable();
        data.addColumn('datetime', 'Time of Day');
        data.addColumn('number', 'Motivation Level');

        data.addRows([
            [new Date(2015, 0, 1, 0), -5], [new Date(2015, 0, 1, 0, 30), -5.1],
            [new Date(2015, 0, 1, 1), -6.2], [new Date(2015, 0, 1, 2), -7],
            [new Date(2015, 0, 1, 3), -6.4], [new Date(2015, 0, 1, 4), -3],
            [new Date(2015, 0, 1, 5), -4], [new Date(2015, 0, 1, 6), -4.2],
            [new Date(2015, 0, 1, 7), -1], [new Date(2015, 0, 1, 8), -2.7],
            [new Date(2015, 0, 1, 9), -3.9], [new Date(2015, 0, 1, 10), -3.8],
            [new Date(2015, 0, 1, 11), -5], [new Date(2015, 0, 1, 12), -6.2],
            [new Date(2015, 0, 1, 13), -7.8], [new Date(2015, 0, 1, 14), -9.1],
            [new Date(2015, 0, 1, 15), -8], [new Date(2015, 0, 1, 16), -6.8],
            [new Date(2015, 0, 1, 17), -7.2], [new Date(2015, 0, 1, 18), -4],
            [new Date(2015, 0, 1, 19), -5.9], [new Date(2015, 0, 1, 20), -6.3],
            [new Date(2015, 0, 1, 21), -6], [new Date(2015, 0, 1, 22), -3],
            [new Date(2015, 0, 1, 23), -2.2], [new Date(2015, 0, 2, 0), -2.4],
            [new Date(2015, 0, 2, 1), -3.6], [new Date(2015, 0, 2, 2), -4],
            [new Date(2015, 0, 2, 3), -5.5], [new Date(2015, 0, 2, 4), -7.1],
            [new Date(2015, 0, 2, 5), -6], [new Date(2015, 0, 2, 6), -7.8],
            [new Date(2015, 0, 2, 7), -8.2], [new Date(2015, 0, 2, 8), -9],
        ]);

        var options = {
            width: 900,
            height: 500,
            legend: {position: 'none'},
            enableInteractivity: false,
            chartArea: {
                width: '85%'
            },
            hAxis: {
                viewWindow: {
                    min: new Date(2014, 11, 31, 18),
                    max: new Date(2015, 0, 3, 1)
                },
                gridlines: {
                    count: -1,
                    units: {
                        days: {format: ['MMM dd']},
                        hours: {format: ['HH:mm', 'ha']},
                    }
                },
                minorGridlines: {
                    units: {
                        hours: {format: ['hh:mm:ss a', 'ha']},
                        minutes: {format: ['HH:mm a Z', ':mm']}
                    }
                }
            }
        };

        var chart = new google.visualization.LineChart(
                document.getElementById('chart_div'));

        chart.draw(data, options);

        var button = document.getElementById('change');
        var isChanged = false;

        button.onclick = function () {
            if (!isChanged) {
                options.hAxis.viewWindow.min = new Date(2015, 0, 1);
                options.hAxis.viewWindow.max = new Date(2015, 0, 1, 3);
                isChanged = true;
            } else {
                options.hAxis.viewWindow.min = new Date(2014, 11, 31, 18),
                        options.hAxis.viewWindow.max = new Date(2015, 0, 3, 1)
                isChanged = false;
            }
            chart.draw(data, options);
        };
    }

</script>
<?= $model->get(); ?>

