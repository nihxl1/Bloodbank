<div class="main p-3">
    <title>ESTADÍSTICAS</title>
    <div>
        <h2 style="margin: 20px;">ESTADÍSTICAS</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card border-secondary mb-3">
                    <div class="row"> 
                        <?php foreach ($pouches_data as $pouch): ?>
                            <div class="col border-right border-danger">
                                <div class="card-body text-secondary text-center">
                                    <h5 class="card-title"><?php echo $pouch['type']; ?><i class="bi bi-droplet-half"></i></h5>
                                    <p class="card-text"><?php echo $pouch['quantity']; ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 mb-3">
                        <div class="card h-100 d-flex align-items-center justify-content-center">
                            <div class="card-body text-center">
                                <canvas id="myChart2" style="width: 100%; height: 210%;"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 mb-3 mb-sm-0">
                        <div class="card h-100 d-flex align-items-center justify-content-center">
                            <div class="card-body text-center">
                                <canvas id="myChart3" style="width: 100%; height: 100%;"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 mb-3 mb-sm-0">
                        <div class="card h-100 d-flex align-items-center justify-content-center">
                            <div class="card-body text-center">
                                <canvas id="myChart5" style="width: 100%; height: 250%;"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-items-center justify-content-center" style="top-margin: 0.5cm" >
                <div class="card border-secondary mb-3 h-100" style="max-width: 200rem;" >
                    <div class="card-body text-secondary text-center d-flex flex-column justify-content-center" style="height: 100%;" style="top-margin: 0.5cm">
                        
                    <div class="card h-90" id="aviso" style="bottom-margin: 4.5cm">
                        <div class="card-header">
                            <span class="me-2"><i class="bi bi-bar-chart-fill"></i></span>
                            AVISO
                        </div>
                        <div class="card-body">
                            Tipo de sangre más bajo: <?php echo $lowest_blood_type['type']; ?> <?php echo $lowest_blood_type['rh_factor']; ?>
                         
                            <form action="<?php echo base_url('EmailController/index'); ?>" method="post">
                                <button class="btn btn-primary" type="submit" id="red">Envié emails</button>
                            </form>
                    
                        </div>
                    </div>
                        <canvas id="myChart" style="max-height: 100%;"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-6">
                <div class="card border-secondary mb-3" style="max-width: 40rem;">
                    <div class="row g-0">
                        <div class="col-md-2 d-flex align-items-center justify-content-center">
                            <i class="bi bi-droplet-fill" style="font-size: 2rem;"></i>
                        </div>
                        <div class="col-md-10">
                            <div class="card-body">
                                <a href="<?php echo base_url('Admin/BloodManagement/Transfusions');?>"  class="card-title">VER TRANSFUSIONES</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card border-secondary mb-3" style="max-width: 40rem;">
                    <div class="row g-0">
                        <div class="col-md-2 d-flex align-items-center justify-content-center">
                            <i class="bi bi-droplet" style="font-size: 2rem;"></i>
                        </div>
                        <br>
                        <div class="col-md-10">
                            <div class="card-body">
                            <a href="<?php echo base_url('Admin/BloodManagement/Donations');?>"  class="card-title">VER DONACIONES</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .card-title {
        text-align: right;
    }

    .bi-droplet-half {
        color: #71091E;
    }

    .bi-droplet-fill {
        color: #71091E;
    }

    .bi-droplet {
        color: #71091E;
    }

    .bi-moisture {
        color: #71091E;
    }

    .bi-menu-down {
        color: #71091E;
    }

    #aviso{
        color: #71091E;
        background-color: #eef0f1;
    }

    #red{
    background-color: #71091E;
    color: white; 
    border-color: #71091E; 

}
</style>

