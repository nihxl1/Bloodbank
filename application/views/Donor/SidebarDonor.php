<div class="wrapper">
        <aside id="sidebar">
            <div class="d-flex">
                <button class="toggle-btn" type="button">
                    <i class="lni lni-grid-alt"></i>
                </button>
                <div class="sidebar-logo">
                    <a href="<?php echo base_url('Donor/Dashboard');?>">DASHBOARD</a>
                </div>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="<?php echo base_url('Donor/Profile');?>" class="sidebar-link">
                        <i class="lni lni-user"></i>
                        <span>Perfil</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="<?php echo base_url('Donor/Donations');?>" class="sidebar-link">
                        <i class="bi bi-droplet-half" style="color: white;"></i>
                        <span>Historial donaciones</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                        data-bs-target="#cita" aria-expanded="false" aria-controls="auth">
                        <i class="bi bi-calendar-plus"></i>
                        <!-- <i class="bi bi-file-earmark-break"></i> -->
                        <span>Solicitudes</span>
                    </a>
                    <ul id="cita" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="<?php echo base_url('Donor/Request');?>" class="sidebar-link">Ver Todas</a>
                        </li>
                        
                    </ul>
                </li>
                <!-- <li class="sidebar-item">
                    <a href="<?php echo base_url('Donor/Request');?>" class="sidebar-link">
                        <i class="lni lni-popup"></i>
                        <span>Solicitudes</span>
                    </a>
                </li> -->
                <li class="sidebar-item">
                    <a href="<?php echo base_url('Donor/Quiz');?>" class="sidebar-link">
                    <i class="bi bi-file-earmark-break"></i>
                        <span>Quiz</span>
                    </a>
                </li>
            </ul>
            <div class="sidebar-footer">
                <a href="<?php echo base_url('LoginController/logout');?>" class="sidebar-link">
                    <i class="lni lni-exit"></i>
                    <span>Logout</span>
                </a>
            </div>
        </aside>

<script>
const hamBurger = document.querySelector(".toggle-btn");
    hamBurger.addEventListener("click", function () {
    document.querySelector("#sidebar").classList.toggle("expand");
});
</script>