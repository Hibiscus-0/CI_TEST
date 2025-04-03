document.addEventListener('DOMContentLoaded', function() {
    const ctx = document.getElementById('userChart').getContext('2d');
    
    new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'July', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            datasets: [{
                label: '',
                data: [10, 15, 8, 22, 18, 25, 30, 28, 20, 15, 10, 5],
                borderColor: '#1e2054', 
                borderWidth: 2,
                pointBackgroundColor: '#1e2054',
                pointRadius: 4,
                pointHoverRadius: 7,
                fill: true,
                backgroundColor: 'rgba(252, 220, 210, 0.5)',
                tension: 0.1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false 
                },
                 tooltip: {
            enabled: true, // Enable tooltips (default)
            backgroundColor: 'rgba(30, 32, 84, 0.9)', // Dark blue background
            titleColor: '#ffffff', // White title text
            bodyColor: '#ffffff', // Peach body text
            padding: 12,
            cornerRadius: 8,
            displayColors: false, 
            titleFont: {
                family: '"Poppins", sans-serif',
                size: 12,
                weight: '700' 
            },
            bodyFont: {
                family: '"Poppins", sans-serif',
                size: 14,
                weight: '700' 
            },
            callbacks: {
                title: function(context) {
                    return context[0].label; 
                },
                label: function(context) {
                    return 'Users: ' + context.parsed.y; 
                }
            }
        }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    grid: {
                        color: 'rgb(157, 157, 157)'
                    },
                    ticks: {
                        stepSize: 5,
                        font: {
                            weight: 'bold', 
                            family: '"Poppins", sans-serif' 
                        },
                        color: '#1e2054'
                    },
                    max: 35 
                },
                x: {
                    grid: { display: false },
                ticks: {
                    font: {
                        weight: 'bold', 
                        family: '"Poppins", sans-serif' 
                    },
                    color: '#1e2054'
                }
            }
        },
            elements: {
                line: {
                    tension: 0 
                }
            }
        }
    });
});