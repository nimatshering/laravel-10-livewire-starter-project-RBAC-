  <script type="text/javascript">
    var bar_data = <?php echo json_encode($barchart_data); ?>;
    var pie_data = <?php echo json_encode($piedata); ?>;
    var line_data = <?php echo json_encode($linechart_data); ?>;
    var startyear = <?php echo json_encode($startyear->startyear); ?>;

     //column chart
 Highcharts.chart('column', {
    chart: {
        type: 'bar'
    },
    title: {
        text: 'Number of industries',
        align: 'left'
    },
    subtitle: {
        text: 'Last 3 years',
        align: 'left'
    },
    xAxis: {
        categories: ['Cottage', 'Small', 'Medium', 'Large', 'FDI'],
        title: {
            text: null
        },
        gridLineWidth: 1,
        lineWidth: 0
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Number of Industries',
            align: 'high'
        },
        labels: {
            overflow: 'justify'
        },
        gridLineWidth: 0
    },
    tooltip: {
        valueSuffix: ''
    },
    plotOptions: {
        bar: {
            borderRadius: '50%',
            dataLabels: {
                enabled: true
            },
            groupPadding: 0.1
        }
    },
    legend: {
        layout: "vertical",
        align: "right",
        verticalAlign: "bottom",
        x: 0,
        y: -60,
        floating: true,
        borderWidth: 1,
        backgroundColor:
            Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF',
        shadow: true
    },
    credits: {
        enabled: false
    },
    series: bar_data
});

//pie chart
Highcharts.chart('pie', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Industries by category',
        align: 'left'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %'
            }
        }
    },

     credits: {
        enabled: false
    },

    series: [{
        name: 'Industries',
        colorByPoint: true,
        data: [{
            name: 'Production and Manufacturing',
            y: pie_data[0],
            sliced: true,
            selected: true
        }, {
            name: 'Services',
            y: pie_data[1],
            sliced: true,
            selected: true
        },  {
            name: 'Contract',
            y: pie_data[2],
            sliced: true,
            selected: true
        }]
    }]
});


//line chart
Highcharts.chart('line', {
    title: {
        text: 'Industries growth',
        align: 'left'
    },
    yAxis: {
        title: {
            text: 'Number of Industries'
        }
    },

    itemWidth: 200,
    xAxis: {
        accessibility: {
            rangeDescription: ''
        }
    },

    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle'
    },

    plotOptions: {
        series: {
            label: {
                connectorAllowed: false
            },
            pointStart: startyear
        }
    },

     credits: {
        enabled: false
    },

    series: line_data,

    responsive: {
        rules: [{
            condition: {
                maxWidth: 500
            },
            chartOptions: {
                legend: {
                    layout: 'horizontal',
                    align: 'center',
                    verticalAlign: 'bottom'
                }
            }
        }]
    }

});
  
</script><?php /**PATH /Users/nimatshering/Sites/bds-v1.3/resources/views/frontpages/chart.blade.php ENDPATH**/ ?>