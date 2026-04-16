const ctx1 = document.getElementById('vendasChart');

new Chart(ctx1, {
    type: 'line',
    data: {
        labels: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun'],
        datasets: [{
            label: 'Vendas (R$)',
            data: [1200, 1900, 3000, 2500, 2200, 3200],
            borderWidth: 2,

            borderColor: '#eeb333',
            backgroundColor: 'rgba(238, 179, 51, 0.2)',
            pointBackgroundColor: '#eeb333', 
            pointBorderColor: '#fff',

            tension: 0.3
        }]
    },
    options: {
        responsive: true,
        plugins: {
            legend: {
                labels: {
                    color: '#fff'
                }
            }
        },
        scales: {
            x: {
                ticks: {
                    color: '#aaa'
                },
                grid: {
                    color: '#2a2a2a'
                }
            },
            y: {
                ticks: {
                    color: '#aaa'
                },
                grid: {
                    color: '#2a2a2a'
                }
            }
        }
    }
});

const ctx2 = document.getElementById('estoqueChart');

new Chart(ctx2, {
    type: 'bar',
    data: {
        labels: ['Cimento', 'Areia', 'Brita', 'Tijolo'],
        datasets: [{
            label: 'Quantidade',
            data: [50, 80, 40, 100],

            backgroundColor: '#eeb333',
            borderColor: '#d49a1f',
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        plugins: {
            legend: {
                labels: {
                    color: '#fff'
                }
            }
        },
        scales: {
            x: {
                ticks: {
                    color: '#aaa'
                },
                grid: {
                    color: '#2a2a2a'
                }
            },
            y: {
                ticks: {
                    color: '#aaa'
                },
                grid: {
                    color: '#2a2a2a'
                }
            }
        }
    }
});

var ctx = document.getElementById('meuGraficoPizza').getContext('2d');

var meuGrafico = new Chart(ctx, {
    type: 'doughnut',

    data: {
        labels: ['Sales', 'Product', 'Income'],
        datasets: [{
            data: [64, 25, 11],

            backgroundColor: [
                '#4da3ff',
                '#ff5a5a',
                '#eeb333'
            ],

            borderColor: '#1f1f23',
            borderWidth: 3,
            cutout: '70%'
        }]
    },

    options: {
        responsive: true,

        plugins: {
            legend: {
                display: false
            }
        }
    }
});