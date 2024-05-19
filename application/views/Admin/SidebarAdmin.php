<div class="wrapper">
        <aside id="sidebar">
            <div class="d-flex">
                <button class="toggle-btn" type="button">
                    <i class="lni lni-grid-alt"></i>
                </button>
                <div class="sidebar-logo">
                    <a href="<?php echo base_url('Admin/DashboardController');?>">DASHBOARD</a>
                </div>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="<?php echo base_url('Admin/ProfileController');?>" class="sidebar-link">
                        <i class="lni lni-user"></i>
                        <span>Perfil</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                        data-bs-target="#auth" aria-expanded="false" aria-controls="auth">
                        <i class="bi bi-file-earmark-person"></i>
                        <span>Pacientes</span>
                    </a>
                    <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="<?php echo base_url('Admin/Patients');?>" class="sidebar-link">Ver todos</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="<?php echo base_url('Admin/Patients/register_Patient');?>" class="sidebar-link">Añadir</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                        data-bs-target="#donor" aria-expanded="false" aria-controls="auth">
                        <i class="bi bi-file-earmark-person-fill"></i>
                        <span>Donantes</span>
                    </a>
                    <ul id="donor" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="<?php echo base_url('Admin/Donors');?>" class="sidebar-link">Ver todos</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="<?php echo base_url('Admin/Donors/register_donor');?>" class="sidebar-link">Añadir</a>
                        </li>
                    </ul>
                </li>
                <!-- <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                        data-bs-target="#cita" aria-expanded="false" aria-controls="auth">
                        <i class="bi bi-calendar-plus"></i>
                        <span>Citas</span>
                    </a>
                    <ul id="cita" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="<?php echo base_url('Admin/Appointments');?>" class="sidebar-link">Ver Todas</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="<?php echo base_url('Admin/Appointments/addAppointment');?>" class="sidebar-link">Agendar cita</a>
                        </li>
                    </ul>
                </li> -->
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                        data-bs-target="#blood" aria-expanded="false" aria-controls="auth">
                        <i class="bi bi-clipboard-data"></i>
                        <span>Gestión sangre</span>
                    </a>
                    <ul id="blood" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="<?php echo base_url('Admin/BloodManagement');?>" class="sidebar-link">Estadísticas</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="<?php echo base_url('Admin/BloodManagement/Donations');?>" class="sidebar-link">Donaciones</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="<?php echo base_url('Admin/BloodManagement/Transfusions');?>" class="sidebar-link">Transfusiones</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="<?php echo base_url('Admin/Requests');?>" class="sidebar-link">
                        <i class="lni lni-popup"></i>
                        <span>Solicitudes</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                        data-bs-target="#news" aria-expanded="false" aria-controls="auth">
                        <i class="bi bi-newspaper"></i>
                        <span>Noticias</span>
                    </a>
                    </a>
                    <ul id="news" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="<?php echo base_url('Admin/News');?>" class="sidebar-link">Ver noticias</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="<?php echo base_url('Admin/News/addNew');?>" class="sidebar-link">Añadir noticia</a>
                        </li>
                    </ul>
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