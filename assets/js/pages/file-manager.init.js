/*
Template Name: Vixon - Admin & Dashboard Template
Author: Themesbrand
Website: https://Themesbrand.com/
Contact: Themesbrand@gmail.com
File: file-manager init Js File
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

var chartStorkeRadialbarImagesChart = "";

function loadCharts() {
    // Radialbars with Image
    var chartStorkeRadialbarImagesColors = "";
    chartStorkeRadialbarImagesColors = getChartColorsArray("storage_chart");
    if (chartStorkeRadialbarImagesColors) {
        var options = {
            series: [67],
            chart: {
                height: 315,
                type: 'radialBar',
            },
            plotOptions: {
                radialBar: {
                    hollow: {
                        margin: 15,
                        size: '65%',
                        image: 'assets/images/comingsoon.png',
                        imageWidth: 56,
                        imageHeight: 56,
                        imageClipped: false
                    },
                    dataLabels: {
                        name: {
                            show: false,
                            color: '#fff'
                        },
                        value: {
                            show: true,
                            color: '#333',
                            offsetY: 65,
                            fontSize: '22px'
                        }
                    }
                }
            },
            fill: {
                type: 'image',
                image: {
                    src: ['assets/images/small/img-8.jpg'],
                }
            },
            stroke: {
                lineCap: 'round'
            },
            labels: ['Volatility'],
        };

        if (chartStorkeRadialbarImagesChart != "")
            chartStorkeRadialbarImagesChart.destroy();
        chartStorkeRadialbarImagesChart = new ApexCharts(document.querySelector("#storage_chart"), options);
        chartStorkeRadialbarImagesChart.render();
    };
}

window.addEventListener("resize", function () {
    setTimeout(() => {
        loadCharts();
    }, 250);
});
loadCharts();

// Dropzone
var dropzonePreviewNode = document.querySelector("#dropzone-preview-list");
dropzonePreviewNode.id = "";
if (dropzonePreviewNode) {
    var previewTemplate = dropzonePreviewNode.parentNode.innerHTML;
    dropzonePreviewNode.parentNode.removeChild(dropzonePreviewNode);
    var dropzone = new Dropzone(".file-dropzone", {
        url: 'https://httpbin.org/post',
        method: "post",
        previewTemplate: previewTemplate,
        previewsContainer: "#dropzone-preview",
    });
}

//Orders Table
var options = {
    valueNames: [
        "docs_type",
        "document_name",
        "size",
        "file_item",
        "date"
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

var bodyElement = document.getElementsByTagName('body')[0];

Array.from(document.querySelectorAll("#file-list tr")).forEach(function (item) {
    item.querySelector(".view-item-btn").addEventListener("click", function () {
        bodyElement.classList.add("file-detail-show");
    });
});

Array.from(document.querySelectorAll(".close-btn-overview")).forEach(function (item) {
    item.addEventListener("click", function () {
        bodyElement.classList.remove("file-detail-show");
    });
});

var isShowMenu = false;
var emailMenuSidebar = document.getElementsByClassName('file-manager-wrapper');
Array.from(document.querySelectorAll(".file-menu-btn")).forEach(function (item) {
    item.addEventListener("click", function () {
        Array.from(emailMenuSidebar).forEach(function (elm) {
            elm.classList.add("menubar-show");
            isShowMenu = true;
        });
    });
});

window.addEventListener('click', function (e) {
    if (document.querySelector(".file-manager-wrapper").classList.contains('menubar-show')) {
        if (!isShowMenu) {
            document.querySelector(".file-manager-wrapper").classList.remove("menubar-show");
        }
        isShowMenu = false;
    }
});


function windowResize() {
    var windowSize = document.documentElement.clientWidth;
    if (windowSize < 1400) {
        document.body.classList.remove("file-detail-show");
    } else {
        document.body.classList.add("file-detail-show");
    }
}


