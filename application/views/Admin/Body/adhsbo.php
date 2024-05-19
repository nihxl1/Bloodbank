<div class="main p-3">
    <div>
        <h2 style="margin: 20px;">DASHBOARD</h2>
    </div>
    <div class="container">
        <div class="row">
            <!-- Cards Section -->
            <div class="col-md-3">
                <div class="card border-secondary mb-3" style="max-width: 18rem;">
                    <div class="card-body text-secondary">
                        <h5 class="card-title">A+<i class="bi bi-droplet-half"></i></h5>
                        <p class="card-text">12</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-secondary mb-3" style="max-width: 18rem;">
                    <div class="card-body text-secondary">
                        <h5 class="card-title">A+<i class="bi bi-droplet-half"></i></h5>
                        <p class="card-text">12</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-secondary mb-3" style="max-width: 18rem;">
                    <div class="card-body text-secondary">
                        <h5 class="card-title">A+<i class="bi bi-droplet-half"></i></h5>
                        <p class="card-text">12</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-secondary mb-3" style="max-width: 18rem;">
                    <div class="card-body text-secondary">
                        <h5 class="card-title">A+<i class="bi bi-droplet-half"></i></h5>
                        <p class="card-text">12</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="card border-secondary mb-3" style="max-width: 18rem;">
                    <div class="card-body text-secondary">
                        <h5 class="card-title">A+<i class="bi bi-droplet-half"></i></h5>
                        <p class="card-text">12</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-secondary mb-3" style="max-width: 18rem;">
                    <div class="card-body text-secondary">
                        <h5 class="card-title">A+<i class="bi bi-droplet-half"></i></h5>
                        <p class="card-text">12</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-secondary mb-3" style="max-width: 18rem;">
                    <div class="card-body text-secondary">
                        <h5 class="card-title">A+<i class="bi bi-droplet-half"></i></h5>
                        <p class="card-text">12</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-secondary mb-3" style="max-width: 18rem;">
                    <div class="card-body text-secondary">
                        <h5 class="card-title">A+<i class="bi bi-droplet-half"></i></h5>
                        <p class="card-text">12</p>
                    </div>
                </div>
            </div>
        </div>
        <hr> 
        <div class="row">
            <div class="col-md-3">
                <a href="<?php echo base_url('Admin/BloodManagement/Donations');?>" class="card border-secondary mb-3" style="max-width: 18rem; text-decoration: none;">
                    <div class="row g-0">
                        <div class="col-md-2 d-flex align-items-center justify-content-center"> 
                            <i class="bi bi-droplet-fill" style="font-size: 2rem;"></i> 
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
                        <div class="col-md-2 d-flex align-items-center justify-content-center">
                        <i  class="bi bi-droplet" style="font-size: 2rem;"></i></i> 
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
                        <div class="col-md-2 d-flex align-items-center justify-content-center">
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
                        <div class="col-md-2 d-flex align-items-center justify-content-center"> 
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
                        <canvas class="chart" width="400" height="200"></canvas>
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
                        <canvas class="chart" width="400" height="200"></canvas>
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
    const charts = document.querySelectorAll(".chart");

    charts.forEach(function (chart) {
        var ctx = chart.getContext("2d");
        var myChart = new Chart(ctx, {
            type: "bar",
            data: {
                labels: ["A+", "A-", "B+", "B-", "AB+", "AB-", "O+", "O-"],
                datasets: [
                    {
                        label: "Cant. sangre",
                        data: [12, 19, 3, 5, 2, 3, 10, 20],
                        backgroundColor: [
                            "rgba(255, 99, 132, 0.2)",
                            "rgba(54, 162, 235, 0.2)",
                            "rgba(255, 206, 86, 0.2)",
                            "rgba(75, 192, 192, 0.2)",
                            "rgba(153, 102, 255, 0.2)",
                            "rgba(255, 159, 64, 0.2)",
                            "rgba(255, 99, 132, 0.2)",
                            "rgba(54, 162, 235, 0.2)",
                        ],
                        borderColor: [
                            "rgba(255, 99, 132, 1)",
                            "rgba(54, 162, 235, 1)",
                            "rgba(255, 206, 86, 1)",
                            "rgba(75, 192, 192, 1)",
                            "rgba(153, 102, 255, 1)",
                            "rgba(255, 159, 64, 1)",
                            "rgba(255, 99, 132, 1)",
                            "rgba(54, 162, 235, 1)",
                        ],
                        borderWidth: 1,
                    },
                ],
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                    },
                },
            },
        });
    });

    $(document).ready(function () {
        $(".data-table").each(function (_, table) {
            $(table).DataTable();
        });
    });
</script>



