const labelsFamilia = {!! json_encode($labelsFamilia) !!};
const dataFamilia = {!! json_encode($totalesFamilia) !!};

document.addEventListener('DOMContentLoaded', () => {
    new Chart(document.getElementById('totalProductosChart'), {
        type: 'bar',
        data: {
            labels: ['Productos'],
            datasets: [{
                label: 'Cantidad',
                data: [{{ $totalProductos }}],
                backgroundColor: '#23518c',
                borderColor: '#1b2126',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    new Chart(document.getElementById('valorInventarioChart'), {
        type: 'bar',
        data: {
            labels: ['Valor Total'],
            datasets: [{
                label: '€',
                data: [{{ $valorInventario }}],
                backgroundColor: '#5b7ba6',
                borderColor: '#1b2126',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    if (labelsFamilia.length > 0 && dataFamilia.length > 0) {
        new Chart(document.getElementById('familiaChart'), {
            type: 'bar',
            data: {
                labels: labelsFamilia,
                datasets: [{
                    label: 'Productos por Familia',
                    data: dataFamilia,
                    backgroundColor: '#88a0bf',
                    borderColor: '#1b2126',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    } else {
        console.warn('No hay datos suficientes para graficar productos por familia.');
    }
});