<script>


   const ctx = document.getElementById('myChart').getContext('2d');

    const aggregatedBloodInventoryData = <?php echo json_encode($aggregated_blood_inventory); ?>;

    const labels = aggregatedBloodInventoryData.map(item => item.type);
    const data = aggregatedBloodInventoryData.map(item => item.total_quantity);

    const config = {
        type: 'doughnut',
        data: {
            labels: labels,
            datasets: [{
                label: 'Blood Inventory',
                data: data,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 205, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(54, 162, 235, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(255, 159, 64, 1)',
                    'rgba(255, 205, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(54, 162, 235, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            plugins: {
                title: {
                    display: true,
                    text: 'Cantidad de sangre'
                },
                legend: {
                    position: 'bottom',
                }
            }
        }
    };

const myChart = new Chart(ctx, config);

document.addEventListener('DOMContentLoaded', function() {
    const ctx = document.getElementById('myChart2').getContext('2d');
    // const donations = <?php echo json_encode($recent_donations); ?>;
    // const transfusions = <?php echo json_encode($recent_transfusions); ?>;
    const totalDonations = <?php echo $recent_donations; ?>;
    const totalTransfusions = <?php echo $recent_transfusions; ?>;

    const labels = [''];
    const data = {
        labels: labels,
        datasets: [
            {
                label: 'Donaciones',
                data: [totalDonations],
                borderColor: 'rgba(54, 162, 235, 1)',
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderWidth: 2,
            },
            {
                label: 'Transfusiones',
                data: [totalTransfusions],
                borderColor: 'rgba(255, 99, 132, 1)',
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderWidth: 2,
            }
        ]
    };

    const config = {
        type: 'bar',
        data: data,
        options: {
            indexAxis: 'y',
            elements: {
                bar: {
                    borderWidth: 2,
                }
            },
            responsive: true,
            plugins: {
                legend: {
                    position: 'bottom',
                },
                title: {
                    display: true,
                    text: 'Donaciones/Transfusiones en los últimos 6 meses'
                }
            }
        },
    };

    const myChart2 = new Chart(ctx, config);
});

// document.addEventListener('DOMContentLoaded', function() {
//     const ctx = document.getElementById('myChart2').getContext('2d');
//     const donations = <?php echo json_encode($recent_donations); ?>;
//     const transfusions = <?php echo json_encode($recent_transfusions); ?>;

//     const labels = [''];
//     const data = {
//         labels: labels,
//         datasets: [
//             {
//                 label: 'Donaciones',
//                 data: donations.map(item => item.count),
//                 borderColor: 'rgba(54, 162, 235, 1)',
//                 backgroundColor: 'rgba(54, 162, 235, 0.2)',
//                 borderWidth: 2,
//             },
//             {
//                 label: 'Transfusiones',
//                 data: transfusions.map(item => item.count),
//                 borderColor: 'rgba(255, 99, 132, 1)',
//                 backgroundColor: 'rgba(255, 99, 132, 0.2)',
//                 borderWidth: 2,
//             }
//         ]
//     };

//     const config = {
//         type: 'bar',
//         data: data,
//         options: {
//             indexAxis: 'y',
//             elements: {
//                 bar: {
//                     borderWidth: 2,
//                 }
//             },
//             responsive: true,
//             plugins: {
//                 legend: {
//                     position: 'bottom',
//                 },
//                 title: {
//                     display: true,
//                     text: 'Donaciones/Transfusiones en los últimos 6 meses'
//                 }
//             }
//         },
//     };

//     const myChart2 = new Chart(ctx, config);
// });


    document.addEventListener('DOMContentLoaded', function() {
        const data = <?php echo json_encode($patient_diseases); ?>;

        const config = {
            type: 'bar',
            data: {
                labels: data.labels,
                datasets: [{
                    label: 'Enfermedades por paciente',
                    data: data.data,
                    backgroundColor: 'rgba(255, 99, 132, 0.5)',
                    borderColor: 'rgba(255, 159, 64, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'bottom',
                    },
                    title: {
                        display: true,
                        text: 'Enfermedades por paciente'
                    }
                }
            }
        };

        const ctx3 = document.getElementById('myChart3').getContext('2d');
        const myChart3 = new Chart(ctx3, config);
    });



const actions = [{
        name: 'Randomize',
        handler(chart) {
            chart.data.datasets.forEach(dataset => {
                dataset.data = Utils.numbers({
                    count: chart.data.labels.length,
                    min: 0,
                    max: 100
                });
            });
            chart.update();
        }
    },
    {
        name: 'Add Dataset',
        handler(chart) {
            const data = chart.data;
            const newDataset = {
                label: 'Dataset ' + (data.datasets.length + 1),
                backgroundColor: [],
                data: [],
            };

            for (let i = 0; i < data.labels.length; i++) {
                newDataset.data.push(Utils.numbers({
                    count: 1,
                    min: 0,
                    max: 100
                }));

                const colorIndex = i % Object.keys(Utils.CHART_COLORS).length;
                newDataset.backgroundColor.push(Object.values(Utils.CHART_COLORS)[colorIndex]);
            }

            chart.data.datasets.push(newDataset);
            chart.update();
        }
    },
    {
        name: 'Add Data',
        handler(chart) {
            const data = chart.data;
            if (data.datasets.length > 0) {
                data.labels.push('data #' + (data.labels.length + 1));

                for (let index = 0; index < data.datasets.length; ++index) {
                    data.datasets[index].data.push(Utils.rand(0, 100));
                }

                chart.update();
            }
        }
    },
    {
        name: 'Hide(0)',
        handler(chart) {
            chart.hide(0);
        }
    },
    {
        name: 'Show(0)',
        handler(chart) {
            chart.show(0);
        }
    },
    {
        name: 'Hide (0, 1)',
        handler(chart) {
            chart.hide(0, 1);
        }
    },
    {
        name: 'Show (0, 1)',
        handler(chart) {
            chart.show(0, 1);
        }
    },
    {
        name: 'Remove Dataset',
        handler(chart) {
            chart.data.datasets.pop();
            chart.update();
        }
    },
    {
        name: 'Remove Data',
        handler(chart) {
            chart.data.labels.splice(-1, 1);
            chart.data.datasets.forEach(dataset => {
                dataset.data.pop();
            });

            chart.update();
        }
    }
];
</script>


<script>
document.addEventListener('DOMContentLoaded', function () {
    var donorAgeData = <?php echo json_encode($donor_age_distribution); ?>;

    var labels = [];
    var data = [];
    var backgroundColor = [];
    var borderColor = []; 

    donorAgeData.forEach(function (item) {
        labels.push(item.age_group);
        data.push(item.donor_count);
        backgroundColor.push(getBackgroundColor(item.age_group));
        borderColor.push(getBorderColor(item.age_group)); 
    });

    const config = {
    type: 'pie',
    data: {
        labels: labels,
        datasets: [{
            label: 'Edades/donate',
            data: data,
            backgroundColor: backgroundColor,
            borderColor: borderColor, 
            borderWidth: 1, 
            hoverOffset: 4
        }]
    },
    options: {
        plugins: {
            title: {
                display: true,
                text: 'Media de donantes por edad', 
                // font: {
                //     size: 18, // Adjust font size as needed
                //     weight: 'bold' // Adjust font weight as needed
                // }
            },
            legend: {
                position: 'bottom',
            }
        },
        layout: {
            padding: {
                bottom: 01  // Adjust as needed to ensure space for labels at the bottom
            }
        }
    }
};




    var ctx = document.getElementById('myChart5').getContext('2d');
    var myChart = new Chart(ctx, config);
});

function getBackgroundColor(ageGroup) {
    switch (ageGroup) {
        case '<18':
            return 'rgba(255, 99, 132, 0.2)';
        case '18-25':
            return 'rgba(255, 159, 64, 0.2)';
        case '26-40':
            return 'rgba(255, 205, 86, 0.2)';
        case '41-65':
            return 'rgba(75, 192, 192, 0.2)';
        case '>65':
            return 'rgba(54, 162, 235, 0.2)';
        default:
            return 'rgb(201, 203, 207)';
    }
}

function getBorderColor(ageGroup) {
    switch (ageGroup) {
        case '<18':
            return 'rgb(255, 99, 132)';
        case '18-25':
            return 'rgb(255, 159, 64)';
        case '26-40':
            return 'rgb(255, 205, 86)';
        case '41-65':
            return 'rgb(75, 192, 192)';
        case '>65':
            return 'rgb(54, 162, 235)';
        default:
            return 'rgb(201, 203, 207)';
    }
}
</script>

<script>
//     document.addEventListener('DOMContentLoaded', function() {
//     const ctx = document.getElementById('myChart2').getContext('2d');
//     // const donations = <?php echo json_encode($recent_donations); ?>;
//     // const transfusions = <?php echo json_encode($recent_transfusions); ?>;
//     const totalDonations = <?php echo $recent_donations; ?>;
//     const totalTransfusions = <?php echo $recent_transfusions; ?>;

//     const labels = [''];
//     const data = {
//         labels: labels,
//         datasets: [
//             {
//                 label: 'Donaciones',
//                 data: [totalDonations],
//                 borderColor: 'rgba(54, 162, 235, 1)',
//                 backgroundColor: 'rgba(54, 162, 235, 0.2)',
//                 borderWidth: 2,
//             },
//             {
//                 label: 'Transfusiones',
//                 data: [totalTransfusions],
//                 borderColor: 'rgba(255, 99, 132, 1)',
//                 backgroundColor: 'rgba(255, 99, 132, 0.2)',
//                 borderWidth: 2,
//             }
//         ]
//     };

//     const config = {
//         type: 'bar',
//         data: data,
//         options: {
//             indexAxis: 'y',
//             elements: {
//                 bar: {
//                     borderWidth: 2,
//                 }
//             },
//             responsive: true,
//             plugins: {
//                 legend: {
//                     position: 'bottom',
//                 },
//                 title: {
//                     display: true,
//                     text: 'Donaciones/Transfusiones en los últimos 6 meses'
//                 }
//             }
//         },
//     };

//     const myChart2 = new Chart(ctx, config);
// });

</script>