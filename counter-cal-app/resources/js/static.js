// ============================================
// As of Chart.js v2.5.0
// http://www.chartjs.org/docs
// ============================================

var chart    = document.getElementById('chart').getContext('2d'),
    gradient = chart.createLinearGradient(0, 0, 0, 350);

gradient.addColorStop(0, 'rgb(3,185,44)');
gradient.addColorStop(0.5, 'rgb(3,185,44)');
gradient.addColorStop(1, 'rgb(3,185,44)');


var data  = {
    labels: [ 'January', 'February', 'March', 'April', 'May', 'June' ],
    datasets: [{
        label: 'Custom Label Name',
        backgroundColor: gradient,
        pointBackgroundColor: 'white',
        borderWidth: 1,
        borderColor: '#03b92c',
        data: [50, 85, 80, 81, 54, 50]
    }]
};


var options = {
    responsive: true,
    maintainAspectRatio: true,
    animation: {
        easing: 'easeInOutQuad',
        duration: 520
    },
    scales: {
        xAxes: [{
            gridLines: {
                color: 'rgba(200, 200, 200, 0.05)',
                lineWidth: 1
            }
        }],
        yAxes: [{
            gridLines: {
                color: 'rgba(200, 200, 200, 0.08)',
                lineWidth: 1
            }
        }]
    },
    elements: {
        line: {
            tension: 0.4
        }
    },
    legend: {
        display: false
    },
    point: {
        backgroundColor: 'white'
    },
    tooltips: {
        titleFontFamily: 'Open Sans',
        backgroundColor: 'rgba(0,0,0,0.3)',
        titleFontColor: 'green',
        caretSize: 5,
        cornerRadius: 2,
        xPadding: 10,
        yPadding: 10
    }
};


var chartInstance = new Chart(chart, {
    type: 'line',
    data: data,
    options: options
});
