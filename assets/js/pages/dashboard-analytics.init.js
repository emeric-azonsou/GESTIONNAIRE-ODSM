/*
Template Name: Vixon - Admin & Dashboard Template
Author: Themesbrand
Website: https://Themesbrand.com/
Contact: Themesbrand@gmail.com
File: Dashboard Analytics init js
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

var chartColumnDistributedChart = "";
var realizedRateChart = "";
var balanceOverviewChart = "";
var usersActivityChart = "";
var chartHeatMapShadesChart = "";
var chartSemiRadialbarChart = "";
function loadCharts() {

    // Columns Charts
    var chartColumnDistributedColors = '';
    chartColumnDistributedColors = getChartColorsArray("performance_overview");
    if (chartColumnDistributedColors) {


        var options = {
            series: [{
                name: 'Website',
                type: 'column',
                data: [30, 57, 25, 33, 20, 39, 47, 36, 22, 51, 38, 27, 38, 49, 42, 58, 33, 46, 40, 34, 41, 53, 19, 23, 36, 52, 58, 43]
            }, {
                name: 'Social Media',
                type: 'line',
                data: [23, 42, 35, 27, 43, 22, 17, 31, 22, 22, 12, 16, 33, 20, 39, 47, 36, 22, 51, 38, 27, 38, 49, 33, 20, 39, 47, 36]
            }],
            chart: {
                height: 350,
                type: 'line',
                toolbar: {
                    show: false
                },
            },
            stroke: {
                width: [0, 2],
                curve: 'smooth'
            },
            plotOptions: {
                bar: {
                    columnWidth: '100%',
                    borderRadiusOnAllStackedSeries: true

                },
            },
            colors: chartColumnDistributedColors,
            dataLabels: {
                enabled: false,
                enabledOnSeries: [1]
            },
            legend: {
                show: false,
            },
            grid: {
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
                    top: 0,
                    right: -8,
                    left: -16
                }
            },
            yaxis: {
                show: false,
            },
            xaxis: {
                type: 'datetime',
                categories: ['01/01/2023 GMT', '01/02/2023 GMT', '01/03/2023 GMT', '01/04/2023 GMT',
                    '01/05/2023 GMT', '01/06/2023 GMT', '01/07/2023 GMT', '01/08/2023 GMT', '01/09/2023 GMT', '01/10/2023 GMT', '01/11/2023 GMT', '01/12/2023 GMT', '01/13/2023 GMT',
                    '01/14/2023 GMT', '01/15/2023 GMT', '01/16/2023 GMT', '01/17/2023 GMT', '01/18/2023 GMT', '01/19/2023 GMT', '01/20/2023 GMT', '01/21/2023 GMT', '01/22/2023 GMT',
                    '01/23/2023 GMT', '01/24/2023 GMT', '01/25/2023 GMT', '01/26/2023 GMT', '01/27/2023 GMT', '01/28/2023 GMT'
                ],
                labels: {
                    show: false,
                },
                axisTicks: {
                    show: false,
                }
            },
        };

        if (chartColumnDistributedChart != "")
            chartColumnDistributedChart.destroy();
        chartColumnDistributedChart = new ApexCharts(document.querySelector("#performance_overview"), options);
        chartColumnDistributedChart.render();
    }

    //  balance_overview Charts
    var balanceOverviewColors = "";
    balanceOverviewColors = getChartColorsArray("balance_overview");
    if (balanceOverviewColors) {
        var options = {
            series: [{
                name: 'Total Revenue',
                data: [49, 62, 55, 67, 73, 89, 110, 120, 115, 129, 123, 133]
            }, {
                name: 'Total Expense',
                data: [62, 76, 67, 49, 63, 77, 70, 86, 92, 103, 87, 93]
            }, {
                name: 'Profit Ratio',
                data: [12, 36, 29, 33, 37, 42, 58, 67, 49, 33, 24, 18]
            }],
            chart: {
                height: 320,
                type: 'line',
                toolbar: {
                    show: false
                },
                dropShadow: {
                    enabled: true,
                    enabledOnSeries: undefined,
                    top: 0,
                    left: 0,
                    blur: 3,
                    color: balanceOverviewColors,
                    opacity: 0.25
                }
            },
            markers: {
                size: 0,
                strokeColors: balanceOverviewColors,
                strokeWidth: 2,
                strokeOpacity: 0.9,
                fillOpacity: 1,
                radius: 0,
                hover: {
                    size: 5,
                }
            },
            grid: {
                show: true,
                padding: {
                    top: -20,
                    right: 0,
                    bottom: 0,
                },
            },
            legend: {
                show: false,
            },
            dataLabels: {
                enabled: false
            },
            xaxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                labels: {
                    rotate: -90
                },
                axisTicks: {
                    show: true,
                },
                axisBorder: {
                    show: true,
                    stroke: {
                        width: 1
                    },
                },
            },
            stroke: {
                width: [2, 2, 2],
                curve: 'smooth'
            },
            colors: balanceOverviewColors,
        };

        if (balanceOverviewChart != "")
            balanceOverviewChart.destroy();
        balanceOverviewChart = new ApexCharts(document.querySelector("#balance_overview"), options);
        balanceOverviewChart.render();
    }

    // realized_rate charts
    var realizedRateColors = "";
    realizedRateColors = getChartColorsArray("realized_rate");
    if (realizedRateColors) {
        var options = {
            series: [{
                name: 'Read',
                data: [80, 50, 30, 40, 100, 20],
            },
            {
                name: 'Delivery',
                data: [20, 30, 40, 80, 20, 80],
            },
            {
                name: 'Failed',
                data: [44, 76, 78, 13, 43, 10],
            }
            ],
            chart: {
                height: 403,
                type: 'radar',
                toolbar: {
                    show: false
                },
            },
            stroke: {
                width: 1
            },
            fill: {
                opacity: 0.2
            },
            markers: {
                size: 3,
                hover: {
                    size: 4,
                }
            },
            tooltip: {
                y: {
                    formatter: function (val) {
                        return val
                    }
                }
            },
            colors: realizedRateColors,
            xaxis: {
                categories: ['2018', '2019', '2020', '2021', '2022', '2023'],
            }
        };

        if (realizedRateChart != "")
            realizedRateChart.destroy();
        realizedRateChart = new ApexCharts(document.querySelector("#realized_rate"), options);
        realizedRateChart.render();
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
                height: 340,
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
                height: 340,
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

    // Semi Circle
    var chartSemiRadialbarColors = "";
    chartSemiRadialbarColors = getChartColorsArray("semi_radialbar");
    if (chartSemiRadialbarColors) {
        var options = {
            series: [74.36],
            chart: {
                type: 'radialBar',
                height: 350,
                offsetY: -20,
                sparkline: {
                    enabled: true
                }
            },
            plotOptions: {
                radialBar: {
                    startAngle: -90,
                    endAngle: 90,
                    track: {
                        background: "#e7e7e7",
                        strokeWidth: '97%',
                        margin: 5, // margin is in pixels
                    },
                    dataLabels: {
                        name: {
                            show: false
                        },
                        value: {
                            offsetY: -2,
                            fontSize: '22px'
                        }
                    }
                }
            },
            grid: {
                padding: {
                    top: -10
                }
            },
            fill: {
                type: 'gradient',
                gradient: {
                    shade: 'light',
                    shadeIntensity: 0.4,
                    inverseColors: false,
                    opacityFrom: 1,
                    opacityTo: 1,
                    stops: [0, 50, 53, 91]
                },
            },
            labels: ['Average Results'],
            colors: chartSemiRadialbarColors
        };

        if (chartSemiRadialbarChart != "")
            chartSemiRadialbarChart.destroy();
        chartSemiRadialbarChart = new ApexCharts(document.querySelector("#semi_radialbar"), options);
        chartSemiRadialbarChart.render();
    }

}

window.addEventListener("resize", function () {
    setTimeout(() => {
        loadCharts();
    }, 250);
});
loadCharts();

//Orders Table
var options = {
    valueNames: [
        "source",
        "impression",
        "clicks",
        "cost",
        "conversation"
    ],
};

// Init list
var contactList = new List("contactList", options).on("updated", function (list) {
    list.matchingItems.length == 0 ?
        (document.getElementsByClassName("noresult")[0].style.display = "block") :
        (document.getElementsByClassName("noresult")[0].style.display = "none");

    if (list.matchingItems.length > 0) {
        document.getElementsByClassName("noresult")[0].style.display = "none";
    } else {
        document.getElementsByClassName("noresult")[0].style.display = "block";
    }
});

// sortble-dropdown
var sorttableDropdown = document.querySelectorAll('.sortble-dropdown');
if (sorttableDropdown) {
    sorttableDropdown.forEach(function (elem) {
        elem.querySelectorAll('.dropdown-menu .dropdown-item').forEach(function (item) {
            item.addEventListener('click', function () {
                var getHtml = item.innerHTML;
                elem.querySelector('.dropdown-title').innerHTML = getHtml;
            });
        });
    });
}