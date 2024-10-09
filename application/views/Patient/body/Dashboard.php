<div class="main p-3">
    <title>DASHBOARD</title>
    <div>
        <h2 style="margin: 20px;">Bienvenido, <?php echo $user_name; ?>!</h2>
    </div>
    <div class="container">
        <div class="row justify-content-center" style="margin-top: 50px;">
            <div class="col-md-12 text-center">
                <img id="blood-image" src="../../../../img/blood-image.png" alt="Células de sangre" style="max-width: 100%;">
            </div>   
        </div>
        
        <hr> 
        
        <div class="row justify-content-center">
            
            <div class="col-md-3">
                <a href="<?php echo base_url('Patient/Transfutions');?>" class="card border-secondary mb-3 d-flex flex-column align-items-center justify-content-center" style="max-width: 16rem; height: 11rem; text-decoration: none;">
                    <div class="row g-0">
                        <div class="col-md-12 d-flex align-items-center justify-content-center">
                            <i class="bi bi-calendar-check" style="font-size: 3rem; color: #71091E;"></i>
                        </div>
                    </div>
                    <div class="row g-0">
                        <div class="col-md-12">
                            <div class="card-body text-center">
                                <h5 class="card-title">TRANSFUSIONES</h5>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3">
                <a href="<?php echo base_url('Patient/Profile');?>" class="card border-secondary mb-3 d-flex flex-column align-items-center justify-content-center" style="max-width: 16rem; height: 11rem; text-decoration: none;">
                    <div class="row g-0">
                        <div class="col-md-12 d-flex align-items-center justify-content-center">
                            <i class="bi bi-person-gear" style="font-size: 3rem; color: #71091E;"></i>
                        </div>
                    </div>
                    <div class="row g-0">
                        <div class="col-md-12">
                            <div class="card-body text-center">
                                <h5 class="card-title">PERFIL</h5>
                            </div>
                        </div>
                    </div>
                </a>
            </div> 
        </div>
    </div>
</div>


<style>
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
    .card {
    width: 16rem;
    height: 11rem;
    }
    .card i {
        margin-bottom: 1rem; 
    }
    .card-body {
        flex: 1; 
    }
    .card-img-top {
    max-width: 100%;
    height: auto;
    }


    /* #blood-image {
     max-width: 80%;  
    border-radius: 23%;
    } */

</style>

