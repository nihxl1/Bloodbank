<div class="main p-3">
    <div>
        <h2 style="margin: 20px;">DONACIONES</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-3">
                <div class="card">
                    <div class="card-header">
                        <span><i class="bi bi-table me-2"></i></span> Todas las donaciones
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-striped data-table" style="width: 100%">
                                <thead>
                                    <tr>
                                        <th>Donante</th>
                                        <th>Fecha de Donación</th>
                                        <th>Ubicación</th>
                                        <th>Cantidad</th>
                                    </tr>
                                </thead>
                                <tbody> 
                                    <?php foreach ($donations as $donation): ?>
                                    <tr>
                                        <td><?php echo $donation->name . ' ' . $donation->lastname; ?></td>
                                        <td><?php echo $donation->donation_date; ?></td>
                                        <td><?php echo $donation->donation_location; ?></td>
                                        <td><?php echo $donation->quantity; ?></td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Donante</th>
                                        <th>Fecha de Donación</th>
                                        <th>Ubicación</th>
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
</div>

<script>
$(document).ready(function () {
  $(".data-table").each(function (_, table) {
    $(table).DataTable();
  });
});
</script>

</div>