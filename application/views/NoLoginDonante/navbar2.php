<div class="main p-3">
<div class="container">
<title>Inicio Donante</title>

<div class="d-flex justify-content-between align-items-center">
        <h2 style="margin: 20px;"></h2>
        <div class="d-flex">
        <button type="button" class="btn btn border " data-bs-toggle="modal" data-bs-target="#exampleModal" width="75" height="75"  style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem; ">
        <i class="bi bi-person-circle"><noscript></noscript></i>     
        </button>
        <button type="button" class="btn btn border " data-bs-toggle="modal" data-bs-target="#exampleModal2" width="75" height="75"  style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem; ">
            <i class="bi bi-person-circle"><b>+</b></i>     
        </button>
        </div>
    </div>

<style>
        header {
            color: white;
            padding: 0rem;
        }
</style>    

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"> 
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?php echo base_url('logincontroller/login'); ?>">
                    <h1 class="h3 mb-3 fw-normal">Inicio de sesión</h1>
                    
                    <div class="form-floating">
                        <input type="email" class="form-control" id="modalFloatingInput" name="email"
                            placeholder="nombre@ejemplo.com" value="">
                  
                        <label for="modalFloatingInput">Correo electrónico</label>
                    </div>
                    <br>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="modalFloatingPassword" name="password"
                            placeholder="Password">
                        <label for="modalFloatingPassword">Contraseña</label>
                    </div>
                    <br>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Inicio de sesión</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div> 


<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Registro</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form method="post" action="<?php echo base_url('RegistroController/guardar_registro'); ?>">

                    <div class="mb-3">
                        <label for="nameInput" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nameInput" name="nombre">
                    </div>
                    <div class="mb-3">
                        <label for="lastnameInput" class="form-label">Apellido</label>
                        <input type="text" class="form-control" id="lastnameInput" name="apellido">
                    </div>
                    <div class="mb-3">
                        <label for="addressInput" class="form-label">Dirección</label>
                        <input type="text" class="form-control" id="addressInput" name="direccion">
                    </div>
                    <div class="mb-3">
                        <label for="birthdayInput" class="form-label">Fecha de Nacimiento</label>
                        <input type="date" class="form-control" id="birthdayInput" name="fecha_nacimiento">
                    </div>
                    <div class="mb-3">
                        <label for="phoneInput" class="form-label">Teléfono</label>
                        <input type="text" class="form-control" id="phoneInput" name="telefono">
                    </div>
                    <div class="mb-3">
                        <label for="emailInput" class="form-label">Email</label>
                        <input type="email" class="form-control" id="emailInput" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="passwordInput" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="passwordInput" name="password">
                    </div>
                    <div class="mb-3">
                        <label for="genderInput" class="form-label">Género</label>
                        <select class="form-select" id="genderInput" name="genero">
                            <option value="Masculino">Masculino</option>
                            <option value="Femenino">Femenino</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="ageInput" class="form-label">Edad</label>
                        <input type="age" class="form-control" id="ageInput" name="age">
                    </div>
                    <button type="submit" class="btn btn-primary">Registrarse</button>
                </form>
            </div>
        </div>
    </div>
</div>



<script type="text/javascript">
    $(function () {
        $('#datetimepicker1').datetimepicker({ format: 'YYYY-MM-DD' });
        

    });
</script>
