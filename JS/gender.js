$.getJSON('./backend/gender.php', function(data) {
    // Transform the data into a format Highcharts can use
    const chartData = data.map(item => ({
        name: item.gender,
        y: item.count
    }));

    // Create the Highcharts pie chart
    Highcharts.chart('gender_chart', {
        chart: {
            type: 'pie'
        },
        title: {
            text: 'Gender Distribution'
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
            name: 'Gender',
            colorByPoint: true,
            data: chartData
        }]
    });
});
