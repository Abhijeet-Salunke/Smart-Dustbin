<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dustbin Monitoring Dashboard</title>
    <!-- Include Bootstrap CSS for styling -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Include Chart.js library for charting -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        /* Add custom CSS styles here */
        .chart-container {
            width: 100%;
            height: 400px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Dustbin Monitoring Dashboard</h1>
        <div class="row">
            <div class="col-md-6">
                <!-- Line Chart for Real-time Monitoring -->
                <div class="chart-container">
                    <canvas id="realTimeLineChart"></canvas>
                </div>
            </div>
            <div class="col-md-6">
                <!-- Bar Chart for Historical Data -->
                <div class="chart-container">
                    <canvas id="historicalBarChart"></canvas>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-6">
                <!-- Pie Chart for Dustbin Levels -->
                <div class="chart-container">
                    <canvas id="pieChart"></canvas>
                </div>
            </div>
            <div class="col-md-6">
                <!-- Radar Chart for Dustbin Trends -->
                <div class="chart-container">
                    <canvas id="radarChart"></canvas>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript code to fetch data and update charts -->
    <script>
        // Function to fetch data from ThingSpeak API
        async function fetchData() {
            try {
                const response = await fetch('https://api.thingspeak.com/channels/2422676/feeds.json?results=7');
                const data = await response.json();
                return data.feeds;
            } catch (error) {
                console.error('Error fetching data:', error);
                return [];
            }
        }

        // Function to update the charts with fetched data
        async function updateCharts() {
            const feeds = await fetchData();
            const timestamps = feeds.map(feed => feed.created_at);
            const realTimeData = feeds.map(feed => parseFloat(feed.field1));
            const historicalData = feeds.map(feed => parseFloat(feed.field2));

            // Update Real-time Line Chart
            realTimeLineChart.data.labels = timestamps;
            realTimeLineChart.data.datasets[0].data = realTimeData;
            realTimeLineChart.update();

            // Update Historical Bar Chart
            historicalBarChart.data.labels = timestamps;
            historicalBarChart.data.datasets[0].data = historicalData;
            historicalBarChart.update();
        }

        // Initialize Chart.js instances for different types of charts
        const realTimeLineChart = new Chart(document.getElementById('realTimeLineChart'), {
            type: 'line',
            data: {
                labels: [],
                datasets: [{
                    label: 'Real-time Dustbin Fill Level',
                    data: [],
                    borderColor: 'blue',
                    fill: false
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        scaleLabel: {
                            display: true,
                            labelString: 'Fill Level'
                        },
                        ticks: {
                            beginAtZero: true,
                            stepSize: 1
                        }
                    }],
                    xAxes: [{
                        scaleLabel: {
                            display: true,
                            labelString: 'Time'
                        }
                    }]
                }
            }
        });

        const historicalBarChart = new Chart(document.getElementById('historicalBarChart'), {
            type: 'bar',
            data: {
                labels: [],
                datasets: [{
                    label: 'Historical Dustbin Fill Level',
                    data: [],
                    backgroundColor: 'green',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        scaleLabel: {
                            display: true,
                            labelString: 'Fill Level'
                        },
                        ticks: {
                            beginAtZero: true,
                            stepSize: 1
                        }
                    }],
                    xAxes: [{
                        scaleLabel: {
                            display: true,
                            labelString: 'Time'
                        }
                    }]
                }
            }
        });

        // Call updateCharts function initially and every 10 seconds thereafter
        updateCharts();
        setInterval(updateCharts, 10000); // Update every 10 seconds
    </script>
</body>
</html>
