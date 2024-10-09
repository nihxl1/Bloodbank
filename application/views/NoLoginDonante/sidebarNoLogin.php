<div class="wrapper">
        <aside id="sidebar">
            <div class="d-flex">
                <button class="toggle-btn" type="button">
                    <i class="lni lni-grid-alt"></i>
                </button>
                <div class="sidebar-logo">
                    <a href="<?php echo base_url('Welcome/index');?>">INICIO</a>
                </div>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-item ">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                        data-bs-target="#auth" aria-expanded="false" aria-controls="auth">
                        <i class="bi bi-droplet-half"></i>
                        <span>Porqué donar sangre</span>
                    </a>
                    <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="<?php echo base_url('NoLogin/Info/WhyGiveBlood');?>" class="sidebar-link">Porque donar</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="<?php echo base_url('NoLogin/Info/BloodUsage');?>" class="sidebar-link">Empleo de la sangre</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="<?php echo base_url('NoLogin/Info/BloodTypes');?>" class="sidebar-link">
                    <i class="bi bi-droplet-half"></i>
                        <span>Tipos de sangre</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                        data-bs-target="#donor" aria-expanded="false" aria-controls="auth">
                        <i class="bi bi-droplet-half"></i>
                        <span>Quien puede donar sangre</span>
                    </a>
                    <ul id="donor" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="<?php echo base_url('NoLogin/Info/BloodDonation');?>" class="sidebar-link">¿Puedo donar?</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="<?php echo base_url('NoLogin/Info/HealthandElegibility');?>" class="sidebar-link">Salud y aptitud</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="<?php echo base_url('NoLogin/Info/Considerations');?>" class="sidebar-link">Consideraciones</a>
                        </li>
                        
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="<?php echo base_url('NoLogin/Info/Process');?>" class="sidebar-link">
                    <i class="bi bi-droplet-half"></i>
                        <span>El proceso de donación</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="<?php echo base_url('NoLogin/Info/News');?>" class="sidebar-link">
                    <i class="bi bi-droplet-half"></i>
                        <span>Noticias</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="<?php echo base_url('NoLogin/Info/Quiz');?>" class="sidebar-link">
                    <i class="bi bi-droplet-half"></i>
                        <span>Quiz</span>
                    </a>
                </li>


            </ul>
        </aside>

<script>
const hamBurger = document.querySelector(".toggle-btn");
    hamBurger.addEventListener("click", function () {
    document.querySelector("#sidebar").classList.toggle("expand");
});
</script>
