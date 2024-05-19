<div class="main p-3">
  <div>
    <h2 style="margin: 20px;">CITAS</h2>
  </div>
  <div class="container">

    <div class="row">
      <div class="col-md-12 mb-3">
        <div class="card">
          <div class="card-header">
            <span><i class="bi bi-table me-2"></i></span> Todos las citas
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table id="example" class="table table-striped data-table" style="width: 100%">
                <thead>
                  <tr>
                  <th>Nombre</th>
                    <th>Doctor</th>
                    <th>Especialidad</th>
                    <th>Hospital</th>
                    <th>Fecha</th> 
                    <th>Razón</th>
                    <th>Estado</th>
                  <th><i class="bi bi-eye" style="font-size: 18px;"></i></th>
                  <th><i class="bi bi-pencil-square" style="font-size: 18px;"></i></th>
                  <th><i class="bi bi-trash" style="font-size: 18px;"></i></th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($appointments as $appointment) { ?>
                    <tr>
                      <td><?php echo $appointment->name; ?></td>
                      <td><?php echo $appointment->doctor; ?></td>
                      <td><?php echo $appointment->specialization; ?></td>
                      <td><?php echo $appointment->hospital; ?></td>
                      <td><?php echo $appointment->appointment_date; ?></td>
                      <td><?php echo $appointment->reason; ?></td>
                      <td><?php echo $appointment->status; ?></td>
                      <td>
                        <button type="button" class="btn btn-primary border border-dark view-appointment-btn"
                          data-bs-toggle="modal" data-bs-target="#viewappointmentModal"
                          data-appointment-id="<?php echo $appointment->appointment_id; ?>">
                          <i class="bi bi-person-bounding-box"></i>
                        </button>
                      </td>
                      <td>
                        <button type="button" class="btn btn-primary border border-dark edit-appointment-btn"
                          data-bs-toggle="modal" data-bs-target="#editappointmentModal"
                          data-appointment-id="<?php echo $appointment->appointment_id; ?>">
                          <i class="bi bi-pencil-square"></i>
                        </button>
                      </td>
                      <td>
                        <form method="post" action="<?php echo base_url('admin/appointments/delete/' . $appointment->appointment_id); ?>"
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
                    <th>Doctor</th>
                    <th>Especialidad</th>
                    <th>Hospital</th>
                    <th>Fecha</th> 
                    <th>Razón</th>
                    <th>Estado</th>
                    <th><i class="bi bi-eye" style="font-size: 18px;"></i></th>
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


<!-- <th>Nombre</th>
                    <th>Doctor</th>
                    <th>Especialidad</th>
                    <th>Hospital</th>
                    <th>Fecha</th> 
                    <th>Razón</th>
                    <th>Estado</th> -->

<div class="modal fade" id="viewappointmentModal" tabindex="-1" aria-labelledby="viewappointmentModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="viewappointmentModalLabel">Ver cita</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div id="appointmentData">
          <p><strong>Nombre:</strong> <span id="viewName"></span></p>
          <p><strong>Doctor:</strong> <span id="viewDoctor"></span></p>
          <p><strong>Especialidad:</strong> <span id="viewSpecialization"></span></p>
          <p><strong>Hospital:</strong> <span id="viewAddress"></span></p>
          <p><strong>Fecha:</strong> <span id="viewPhone"></span></p>
          <p><strong>Razon:</strong> <span id="viewAge"></span></p>
          <p><strong>Estado:</strong> <span id="viewGender"></span></p>
        </div>
      </div>
    </div>
  </div>
</div>




<div class="modal fade" id="editappointmentModal" tabindex="-1" aria-labelledby="editappointmentModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editappointmentModalLabel">Editar cita</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form id="editappointmentForm">
          <input type="hidden" id="editUserId" name="appointment_id">
          <div class="mb-3">
            <label for="editName" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="editName" name="name">
          </div>
          <div class="mb-3">
            <label for="editLastname" class="form-label">Doctor</label>
            <input type="text" class="form-control" id="editDoctor" name="lastname">
          </div>
          <div class="mb-3">
            <label for="editBirthday" class="form-label">Especialidad</label>
            <input type="text" class="form-control" id="editSpecialization" name="birthday">
          </div>
          <div class="mb-3">
            <label for="editAddress" class="form-label">Hospital</label>
            <input type="text" class="form-control" id="editHospital" name="address">
          </div>
          <div class="mb-3">
            <label for="editPhone" class="form-label">Fecha</label>
            <input type="text" class="form-control" id="editAppointment_date" name="phone">
          </div>
          <div class="mb-3">
            <label for="editEmail" class="form-label">Razón</label>
            <input type="text" class="form-control" id="editReason" name="email">
          </div>
          <div class="mb-3">
            <label for="editAge" class="form-label">Estado</label>
            <input type="text" class="form-control" id="editStatus" name="age">
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
  $(".view-appointment-btn").click(function() {
    var appointmentId = $(this).data('appointmentId');
    $.ajax({
      url: "<?php echo base_url('Admin/appointments/get_appointment/'); ?>" + appointmentId,
      type: "GET",
      dataType: "json",
      success: function(response) {
        var appointmentData = response.appointment;
        
        $.each(appointmentData, function(key, value) {
          $("#view" + key.charAt(0).toUpperCase() + key.slice(1)).text(value);
        });

        // Mostrar el modal
        $("#viewappointmentModal").modal('show');
      },
      error: function(xhr, status, error) {
        console.error('Error:', error);
      }
    });
  });
});


$(document).ready(function() {
  $(".edit-appointment-btn").click(function() {
    var appointmentId = $(this).data('appointmentId');
    $.ajax({
      url: "<?php echo base_url('Admin/appointments/get_appointment/'); ?>" + appointmentId,
      type: "GET",
      dataType: "json",
      success: function(response) {
        var appointmentData = response.appointment;
        $.each(appointmentData, function(key, value) {
          $("#edit" + key.charAt(0).toUpperCase() + key.slice(1)).val(value);
        });

        $("#edit-appointmentModal").modal('show');
      },
      error: function(xhr, status, error) {
        console.error('Error:', error);
      }
    });
  });
});

 






</script>