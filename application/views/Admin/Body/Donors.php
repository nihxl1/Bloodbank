<div class="main p-3">
  <div>
    <h2 style="margin: 20px;">DONANTES</h2>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-12 mb-3">
        <div class="card">
          <div class="card-header">
            <span><i class="bi bi-table me-2"></i></span> Todos los donantes
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
                    <th>Nº de donaciones</th>
                    <th>Última vez</th>
                    <th><i class="bi bi-person-bounding-box" style="border: 5px; font-size: 18px;"></i></th>
                    <th><i class="bi bi-pencil-square" style="font-size: 18px;"></i></th>
                    <th><i class="bi bi-trash" style="font-size: 18px;"></i></th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($donors as $donor) { ?>
                    <tr>
                      <td><?php echo $donor->name; ?></td>
                      <td><?php echo $donor->lastname; ?></td>
                      <td><?php echo $donor->birthday; ?></td>
                      <td><?php echo $donor->address; ?></td>
                      <td><?php echo $donor->phone; ?></td>
                      <td><?php echo $donor->email; ?></td>
                      <td><?php echo $donor->age; ?></td>
                      <td><?php echo $donor->gender; ?></td>
                      <td><?php echo $donor->blood_type; ?></td>
                      <!-- <td><?php echo $donor->disease; ?></td> -->
                      <td><?php echo $donor->alergies; ?></td>
                      <td><?php echo $donor->donation_count; ?></td>
                      <td><?php echo $donor->last_donation_date; ?></td>
                      
                      <td>
                        <button type="button" class="btn btn-primary border btn-sm view-donor-btn"
                          data-bs-toggle="modal" data-bs-target="#viewDonorModal"
                          data-donor-id="<?php echo $donor->user_id; ?>">
                          <i class="bi bi-person-bounding-box"></i>
                        </button>
                      </td>
                      <!-- Edit donor button -->
                      <td>
                        <button type="button" class="btn btn-primary border btn-sm edit-donor-btn"
                          data-bs-toggle="modal" data-bs-target="#editDonorModal"
                          data-donor-id="<?php echo $donor->user_id; ?>">
                          <i class="bi bi-pencil-square"></i>
                        </button>
                      </td>
                      <!-- Delete donor form -->
                      <td>
                        <form method="post" action="<?php echo base_url('admin/donors/delete/' . $donor->user_id); ?>"
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
                    <!-- <th>Age</th> -->
                    <th>Sexo</th>
                    <th>Sangre</th>
                    <!-- <th>Enfermedades</th> -->
                    <th>Alergias</th>
                    <th>Nº de donaciones</th>
                    <th>Última vez</th>
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



<div class="modal fade" id="viewDonorModal" tabindex="-1" aria-labelledby="viewDonorModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="viewDonorModalLabel">Ver Paciente</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div id="donorData">
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




<div class="modal fade" id="editDonorModal" tabindex="-1" aria-labelledby="editDonorModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editDonorModalLabel">Editar donante</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form id="editDonorForm">
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
  $(".view-donor-btn").click(function() {
    var donorId = $(this).data('donorId');
    $.ajax({
      url: "<?php echo base_url('Admin/Donors/get_donor/'); ?>" + donorId,
      type: "GET",
      dataType: "json",
      success: function(response) {
        var donorData = response.donor;
        // Iterar sobre las claves del paciente y actualizar los elementos del modal
        $.each(donorData, function(key, value) {
          $("#view" + key.charAt(0).toUpperCase() + key.slice(1)).text(value);
        });

        // Mostrar el modal
        $("#viewDonorModal").modal('show');
      },
      error: function(xhr, status, error) {
        console.error('Error:', error);
      }
    });
  });
});


$(document).ready(function() {
  $(".edit-donor-btn").click(function() {
    var donorId = $(this).data('donorId');
    $.ajax({ 
      url: "<?php echo base_url('Admin/Donors/get_donor/'); ?>" + donorId,
      type: "GET",
      dataType: "json",
      success: function(response) {
        var donorData = response.donor;
        $.each(donorData, function(key, value) {
          $("#edit" + key.charAt(0).toUpperCase() + key.slice(1)).val(value);
        });

        $("#edit-DonorModal").modal('show');

        $("#editDonorForm").off("submit").on("submit", function(event) {
          event.preventDefault();
          var formData = $(this).serialize(); 

          $.ajax({
            url: "<?php echo base_url('Admin/Donors/update_donor'); ?>",
            type: "POST",
            data: formData,
            dataType: "json",
            success: function(response) {
              if (response.success) {
                $("#editDonorModal").modal('hide');
                location.reload();
              } else {
                alert('Failed to update donor.');
              }
            },
            error: function(xhr, status, error) {
              console.error('Error:', error);
            }
          });
        });
      },
      error: function(xhr, status, error) {
        console.error('Error:', error);
      }
    });
  });
});








</script>