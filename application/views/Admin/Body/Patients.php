<div class="main p-3">
  <div>
    <h2 style="margin: 20px;">PACIENTES</h2>
  </div>
  <div class="container">

    <div class="row">
      <div class="col-md-12 mb-3">
        <div class="card">
          <div class="card-header">
            <span><i class="bi bi-table me-2"></i></span> Todos los pacientes
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table id="example" class="table table-striped data-table" style="width: 100%">
                <thead>
                  <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Cumpleaños</th>
                    <th>Dirección</th>
                    <th>Telefono</th>
                    <th>Email</th>
                    <!-- <th>Age</th> -->
                    <th>Sexo</th>
                    <th>Sangre</th>
                    <!-- <th>Enfermedades</th> -->
                    <th>Alergias</th>
                    <th><i class="bi bi-person-bounding-box" style="border: 5px; font-size: 18px;"></i></th>
                    <th><i class="bi bi-pencil-square" style="font-size: 18px;"></i></th>
                    <th><i class="bi bi-trash" style="font-size: 18px;"></i></th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($patients as $patient) { ?>
                    <tr>
                      
                      <td><?php echo $patient->name; ?></td>
                      <td><?php echo $patient->lastname; ?></td>
                      <td><?php echo $patient->birthday; ?></td>
                      <td><?php echo $patient->address; ?></td>
                      <td><?php echo $patient->phone; ?></td>
                      <td><?php echo $patient->email; ?></td>
                      <!-- <td><?php echo $patient->age; ?></td> -->
                      <td><?php echo $patient->gender; ?></td>
                      <td><?php echo $patient->blood_type; ?></td>
                      <!-- <td><?php echo $patient->disease; ?></td> -->
                      <td><?php echo $patient->alergies; ?></td>
                      
                      <td>
                        <button type="button" class="btn btn-primary btn-sm view-patient-btn"
                          data-bs-toggle="modal" data-bs-target="#viewPatientModal"
                          data-patient-id="<?php echo $patient->user_id; ?>">
                          <i class="bi bi-person-bounding-box"></i>
                        </button>
                      </td>
                      <!-- Edit patient button -->
                      <td>
                        <button type="button" class="btn btn-primary  btn-sm edit-patient-btn"
                          data-bs-toggle="modal" data-bs-target="#editPatientModal"
                          data-patient-id="<?php echo $patient->user_id; ?>">
                          <i class="bi bi-pencil-square"></i>
                        </button>
                      </td>
                      <!-- Delete patient form -->
                      <td>
                        <form method="post" action="<?php echo base_url('admin/patients/delete/' . $patient->user_id); ?>"
                          onsubmit="return confirm('¿Estás seguro de que deseas eliminar este paciente?');">
                          <button type="submit" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                        </form>
                      </td>
                    </tr>
                  <?php } ?>
                </tbody>
                <tfoot>
                  <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Cumpleaños</th>
                    <th>Dirección</th>
                    <th>Telefono</th> 
                    <th>Email</th>
                    <!-- <th></th> -->
                    <th>Sexo</th>
                    <th>Sangre</th>
                    <!-- <th>Enfermedades</th> -->
                    <th>Alergias</th>
                    <th><i class="bi bi-person-bounding-box" style="border: 5px; font-size: 18px;"></i></th>
                    <th><i class="bi bi-pencil-square" style="font-size: 18px;"></i></th>
                    <th><i class="bi bi-trash" style="font-size: 18px;"></i></th>
                  </tr>
                </tfoot>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </main>



  <script>
    $(document).ready(function () {
      $(".data-table").each(function (_, table) {
        $(table).DataTable();
      });
    });</script>


</div>



