<div class="main p-3">
    <div>
        <h2 style="margin: 20px;">PERFIL</h2>
    </div>
    <div class="container">
    <div class="row">
      <div class="col-md-4">
              <div class="card h-100">
              <div class="card-body text-center">
                  <img src="../../../../img/user_doodle.png" alt="Foto perfil" class="profile-img mb-3" style="width: 100%; height: auto;">
              </div>
        </div>
    </div>
    <div class="col-md-8">
      <div class="card h-100">
        <div class="card-body">
          <h3 class="card-title">Informacion</h3> 
          <table class="table">
            <tbody>
              <tr>
                  <th scope="row">Nombre completo</th>
                  <td><?php echo $user->name . ' ' . $user->lastname; ?></td>
              </tr>
              <tr>
                  <th scope="row">Fecha nacimiento</th>
                  <td><?php echo $user->birthday; ?></td>
              </tr>
              <tr>
                  <th scope="row">Dirección</th>
                  <td><?php echo $user->address; ?></td>
              </tr>
              <tr>
                  <th scope="row">Telefono</th>
                  <td><?php echo $user->phone; ?></td>
              </tr>
              <tr>
                  <th scope="row">Email</th>
                  <td><?php echo $user->email; ?></td>
              </tr>
              <tr>
                  <th scope="row">Sexo</th>
                  <td><?php echo $user->gender; ?></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <br>
  <div class="row mt-4">
    <div class="col">
      <div class="card">
        <div class="card-body">
          <h3 class="card-title">Datos</h3>
          <table class="table">
            <tbody>
              <tr>
                  <th scope="row">Tipo de sangre</th>
                  <td><?php echo $user->blood_type; ?></td>
              </tr>
              <tr>
                  <th scope="row">Alergias</th>
                  <td><?php echo $user->alergies; ?></td>
              </tr>
              <tr>
                  <th scope="row">Diseases</th>
                  <td><?php echo $user->disease; ?></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>


