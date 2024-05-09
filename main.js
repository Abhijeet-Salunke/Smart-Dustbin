   $(document).ready(function () {
            function getData() {
                var url = "https://api.thingspeak.com/channels/2422676/fields/1.json?api_key=QZZ17NRK6YJLWNMI&results=45";
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
                    displayStatusDates(statusDates);
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


            function displayStatusDates(dates) {
                var statusDatesElement = document.getElementById('statusDates');
                dates.forEach(function(date) {
                    var listItem = document.createElement('li');
                    listItem.textContent = date;
                    statusDatesElement.appendChild(listItem);
                });
            }

            getData();
        });