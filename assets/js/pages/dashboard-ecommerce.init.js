/*
Template Name: Vixon - Admin & Dashboard Template
Author: Themesbrand
Website: https://Themesbrand.com/
Contact: Themesbrand@gmail.com
File: Dashboard E-commerce init js
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

var sessionChart = "";
var visitDurationChart = "";
var impressionsChart = "";
var viewsChart = "";
var monthlyProfitChart = "";
var chartColumnStacked100Chart = "";
var customerImpressionChart = "";

function loadCharts() {
    //  Total Sessions Line Charts
    var sessionChartColors = "";
    sessionChartColors = getChartColorsArray("session_chart");
    if (sessionChartColors) {
        var options = {
            series: [{
                name: 'Total Sessions',
                data: [31, 40, 28, 51, 42, 109, 103]
            }],
            chart: {
                height: 124,
                type: 'line',
                toolbar: {
                    show: false
                }
            },
            legend: {
                show: false,
            },
            dataLabels: {
                enabled: false
            },
            grid: {
                show: false,
                yaxis: {
                    lines: {
                        show: false
                    }
                },
            },
            stroke: {
                width: 2,
                curve: 'smooth'
            },
            colors: getChartColorsArray("session_chart"),
            xaxis: {
                categories: ['S', 'M', 'T', 'W', 'T', 'F', 'S'],
                labels: {
                    style: {
                        fontSize: '10px',
                    },
                }
            },
            yaxis: {
                show: false,
            },
        };

        if (sessionChart != "")
            sessionChart.destroy();
        sessionChart = new ApexCharts(document.querySelector("#session_chart"), options);
        sessionChart.render();
    }

    //  Avg. Visit Duration Charts
    var visitDurationColors = '';
    visitDurationColors = getChartColorsArray("visti_duration_chart");
    if (visitDurationColors) {
        var options = {
            series: [{
                name: 'Avg. Visit Duration',
                data: [29, 43, 71, 58, 99, 93, 130]
            }],
            chart: {
                height: 124,
                type: 'line',
                toolbar: {
                    show: false
                }
            },
            legend: {
                show: false,
            },
            dataLabels: {
                enabled: false
            },
            grid: {
                show: false,
                yaxis: {
                    lines: {
                        show: false
                    }
                },
            },
            stroke: {
                width: 2,
                curve: 'smooth'
            },
            colors: visitDurationColors,
            xaxis: {
                categories: ['S', 'M', 'T', 'W', 'T', 'F', 'S'],
                labels: {
                    style: {
                        fontSize: '10px',
                    },
                }
            },
            yaxis: {
                show: false,
            },
        };

        if (visitDurationChart != "")
            visitDurationChart.destroy();
        visitDurationChart = new ApexCharts(document.querySelector("#visti_duration_chart"), options);
        visitDurationChart.render();
    }

    //  Impressions Charts
    var impressionsColors = '';
    impressionsColors = getChartColorsArray("impressions_chart");
    if (impressionsColors) {
        var options = {
            series: [{
                name: 'Impressions',
                data: [50, 18, 47, 32, 84, 110, 93]
            }],
            chart: {
                height: 124,
                type: 'line',
                toolbar: {
                    show: false
                }
            },
            legend: {
                show: false,
            },
            dataLabels: {
                enabled: false
            },
            grid: {
                show: false,
                yaxis: {
                    lines: {
                        show: false
                    }
                },
            },
            stroke: {
                width: 2,
                curve: 'smooth'
            },
            colors: impressionsColors,
            xaxis: {
                categories: ['S', 'M', 'T', 'W', 'T', 'F', 'S'],
                labels: {
                    style: {
                        fontSize: '10px',
                    },
                }
            },
            yaxis: {
                show: false,
            },
        };

        if (impressionsChart != "")
            impressionsChart.destroy();
        impressionsChart = new ApexCharts(document.querySelector("#impressions_chart"), options);
        impressionsChart.render();
    }

    //  Total Views Charts
    var viewsChartColors = '';
    viewsChartColors = getChartColorsArray("views_chart");
    if (viewsChartColors) {
        var options = {
            series: [{
                name: 'Total Views',
                data: [72, 58, 30, 51, 42, 95, 119]
            }],
            chart: {
                height: 124,
                type: 'line',
                toolbar: {
                    show: false
                }
            },
            legend: {
                show: false,
            },
            dataLabels: {
                enabled: false
            },
            grid: {
                show: false,
                yaxis: {
                    lines: {
                        show: false
                    }
                },
            },
            stroke: {
                width: 2,
                curve: 'smooth'
            },
            colors: viewsChartColors,
            xaxis: {
                categories: ['S', 'M', 'T', 'W', 'T', 'F', 'S'],
                labels: {
                    style: {
                        fontSize: '10px',
                    },
                }
            },
            yaxis: {
                show: false,
            },
        };

        if (viewsChart != "")
            viewsChart.destroy();
        viewsChart = new ApexCharts(document.querySelector("#views_chart"), options);
        viewsChart.render();
    }

    // Bubble Charts Generate Data
    function generateData(baseval, count, yrange) {
        var i = 0;
        var series = [];
        while (i < count) {
            var x = Math.floor(Math.random() * (100 - 1 + 1)) + 1;;
            var y = Math.floor(Math.random() * (yrange.max - yrange.min + 1)) + yrange.min;
            var z = Math.floor(Math.random() * (75 - 15 + 1)) + 15;

            series.push([x, y, z]);
            baseval += 200;
            i++;
        }
        return series;
    }

    // Simple Bubble
    var monthlyProfitColors = "";
    monthlyProfitColors = getChartColorsArray("monthly_profit");
    if (monthlyProfitColors) {
        var options = {
            series: [{
                name: 'Product1',
                data: generateData(new Date('11 Feb 2017 GMT').getTime(), 8, {
                    min: 1,
                    max: 15
                })
            },
            {
                name: 'Product2',
                data: generateData(new Date('11 Feb 2017 GMT').getTime(), 8, {
                    min: 1,
                    max: 15
                })
            }
            ],
            chart: {
                height: 248,
                type: 'bubble',
                toolbar: {
                    show: false,
                }
            },
            dataLabels: {
                enabled: false
            },
            legend: {
                show: false,
            },
            grid: {
                padding: {
                    top: 0,
                    right: 0,
                    bottom: 0
                }
            },
            xaxis: {
                show: false,
                tickAmount: 6,
                type: 'datetime',
                labels: {
                    rotate: 0,
                }
            },
            yaxis: {
                max: 15
            },
            theme: {
                palette: 'palette2'
            },
            colors: monthlyProfitColors
        };

        if (monthlyProfitChart != "")
            monthlyProfitChart.destroy();
        monthlyProfitChart = new ApexCharts(document.querySelector("#monthly_profit"), options);
        monthlyProfitChart.render();
    }

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
                height: 252,
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

    var linechartcustomerColors = "";
    var linechartcustomerColors = getChartColorsArray("customer_impression_charts");
    if (linechartcustomerColors) {
        var options = {
            series: [{
                name: "Orders",
                data: [34, 65, 46, 68, 49, 61, 42, 44, 78, 52, 63, 67],
            },
            {
                name: "Earnings",
                data: [
                    89.25, 98.58, 68.74, 108.87, 77.54, 84.03, 51.24, 28.57, 92.57, 42.36,
                    88.51, 36.57,
                ],
            },
            {
                name: "Refunds",
                data: [8, 12, 7, 17, 21, 11, 5, 9, 7, 29, 12, 35],
            },
            ],
            chart: {
                height: 322,
                type: "line",
                toolbar: {
                    show: false,
                },
            },
            stroke: {
                curve: "smooth",
                dashArray: [0, 0, 8],
                width: [1, 1, 2],
            },
            fill: {
                opacity: [1,1, 1],
            },
            markers: {
                size: [0, 0, 0],
                strokeWidth: 3,
                hover: {
                    size: 4,
                },
            },
            xaxis: {
                categories: [
                    "Jan",
                    "Feb",
                    "Mar",
                    "Apr",
                    "May",
                    "Jun",
                    "Jul",
                    "Aug",
                    "Sep",
                    "Oct",
                    "Nov",
                    "Dec",
                ],
                axisTicks: {
                    show: false,
                },
                axisBorder: {
                    show: false,
                },
            },
            grid: {
                show: true,
                padding: {
                    right: -2,
                    bottom: -10,
                    left: 10,
                },
            },
            legend: {
                show: true,
                horizontalAlign: "right",
                position: 'top',
                offsetX: 0,
                offsetY: 5,
                markers: {
                    width: 9,
                    height: 9,
                    radius: 6,
                },
                itemMargin: {
                    horizontal: 10,
                    vertical: 0,
                },
            },
            plotOptions: {
                bar: {
                    columnWidth: "20%",
                    barHeight: "100%",
                    borderRadius: [8],
                },
            },
            colors: linechartcustomerColors,
            tooltip: {
                shared: true,
                y: [{
                    formatter: function (y) {
                        if (typeof y !== "undefined") {
                            return y.toFixed(0);
                        }
                        return y;
                    },
                },
                {
                    formatter: function (y) {
                        if (typeof y !== "undefined") {
                            return "$" + y.toFixed(2) + "k";
                        }
                        return y;
                    },
                },
                {
                    formatter: function (y) {
                        if (typeof y !== "undefined") {
                            return y.toFixed(0) + " Sales";
                        }
                        return y;
                    },
                },
                ],
            },
        };

        if (customerImpressionChart != "")
            customerImpressionChart.destroy();
        customerImpressionChart = new ApexCharts(document.querySelector("#customer_impression_charts"), options);
        customerImpressionChart.render();
    }
}

window.addEventListener("resize", function () {
    setTimeout(() => {
        loadCharts();
    }, 250);
});

loadCharts();

//Browser Usage Table
var options = {
    valueNames: [
        "browsers",
        "click",
        "pageviews"
    ],
};

// Init list
var contactList = new List("networks", options)

//Top Pages Table
var options = {
    valueNames: [
        "activePage",
        "activePageNo",
        "pageUsers"
    ],
};

// Init list
var topPages = new List("top-Pages", options)

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

//top selling products 
var swiper = new Swiper(".mySwiper", {
    spaceBetween: 22,
    loop: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        1200: {
            slidesPerView: 2,
        },
        576: {
            slidesPerView: 2,
        },
    },
});