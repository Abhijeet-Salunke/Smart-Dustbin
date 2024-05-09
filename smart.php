<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Dustbin</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css"
        integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        .container {
            background-color: #f3f4f7;
            width: 80%;
            margin: auto;
        }
    </style>
</head>

<body>
    <h1>Smart Dustbin data</h1>
    <div class="container">
        <canvas id="chart"></canvas>
    </div>
    <div class="container">
        <h1>Garbage Level Fill Chart</h1>
        <!-- Create a canvas element for the chart -->
        <canvas id="garbageChart" width="400" height="100"></canvas>
        <p id="sensorValue" style="text-align: center; margin-top: 10px;">Loading...</p>
    </div>
    <iframe width="450" height="260" style="border: 1px solid #cccccc; margin-top: 20px;"
        src="https://thingspeak.com/channels/2422676/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe>

    <script>
        $(document).ready(function () {
            function getData() {
                var url = "https://api.thingspeak.com/channels/2422676/fields/1.json?api_key=QZZ17NRK6YJLWNMI&results=15";
                $.getJSON(url, function (data) {
                    var field1values = [];
                    var field2values = [];
                    var timestamps = [];

                    $.each(data.feeds, function (index, feed) {
                        field1values.push(feed.field1);
                        field2values.push(feed.field2);
                        timestamps.push(feed.created_at);
                    });

                    var ctx = document.getElementById('chart').getContext('2d');
                    var chart = new Chart(ctx, {
                        type: 'line',
                        data: {
                            labels: timestamps,
                            datasets: [{
                                label: "level",
                                data: field1values,
                                borderColor: "#3e95cd",
                                // backgroundColor: '#84bd00',
                                borderWidth: 1
                            },
                            {
                                label: "date",
                                data: field2values,
                                borderColor: "#3e95cd",
                                backgroundColor: '#00205b',
                                borderWidth: 1
                            }]
                        },

                    });

                    // Update the chart with the historical data
                    updateChart(field1values);
                });
            }

            function updateChart(garbageLevels) {
                var ctx = document.getElementById('garbageChart').getContext('2d');

                var chart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: Array.from({ length: garbageLevels.length }, (_, i) => i + 1),
                        datasets: [{
                            label: 'Garbage Level Fill',
                            data: garbageLevels,
                            backgroundColor: 'rgba(255, 99, 132, 0.2)',
                            borderColor: 'rgba(255, 99, 132, 1)',
                            borderWidth: 1,
                            fill: false
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        scales: {
                            y: {
                                beginAtZero: true,
                                ticks: {
                                    stepSize: 1,
                                    callback: function (value, index, values) {
                                        // Convert value to dustbin state label
                                        switch (value) {
                                            case 1:
                                                return 'Dustbin Full';
                                            case 2:
                                                return 'Dustbin Half';
                                            case 3:
                                                return 'Dustbin Low';
                                            default:
                                                return '';
                                        }
                                    }
                                }
                            },
                            x: {
                                title: {
                                    display: true,
                                    text: 'Reading Number'
                                }
                            }
                        },
                        plugins: {
                            legend: {
                                display: false
                            }
                        }
                    }
                });
            }


            getData();
        });
    </script>
</body>

</html>