<!-- <title>Dashboard</title>
<div class="main p-3">
    <div><h2 style="margin: 20px;">DASHBOARD</h2></div>
    <div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="card border-secondary mb-3" style="max-width: 18rem;">
                <div class="card-body text-secondary">
                    <h5 class="card-title">A+<i class="bi bi-droplet-half"></i></h5>
                    <p class="card-text">12</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-secondary mb-3" style="max-width: 18rem;">
                <div class="card-body text-secondary">
                    <h5 class="card-title">A+<i class="bi bi-droplet-half"></i></h5>
                    <p class="card-text">12</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-secondary mb-3" style="max-width: 18rem;">
                <div class="card-body text-secondary">
                    <h5 class="card-title">A+<i class="bi bi-droplet-half"></i></h5>
                    <p class="card-text">12</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-secondary mb-3" style="max-width: 18rem;">
                <div class="card-body text-secondary">
                    <h5 class="card-title">A+<i class="bi bi-droplet-half"></i></h5>
                    <p class="card-text">12</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="card border-secondary mb-3" style="max-width: 18rem;">
                <div class="card-body text-secondary">
                    <h5 class="card-title">A+<i class="bi bi-droplet-half"></i></h5>
                    <p class="card-text">12</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-secondary mb-3" style="max-width: 18rem;">
                <div class="card-body text-secondary">
                    <h5 class="card-title">A+<i class="bi bi-droplet-half"></i></h5>
                    <p class="card-text">12</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-secondary mb-3" style="max-width: 18rem;">
                <div class="card-body text-secondary">
                    <h5 class="card-title">A+<i class="bi bi-droplet-half"></i></h5>
                    <p class="card-text">12</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-secondary mb-3" style="max-width: 18rem;">
                <div class="card-body text-secondary">
                    <h5 class="card-title">A+<i class="bi bi-droplet-half"></i></h5>
                    <p class="card-text">12</p>
                </div>
            </div>
        </div>


    </div>
    <hr> 
    <div class="row">
        <div class="col-md-3">
            <div class="card border-secondary mb-3" style="max-width: 18rem;">
                <div class="card-body text-secondary">
                    <h5 class="card-title">VER DONACIONES</h5>
                    
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-secondary mb-3" style="max-width: 18rem;">
                <div class="card-body text-secondary">
                    <h5 class="card-title">VER TRANSFUSIONES </h5>
                    
                </div>
            </div>
        </div>
        <div class="col-md-3">
    <div class="card border-secondary mb-3" style="max-width: 18rem;">
        <div class="card-body text-secondary">
            <h5 class="card-title">VER SOLICITUDES</h5>
        </div>
    </div>
</div>

<div class="col-md-3">
    <div class="card border-secondary mb-3" style="max-width: 18rem;">
        <div class="row g-0"> 
            <div class="col-md-4">
                <i class="bi bi-moisture"></i>
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">VER SANGRE</h5>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

    
<div class="row">
<div class="col-md-6" >
<div class="card h-100">
              <div class="card-header">
                <span class="me-2"><i class="bi bi-bar-chart-fill"></i></span>
                DONACIONES ÚLTIMO MES
              </div>
              <div class="card-body">
                <canvas class="chart" width="400" height="200"></canvas>
              </div>
            </div>
    </div>
    <div class="col-md-6" >
<div class="card h-100">
              <div class="card-header">
                <span class="me-2"><i class="bi bi-bar-chart-fill"></i></span>
                TRANSFUSIONES ÚLTIMO MES
              </div>
              <div class="card-body">
                <canvas class="chart" width="400" height="200"></canvas>
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
</style>




<script>
const charts = document.querySelectorAll(".chart");

charts.forEach(function (chart) {
  var ctx = chart.getContext("2d");
  var myChart = new Chart(ctx, {
    type: "bar",
    data: {
      labels: ["A+", "A-", "B+", "B-", "AB+", "AB-","O+", "O-"],
      datasets: [
        {
          label: "Cant. sangre",
          data: [12, 19, 3, 5, 2, 3,10,20],
          backgroundColor: [
            "rgba(255, 99, 132, 0.2)",
            "rgba(54, 162, 235, 0.2)",
            "rgba(255, 206, 86, 0.2)",
            "rgba(75, 192, 192, 0.2)",
            "rgba(153, 102, 255, 0.2)",
            "rgba(255, 159, 64, 0.2)",
            "rgba(255, 99, 132, 0.2)",
            "rgba(54, 162, 235, 0.2)",
          ],
          borderColor: [
            "rgba(255, 99, 132, 1)",
            "rgba(54, 162, 235, 1)",
            "rgba(255, 206, 86, 1)",
            "rgba(75, 192, 192, 1)",
            "rgba(153, 102, 255, 1)",
            "rgba(255, 159, 64, 1)",
            "rgba(255, 99, 132, 1)",
            "rgba(54, 162, 235, 1)",
          ],
          borderWidth: 1,
        },
      ],
    },
    options: {
      scales: {
        y: {
          beginAtZero: true,
        },
      },
    },
  });
});

$(document).ready(function () {
  $(".data-table").each(function (_, table) {
    $(table).DataTable();
  });
});



</script> -->



































































































































































































































































































































































































































































































































































































































































































































































































