<div class="modal fade" id="viewPatientModal" tabindex="-1" aria-labelledby="viewPatientModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="viewPatientModalLabel">Ver Paciente</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div id="patientData">
          <p><strong>Nombre:</strong> <span id="viewName"></span></p>
          <p><strong>Apellido:</strong> <span id="viewLastname"></span></p>
          <p><strong>Fecha de nacimiento:</strong> <span id="viewBirthday"></span></p>
          <p><strong>Dirección:</strong> <span id="viewAddress"></span></p>
          <p><strong>Telefono:</strong> <span id="viewPhone"></span></p>
          <p><strong>Email:</strong> <span id="viewEmail"></span></p>
          <p><strong>Edad:</strong> <span id="viewAge"></span></p>
          <p><strong>Sexo:</strong> <span id="viewGender"></span></p>
          <p><strong>Tipo sangre:</strong> <span id="viewBloodType"></span></p>
          <p><strong>Enfermedades:</strong> <span id="viewDisease"></span></p>
          <p><strong>Alergias:</strong> <span id="viewAllergies"></span></p>
        </div>
      </div>
    </div>
  </div>
</div>




<div class="modal fade" id="editPatientModal" tabindex="-1" aria-labelledby="editPatientModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editPatientModalLabel">Edit Patient</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form id="editPatientForm">
          <input type="hidden" id="editUserId" name="user_id">
          <div class="mb-3">
            <label for="editName" class="form-label">Name</label>
            <input type="text" class="form-control" id="editName" name="name">
          </div>
          <div class="mb-3">
            <label for="editLastname" class="form-label">Lastname</label>
            <input type="text" class="form-control" id="editLastname" name="lastname">
          </div>
          <div class="mb-3">
            <label for="editBirthday" class="form-label">Birthday</label>
            <input type="text" class="form-control" id="editBirthday" name="birthday">
          </div>
          <div class="mb-3">
            <label for="editAddress" class="form-label">Address</label>
            <input type="text" class="form-control" id="editAddress" name="address">
          </div>
          <div class="mb-3">
            <label for="editPhone" class="form-label">Phone</label>
            <input type="text" class="form-control" id="editPhone" name="phone">
          </div>
          <div class="mb-3">
            <label for="editEmail" class="form-label">Email</label>
            <input type="text" class="form-control" id="editEmail" name="email">
          </div>
          <div class="mb-3">
            <label for="editAge" class="form-label">Age</label>
            <input type="text" class="form-control" id="editAge" name="age">
          </div>
          <div class="mb-3">
            <label for="editGender" class="form-label">Gender</label>
            <input type="text" class="form-control" id="editGender" name="gender">
          </div>
          <div class="mb-3">
            <label for="editBloodType" class="form-label">Blood Type</label>
            <input type="text" class="form-control" id="editBloodType" name="bloodType">
          </div>
          <div class="mb-3">
            <label for="editDisease" class="form-label">Disease</label>
            <input type="text" class="form-control" id="editDisease" name="disease">
          </div>
          <div class="mb-3">
            <label for="editAllergies" class="form-label">Allergies</label>
            <input type="text" class="form-control" id="editAllergies" name="allergies">
          </div>
          <button type="submit" class="btn btn-primary">Save Changes</button>
        </form>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>


<script>
$(document).ready(function() {
  $(".view-patient-btn").click(function() {
    var patientId = $(this).data('patientId');
    $.ajax({
      url: "<?php echo base_url('Admin/Patients/get_patient/'); ?>" + patientId,
      type: "GET",
      dataType: "json",
      success: function(response) {
        var patientData = response.patient;
        // Iterar sobre las claves del paciente y actualizar los elementos del modal
        $.each(patientData, function(key, value) {
          $("#view" + key.charAt(0).toUpperCase() + key.slice(1)).text(value);
        });

        // Mostrar el modal
        $("#viewPatientModal").modal('show');
      },
      error: function(xhr, status, error) {
        console.error('Error:', error);
      }
    });
  });
});  


$(document).ready(function() {
  $(".edit-patient-btn").click(function() {
    var patientId = $(this).data('patientId');
    $.ajax({
      url: "<?php echo base_url('Admin/Patients/get_patient/'); ?>" + patientId,
      type: "GET",
      dataType: "json",
      success: function(response) {
        var patientData = response.patient;
        $.each(patientData, function(key, value) {
          $("#edit" + key.charAt(0).toUpperCase() + key.slice(1)).val(value);
        });

        $("#edit-PatientModal").modal('show');
      },
      error: function(xhr, status, error) {
        console.error('Error:', error);
      }
    });
  });
});

 






</script>