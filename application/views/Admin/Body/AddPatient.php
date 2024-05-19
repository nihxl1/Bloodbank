<div class="main p-3">
    <div class="container">
        <div>
            <h2 style="margin: 20px;">REGISTRAR PACIENTE</h2>
        </div>
        <div class="container">
            <div class="col-md-12 mb-3">
                <div class="card">
                    <div class="card-header">
                        <span><i class="bi bi-card-list" style="border: 5px; font-size: 20px;"></i></span> Añadir paciente
                    </div>
                    <div class="card-body">
                        <form id="formRegistro" action="<?php echo base_url('Admin/Patients/register_patient');?>" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="nameInput" class="form-label">Nombre</label>
                                        <input type="text" class="form-control" id="nameInput" name="name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="lastnameInput" class="form-label">Apellido</label>
                                        <input type="text" class="form-control" id="lastnameInput" name="lastname">
                                    </div>
                                    <div class="mb-3">
                                        <label for="addressInput" class="form-label">Dirección</label>
                                        <input type="text" class="form-control" id="addressInput" name="address">
                                    </div>
                                    <div class="mb-3">
                                        <label for="birthdayInput" class="form-label">Fecha de Nacimiento</label>
                                        <input type="date" class="form-control" id="birthdayInput" name="birthday">
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="emailInput" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="emailInput" name="email">
                                    </div>
                                    <div class="mb-3">
                                        <label for="passwordInput" class="form-label">Contraseña</label>
                                        <input type="password" class="form-control" id="passwordInput" name="password">
                                    </div>
                                    
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="phoneInput" class="form-label">Teléfono</label>
                                        <input type="text" class="form-control" id="phoneInput" name="phone">
                                    </div>
                                    <div class="mb-3">
                                        <label for="ageInput" class="form-label">Edad</label>
                                        <input type="number" class="form-control" id="ageInput" name="age">
                                    </div>
                                    <div class="mb-3">
                                            <label for="genderInput" class="form-label">Sexo</label>
                                            <select class="form-select" id="genderInput" name="gender">
                                                <option value="Hombre">Hombre</option>
                                                <option value="Mujer">Mujer</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="bloodTypeInput" class="form-label">Tipo de Sangre</label>
                                            <select class="form-select" id="bloodTypeInput" name="bloodType">
                                                <option value="A+">A+</option>
                                                <option value="A-">A-</option>
                                                <option value="B+">B+</option>
                                                <option value="B-">B-</option>
                                                <option value="AB+">AB+</option>
                                                <option value="AB-">AB-</option>
                                                <option value="O+">O+</option>
                                                <option value="O-">O-</option>
                                            </select>
                                        </div>
                                    
                                    <!-- <div class="mb-3">
                                        <label for="diseaseInput" class="form-label">Enfermedad</label>
                                        <input type="text" class="form-control" id="diseaseInput" name="disease">
                                    </div> -->
                                    <div class="mb-3">
                                        <label for="diseaseInput" class="form-label">Enfermedad</label>
                                        <select class="form-select" id="diseaseInput" name="disease">
                                            <option value="">Seleccionar enfermedad</option>
                                            <?php foreach ($diseases as $disease) : ?>
                                                <option value="<?php echo $disease->disease_id; ?>"><?php echo $disease->disease_name; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="alergiesInput" class="form-label">Alergias</label>
                                        <input type="text" class="form-control" id="alergiesInput" name="alergies">
                                    </div>
                                    
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-custom" id="btnRegistro" style="margin-left: auto; margin-right: auto; display: block;"><i class="bi bi-person-fill-add"></i>    AÑADIR PACIENTE  </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
