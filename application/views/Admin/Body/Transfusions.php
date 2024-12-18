<div class="main p-3">
  <div>
    <h2 style="margin: 20px;">TRANSFUSIONES</h2>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-12 mb-3">
        <div class="card">
          <div class="card-header">
            <span><i class="bi bi-table me-2"></i></span> Todas las transfusiones
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table id="example" class="table table-striped data-table" style="width: 100%">
                <thead>
                  <tr>
                    <th>Nombre</th>
                    <th>Doctor</th>
                    <th>Fecha</th>
                    
                    <th>Tipo sangre</th>
                    <th>Cantidad</th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach ($transfusions as $transfusion) { ?>
                    <tr>
                        <td><?php echo $transfusion->name; ?></td>
                        <td><?php echo $transfusion->doctor; ?></td>
                        <td><?php echo $transfusion->transfusion_date; ?></td>
                        <td><?php echo $transfusion->blood_type; ?></td>
                        <td><?php echo $transfusion->quantity; ?></td>
                    </tr>
                <?php } ?>
                </tbody>
                <tfoot>
                  <tr>
                    <th>Nombre</th>
                    <th>Doctor</th>
                    <th>Fecha</th>
                    <th>Tipo sangre</th>
                    <th>Cantidad</th>
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


