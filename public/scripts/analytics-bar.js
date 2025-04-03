document.addEventListener('DOMContentLoaded', function() {
    const reportCtx = document.getElementById('reportChart');
    // Chart configuration
    const config = {
        type: 'bar',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'July', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            datasets: [
                {
                    label: 'Notes',
                    data: [15, 20, 25, 30, 25, 20, 35, 40, 30, 25, 20, 15],
                    backgroundColor: '#1E2054', 
                    borderRadius: 4, 
                    barPercentage: 1
                },
                {
                    label: 'Tasks',
                    data: [10, 15, 20, 25, 30, 25, 20, 15, 25, 30, 35, 40],
                    backgroundColor: '#FCDCD2', 
                    borderRadius: 4,
                    barPercentage: 1
                }
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            devicePixelRatio: 2,
            scales: {
                y: {
                    beginAtZero: true,
                    max: 40,
                    ticks: {
                        stepSize: 5,
                        font: {
                            weight: 'bold',
                            family: '"Poppins", sans-serif',
                            size: 12
                        },
                        color: '#1e2054'
                    },
                    grid: {
                        color: 'rgb(157, 157, 157)',
                        drawBorder: false
                    },
                },
                x: {
                    ticks: {
                        font: {
                            weight: 'bold',
                            family: '"Poppins", sans-serif',
                            size: 12
                        },
                        color: '#1e2054'
                    },
                    grid: {
                        display: false,
                        drawBorder: false
                    }
                }
            },
            plugins: {
                legend: {
                    position: 'top',
                    labels: {
                        font: {
                            family: '"Poppins", sans-serif',
                            weight: 'bold',
                            size: 16
                        },
                        padding: 20,
                        boxWidth: 15,
                        boxHeight: 15,
                        color: '#1e2054',
                        usePointStyle: false
                    }
                },
                tooltip: {
                    titleFont: {
                        family: '"Poppins", sans-serif',
                        weight: 'bold',
                        size: 12
                    },
                    bodyFont: {
                        family: '"Poppins", sans-serif',
                        weight: 'bold',
                        size: 14
                    },
                    padding: 10,
                    backgroundColor: 'rgba(30, 32, 84, 0.9)'
                }
            },
            animation: {
                duration: 1000,
                easing: 'easeOutQuart'
            }
        }
    };

    // Initialize chart
    try {
        new Chart(reportCtx.getContext('2d'), config);
    } catch (error) {
        console.error('Chart initialization failed:', error);
    }

    const searchBar = document.querySelector('.search-bar');
    if (searchBar) {
        searchBar.addEventListener('input', function(e) {
            // Implement search/filter logic here
            console.log('Search query:', e.target.value);
        });
    }
});