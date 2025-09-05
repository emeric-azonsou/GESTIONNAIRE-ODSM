/*
Template Name: Vixon - Admin & Dashboard Template
Author: Themesbrand
Website: https://Themesbrand.com/
Contact: Themesbrand@gmail.com
File: Widgets init js
*/

// get colors array from the string
function getChartColorsArray(chartId) {
    const chartElement = document.getElementById(chartId);
    if (chartElement) {
        const colors = chartElement.dataset.colors;
        if (colors) {
            const parsedColors = JSON.parse(colors);
            const mappedColors = parsedColors.map((value) => {
                const newValue = value.replace(/\s/g, "");
                if (!newValue.includes(",")) {
                    const color = getComputedStyle(document.documentElement).getPropertyValue(newValue);
                    return color || newValue;
                } else {
                    const val = value.split(",");
                    if (val.length === 2) {
                        const rgbaColor = `rgba(${getComputedStyle(document.documentElement).getPropertyValue(val[0])}, ${val[1]})`;
                        return rgbaColor;
                    } else {
                        return newValue;
                    }
                }
            });
            return mappedColors;
        } else {
            console.warn(`data-colors attribute not found on: ${chartId}`);
        }
    }
}

var chartColumnStacked100Chart = "";
var chartHeatMapShadesChart = "";
var usersActivityChart = "";

