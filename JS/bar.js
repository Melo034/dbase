// Initialize the Highcharts chart
const myChart = Highcharts.chart('bar_chart', {
    chart: {
        type: 'bar'
    },
    title: {
        text: 'Position by Gender',
        align: 'left'
    },
    xAxis: {
        categories: [], // This will be filled with positions
        title: {
            text: null
        },
        gridLineWidth: 1,
        lineWidth: 0
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Number of People',
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
            borderRadius: 5,
            dataLabels: {
                enabled: true
            },
            groupPadding: 0.1
        }
    },
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'top',
        x: -40,
        y: 80,
        floating: true,
        borderWidth: 1,
        backgroundColor: Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF',
        shadow: true
    },
    credits: {
        enabled: false
    },
    series: [{
        name: 'Male',
        data: [] // Initial empty data, will be filled by AJAX
    }, {
        name: 'Female',
        data: [] // Initial empty data, will be filled by AJAX
    }, {
        name: 'Prefer Not to say',
        data: [] // Initial empty data, will be filled by AJAX
    }]
});
updateChart();
// Function to update the chart with data from the PHP backend
function updateChart() {
    $.ajax({
        url: './backend/gender_proffession.php', // Ensure this path is correct
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            // Prepare the data
            const categories = data.map(item => item.position);
            const maleData = data.map(item => item.Male);
            const femaleData = data.map(item => item.Female);
            const preferNotToSayData = data.map(item => item.PreferNotToSay);

            // Update the chart
            myChart.xAxis[0].setCategories(categories);
            myChart.series[0].setData(maleData);
            myChart.series[1].setData(femaleData);
            myChart.series[2].setData(preferNotToSayData);
        },
        error: function(error) {
            console.error("Error fetching data:", error);
        }
    });
}


