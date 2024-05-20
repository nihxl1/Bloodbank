<main class="main p-3">
    <div class="container">
        <div>
            <h2 style="margin: 20px;">DONANTE</h2>
        </div>
        <div class="container">
            <div class="col-md-12 mb-3">
                <div class="card">
                    <div class="card-header">
                        <span><i class="bi bi-card-list" style="border: 5px; font-size: 20px;"></i></span> Añadir donante
                    </div>
                    <div class="card-body">
                     <?php if (!empty($requests) && $requests[0]['resultado'] == 'Apto'): ?>
                            <div class="alert alert-danger" role="alert">
                                Apto para donar. Acérquese al médico ambulante más cercano para asegurarse.
                            </div>
                        <?php endif; ?>
                        <form id="formRegistro" action="<?php echo base_url('Donor/quiz/process_quiz'); ?>" method="post">                    
                            <ul>
                                <li>
                                    <h3>ENFERMEDADES</h3>
                                    <ul>
                                        <li>
                                            <label for="autoinmuneInput" class="form-label">Autoinmune</label>
                                            <select class="form-select" id="autoinmuneInput" name="autoinmune">
                                                <option value="#"></option>
                                                <option value="A+">Artritis Reumatoide (AR)</option>
                                                <option value="A-">Lupus Eritematoso Sistémico (LES)</option>
                                                <option value="B+">Esclerosis Múltiple (EM)</option>
                                                <option value="B-">Diabetes Tipo 1</option>
                                                <option value="AB+">Tiroiditis de Hashimoto</option>
                                                <option value="AB-">Psoriasis</option>
                                                <option value="O+">Enfermedad Inflamatoria Intestinal (EII)</option> 
                                            </select>
                                        </li>
                                        <li>
                                            <label for="infeccionesInput" class="form-label">Infecciones</label>
                                            <select class="form-select" id="infeccionesInput" name="infecciones">
                                                <option value="#"></option>
                                                <option value="A+">VIH/SIDA</option>
                                                <option value="A-">Hepatitis B</option>
                                                <option value="B+">Hepatitis C</option>
                                                <option value="B-">Sífilis</option>
                                                <option value="AB+">Chagas</option>
                                                <option value="AB-">Malaria</option>
                                                <option value="O+">Babesiosis</option>
                                                <option value="O-">Toxoplasmosis</option>
                                            </select>
                                        </li>
                                        <li>
                                            <label for="otrasInput" class="form-label">Otras</label>
                                            <select class="form-select" id="otrasInput" name="otras">
                                                <option value="#"></option>
                                                <option value="A+">Anemia</option>
                                                <option value="A-">Enfermedades cardíacas</option>
                                                <option value="B+">Cáncer activo e inactivo</option>
                                                <option value="B-">Infecciones agudas (ej: bacterianas, gripe)</option>
                                                <option value="AB+">Trastornos de coagulación</option>
                                                <option value="AB-">Diabetes no controlada</option>
                                                <option value="O+">Hipertensión</option>
                                                <option value="O-">O-</option>
                                            </select>
                                        </li>
                                        <li>
                                            <label for="enfermedadInput" class="form-label">Otra enfermedad (especifique)</label>
                                            <input type="text" class="form-control" id="enfermedadInput" name="enfermedad">
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <h3>SITUACIONES</h3>
                                    <ul>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Embarazo/parto reciente (4 meses)" id="embarazoInput" name="situaciones[]">
                                                <label class="form-check-label" for="embarazoInput">Embarazo/parto reciente (4 meses)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Operación reciente" id="operacionInput" name="situaciones[]">
                                                <label class="form-check-label" for="operacionInput">Operación reciente</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Viajes fuera del país" id="viajesInput" name="situaciones[]">
                                                <label class="form-check-label" for="viajesInput">Viajes fuera del país</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Relaciones sexuales de riesgo" id="relacionesInput" name="situaciones[]">
                                                <label class="form-check-label" for="relacionesInput">Relaciones sexuales de riesgo</label>
                                            </div>
                                        </li>
                                        <li>
                                            <label for="otraSituacionInput" class="form-label">Otra situación (especifique)</label>
                                            <input type="text" class="form-control" id="otraSituacionInput" name="otra_situacion">
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <h3>OTROS FACTORES</h3>
                                    <ul>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="piercingsInput" name="piercings">
                                                <label class="form-check-label" for="piercingsInput">Piercings recientes (menos de 4 meses)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="tatuajesInput" name="tatuajes">
                                                <label class="form-check-label" for="tatuajesInput">Tatuajes recientes (menos de 4 meses)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="altoRiesgoInput" name="alto_riesgo">
                                                <label class="form-check-label" for="altoRiesgoInput">Comportamientos de alto riesgo (relaciones sexuales sin protección, uso de drogas intravenosas)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <label for="medicamentosInput" class="form-label">Uso actual de medicamentos (anticoagulantes, inmunosupresores, etc.)</label>
                                            <input type="text" class="form-control" id="medicamentosInput" name="medicamentos">
                                        </li>
                                        <li>
                                            <label for="pesoInput" class="form-label">Peso (kg)</label>
                                            <input type="number" class="form-control" id="pesoInput" name="peso">
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="comportamientoInput" name="comportamiento_riesgo">
                                                <label class="form-check-label" for="comportamientoInput">Factores de riesgo conductual (encarcelamiento, etc.)</label>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <button type="submit" class="btn btn-primary btn-custom" id="btnRegistro" style="margin-left: auto; margin-right: auto; display: block;"><i class="bi bi-person-fill-add"></i> RESULTADO</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>



 



<style>
    .btn-custom {
        background-color: #71091E;
        border-color: #71091E;
        padding: 10px 50px; 
        font-size: 16px; 
    }
</style>




<script>


// <link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css" rel="stylesheet"/>
// <link href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.css" rel="stylesheet"/>

// <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.2/moment.min.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
 <script type="text/javascript">
//     $(function () {
//         $('#datetimepicker2').datetimepicker({ format: 'YYYY-MM-DD' });
//     });
// </script>