function loadCharts() {
   
    // 100% Stacked Column Chart
    var chartColumnStacked100Colors = "";
    chartColumnStacked100Colors = getChartColorsArray("column_stacked_chart");
    if (chartColumnStacked100Colors) {
        var options = {
            series: [{
                name: 'Views',
                data: [44, 55, 41, 67, 22, 43, 21, 49]
            }, {
                name: 'Orders',
                data: [13, 23, 20, 50, 13, 27, 33, 27]
            }],
            chart: {
                type: 'bar',
                height: 300,
                stacked: true,
                stackType: '100%',
                toolbar: {
                    show: false,
                }
            },
            xaxis: {
                categories: ['Jan', 'Feb', 'March', 'April', 'May', 'June', 'July', 'Aug'],
                axisBorder: {
                    show: false
                },
                axisTicks: {
                    show: false
                },
            },
            yaxis: {
                axisBorder: {
                    show: false
                },
                axisTicks: {
                    show: false,
                },
                labels: {
                    show: false,
                }
            },
            grid: {
                show: false,
                yaxis: {
                    lines: {
                        show: false
                    }
                },
                padding: {
                    top: -25,
                    left: -15,
                    right: 0,
                    bottom: 0
                }
            },
            fill: {
                opacity: 1
            },
            legend: {
                show: false,
            },
            colors: chartColumnStacked100Colors,
        };

        if (chartColumnStacked100Chart != "")
            chartColumnStacked100Chart.destroy();
        chartColumnStacked100Chart = new ApexCharts(document.querySelector("#column_stacked_chart"), options);
        chartColumnStacked100Chart.render();
    }

    // Generate Data Script

    function generateData(count, yrange) {
        var i = 0;
        var series = [];
        while (i < count) {
            var x = (i + 1).toString();
            var y = Math.floor(Math.random() * (yrange.max - yrange.min + 1)) + yrange.min;

            series.push({
                x: x,
                y: y
            });
            i++;
        }
        return series;
    }

    var data = [{
        name: 'W1',
        data: generateData(7, {
            min: 0,
            max: 90
        })
    },
    {
        name: 'W2',
        data: generateData(7, {
            min: 0,
            max: 90
        })
    },
    {
        name: 'W3',
        data: generateData(7, {
            min: 0,
            max: 90
        })
    },
    {
        name: 'W4',
        data: generateData(7, {
            min: 0,
            max: 90
        })
    },
    {
        name: 'W5',
        data: generateData(7, {
            min: 0,
            max: 90
        })
    },
    {
        name: 'W6',
        data: generateData(7, {
            min: 0,
            max: 90
        })
    },
    {
        name: 'W7',
        data: generateData(7, {
            min: 0,
            max: 90
        })
    },
    {
        name: 'W8',
        data: generateData(7, {
            min: 0,
            max: 90
        })
    },
    {
        name: 'W9',
        data: generateData(7, {
            min: 0,
            max: 90
        })
    },
    {
        name: 'W10',
        data: generateData(7, {
            min: 0,
            max: 90
        })
    },
    {
        name: 'W11',
        data: generateData(7, {
            min: 0,
            max: 90
        })
    },
    {
        name: 'W12',
        data: generateData(7, {
            min: 0,
            max: 90
        })
    },
    {
        name: 'W13',
        data: generateData(7, {
            min: 0,
            max: 90
        })
    },
    {
        name: 'W14',
        data: generateData(7, {
            min: 0,
            max: 90
        })
    },
    {
        name: 'W15',
        data: generateData(7, {
            min: 0,
            max: 90
        })
        }
    ]

    data.reverse()

    // shades_heatmap
    var chartHeatMapShadesColors = "";
    chartHeatMapShadesColors = getChartColorsArray("shades_heatmap");
    if (chartHeatMapShadesColors) {
        var options = {
            series: [{
                name: '7 AM',
                data: generateData(7, {
                    min: 0,
                    max: 90
                })
            },
            {
                name: '8 AM',
                data: generateData(7, {
                    min: 0,
                    max: 90
                })
            },
            {
                name: '9 AM',
                data: generateData(7, {
                    min: 0,
                    max: 90
                })
            },
            {
                name: '10 AM',
                data: generateData(7, {
                    min: 0,
                    max: 90
                })
            },
            {
                name: '11 AM',
                data: generateData(7, {
                    min: 0,
                    max: 90
                })
            },
            {
                name: '12 PM',
                data: generateData(7, {
                    min: 0,
                    max: 90
                })
            },
            {
                name: '1 PM',
                data: generateData(7, {
                    min: 0,
                    max: 90
                })
            },
            {
                name: '2 PM',
                data: generateData(7, {
                    min: 0,
                    max: 90
                })
            },
            {
                name: '3 PM',
                data: generateData(7, {
                    min: 0,
                    max: 90
                })
            }
            ],
            chart: {
                height: 300,
                type: 'heatmap',
                toolbar: {
                    show: false
                }
            },
            stroke: {
                width: 0
            },
            plotOptions: {
                heatmap: {
                    radius: 2,
                    enableShades: false,
                    colorScale: {
                        ranges: [{
                            from: 0,
                            to: 50,
                            color: chartHeatMapShadesColors[0]
                        },
                        {
                            from: 51,
                            to: 100,
                            color: chartHeatMapShadesColors[1]
                        },
                        ],
                    },

                }
            },
            grid: {
                show: true,
                xaxis: {
                    lines: {
                        show: false
                    }
                },
                yaxis: {
                    lines: {
                        show: false
                    }
                },
                padding: {
                    top: -18,
                    right: 0,
                    bottom: 0,
                },
            },
            stroke: {
                width: 3,
            },
            dataLabels: {
                enabled: false
            },
            xaxis: {
                categories: ['S', 'M', 'T', 'W', 'T', 'F', 'S'],
                type: 'category',
            },
        };

        if (chartHeatMapShadesChart != "")
            chartHeatMapShadesChart.destroy();
        chartHeatMapShadesChart = new ApexCharts(document.querySelector("#shades_heatmap"), options);
        chartHeatMapShadesChart.render();
    }

    // usersActivity Columns Charts
    var usersActivityColors = "";
    usersActivityColors = getChartColorsArray("usersActivity");
    if (usersActivityColors) {
        var options = {
            series: [{
                name: 'Created',
                data: [20, 17, 11, 15, 20, 15, 20]
            }, {
                name: 'Converted',
                data: [13, 23, 18, 8, 27, 10, 12]
            }],
            chart: {
                type: 'bar',
                height: 300,
                stacked: true,
                toolbar: {
                    show: false
                },
                zoom: {
                    enabled: true
                },
                toolbar: {
                    show: false,
                }
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '35%',
                },
            },
            dataLabels: {
                enabled: false
            },
            xaxis: {
                categories: ['Sun', 'Mon', 'Tue', 'Wen', 'Thu', 'Fri', 'Sat'],
            },
            grid: {
                show: true,
                xaxis: {
                    lines: {
                        show: false
                    }
                },
                padding: {
                    top: -18,
                    right: 0,
                    bottom: 0,
                },
            },
            legend: {
                position: 'bottom',
            },
            fill: {
                opacity: 1
            },
            colors: usersActivityColors,
        };

        if (usersActivityChart != "")
            usersActivityChart.destroy();
        usersActivityChart = new ApexCharts(document.querySelector("#usersActivity"), options);
        usersActivityChart.render();
    }

}
// Reload charts on the theme change or resize browser
window.addEventListener("resize", function () {
    setTimeout(() => {
        loadCharts();
    }, 250);
});

loadCharts();