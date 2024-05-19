<div class="main p-3">
    <div>
        <h2 style="margin: 20px;">DASHBOARD</h2>
    </div>
    <div class="container">
        <div class="row">
            <!-- Cards Section -->
            <?php foreach ($blood_data as $blood): ?>
                <div class="col-md-3">
                    <div class="card border-secondary mb-3" style="max-width: 18rem;">
                        <div class="card-body text-secondary">
                            <h5 class="card-title"><?php echo $blood['type'] . $blood['rh_factor']; ?><i class="bi bi-droplet-half"></i></h5>
                            <p class="card-text"><?php echo $blood['total_quantity']; ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <hr> 
        <div class="row">
            <div class="col-md-3">
                <a href="<?php echo base_url('Admin/BloodManagement/Donations');?>" class="card border-secondary mb-3" style="max-width: 18rem; text-decoration: none;">
                    <div class="row g-0">
                        <div class="col-md-2 d-flex align-items-center justify-content-center"> <!-- Modificado para centrar el icono -->
                            <i class="bi bi-droplet-fill" style="font-size: 2rem;"></i> <!-- Ajustado el tamaño del icono con estilos en línea -->
                        </div>
                        <div class="col-md-10">
                            <div class="card-body">
                                <h5 class="card-title">VER DONACIONES</h5>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
                        <div class="col-md-3">
                <a href="<?php echo base_url('Admin/BloodManagement/Transfusions');?>" class="card border-secondary mb-3" style="max-width: 18rem; text-decoration: none;">
                    <div class="row g-0">
                        <div class="col-md-2 d-flex align-items-center justify-content-center"> <!-- Modificado para centrar el icono -->
                        <i  class="bi bi-droplet" style="font-size: 2rem;"></i></i> <!-- Ajustado el tamaño del icono con estilos en línea -->
                        </div>
                        <div class="col-md-10">
                            <div class="card-body">
                                <h5 class="card-title">VER TRANSFUSIONS</h5>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="<?php echo base_url('Admin/Requests');?>" class="card border-secondary mb-3" style="max-width: 18rem; text-decoration: none;">
                    <div class="row g-0">
                        <div class="col-md-2 d-flex align-items-center justify-content-center"> <!-- Modificado para centrar el icono -->
                        <i class="bi-menu-down" style="font-size: 2rem;"></i>
                        </div>
                        <div class="col-md-10">
                            <div class="card-body">
                                <h5 class="card-title">VER SOLICITUDES</h5>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="<?php echo base_url('Admin/BloodManagement');?>" class="card border-secondary mb-3" style="max-width: 18rem; text-decoration: none;">
                    <div class="row g-0">
                        <div class="col-md-2 d-flex align-items-center justify-content-center"> <!-- Modificado para centrar el icono -->
                        <i class="bi bi-moisture" style="font-size: 2rem;"></i>
                        </div>
                        <div class="col-md-10">
                            <div class="card-body">
                                <h5 class="card-title">VER STOCK SANGRE</h5>
                            </div>
                        </div>
                    </div>
                </a>
            </div>            


        <div class="row">
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-header">
                        <span class="me-2"><i class="bi bi-bar-chart-fill"></i></span>
                        DONACIONES ÚLTIMO MES
                    </div>
                    <div class="card-body">
                        <!-- <canvas class="chart" width="400" height="200"></canvas> -->
                        <canvas id="donationsChart" class="chart" width="400" height="200"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-header">

                        <span class="me-2"><i class="bi bi-bar-chart-fill"></i></span>
                        TRANSFUSIONES ÚLTIMO MES
                    </div>
                    <div class="card-body">
                        <canvas id="transfusionsChart" class="chart" width="400" height="200"></canvas>
                        <!-- <canvas class="chart" width="400" height="200"></canvas> -->
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

    .bi-droplet-fill{ color: #71091E;}
    .bi-droplet{
        color: #71091E;
    }
    .bi-moisture{
        color: #71091E;
    }
    .bi-menu-down{
        color: #71091E;
    }


</style>
<script>
var colors = [
    'rgba(255, 99, 132, 0.2)', // A+
    'rgba(54, 162, 235, 0.2)', // A-
    'rgba(255, 206, 86, 0.2)', // B+
    'rgba(75, 192, 192, 0.2)', // B-
    'rgba(153, 102, 255, 0.2)', // AB+
    'rgba(255, 159, 64, 0.2)', // AB-
    'rgba(201, 203, 207, 0.2)', // O+
    'rgba(255, 99, 132, 0.2)'  // O-
];

var borderColors = [
    'rgba(255, 99, 132, 1)', // A+
    'rgba(54, 162, 235, 1)', // A-
    'rgba(255, 206, 86, 1)', // B+
    'rgba(75, 192, 192, 1)', // B-
    'rgba(153, 102, 255, 1)', // AB+
    'rgba(255, 159, 64, 1)', // AB-
    'rgba(201, 203, 207, 1)', // O+
    'rgba(255, 99, 132, 1)'  // O-
];

var donationsChartCtx = document.getElementById("donationsChart").getContext("2d");
var donationsChart = new Chart(donationsChartCtx, {
    type: "bar",
    data: {
        labels: ["A+", "A-", "B+", "B-", "AB+", "AB-", "O+", "O-"],
        datasets: [{
            label: "Cantidad de sangre (ml)",
            data: [
                <?php
                $donation_quantities = array_fill_keys(["A+", "A-", "B+", "B-", "AB+", "AB-", "O+", "O-"], 0);
                foreach ($donation_data as $row) {
                    $blood_type = $row['blood_type'];
                    $donation_quantities[$blood_type] = $row['total_quantity'];
                }
                echo implode(", ", $donation_quantities);
                ?>
            ],
            backgroundColor: function(context) {
                var index = context.dataIndex;
                return colors[index];
            },
            borderColor: function(context) {
                var index = context.dataIndex;
                return borderColors[index];
            },
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

var transfusionsChartCtx = document.getElementById("transfusionsChart").getContext("2d");
var transfusionsChart = new Chart(transfusionsChartCtx, {
    type: "bar",
    data: {
        labels: ["A+", "A-", "B+", "B-", "AB+", "AB-", "O+", "O-"],
        datasets: [{
            label: "Cantidad de sangre (ml)",
            data: [
                <?php
                $transfusion_quantities = array_fill_keys(["A+", "A-", "B+", "B-", "AB+", "AB-", "O+", "O-"], 0);
                foreach ($transfusion_data as $row) {
                    $blood_type = $row['blood_type'];
                    $transfusion_quantities[$blood_type] = $row['total_quantity'];
                }
                echo implode(", ", $transfusion_quantities);
                ?>
            ],
            backgroundColor: function(context) {
                var index = context.dataIndex;
                return colors[index];
            },
            borderColor: function(context) {
                var index = context.dataIndex;
                return borderColors[index];
            },
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

    $(document).ready(function () {
        $(".data-table").each(function (_, table) {
            $(table).DataTable();
        });
    });
</script>