$.getJSON('./backend/profession.php', function(data) {
    // Transform the data into a format Highcharts can use
    const chartData = data.map(item => {
        return {
            name: item.position,
            y: item.count
        };
    });

    // Create the Highcharts pie chart
    Highcharts.chart('position_chart', {
        chart: {
            type: 'pie'
        },
        title: {
            text: 'Profession Distribution'
        },
        tooltip: {
            valueSuffix: ' people'
        },
        plotOptions: {
            series: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '{point.name}: {point.percentage:.1f}%',
                    style: {
                        fontSize: '1.2em',
                        textOutline: 'none'
                    }
                }
            }
        },
        series: [{
            name: 'Position',
            colorByPoint: true,
            data: chartData
        }]
    });
});
