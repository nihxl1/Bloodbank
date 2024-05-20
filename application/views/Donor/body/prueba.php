<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Checkbox Dropdowns for Diseases</title>
<!-- Bootstrap CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <h2>ENFERMEDADES</h2>
    <ul>
        <li>
            <h3>Autoinmune</h3>
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" id="autoinmuneDropdownButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Seleccione enfermedad(es)
                </button>
                <div class="dropdown-menu" aria-labelledby="autoinmuneDropdownButton">
                    <form>
                        <div class="dropdown-item">
                            <input class="form-check-input" type="checkbox" value="A+" id="arInput" name="autoinmune[]">
                            <label class="form-check-label" for="arInput">Artritis Reumatoide (AR)</label>
                        </div>
                        <div class="dropdown-item">
                            <input class="form-check-input" type="checkbox" value="A-" id="lesInput" name="autoinmune[]">
                            <label class="form-check-label" for="lesInput">Lupus Eritematoso Sistémico (LES)</label>
                        </div>
                        <!-- Add similar div elements for other options -->
                    </form>
                </div>
            </div>
        </li>
        <li>
            <h3>Infecciones</h3>
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" id="infeccionesDropdownButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Seleccione enfermedad(es)
                </button>
                <div class="dropdown-menu" aria-labelledby="infeccionesDropdownButton">
                    <form>
                        <div class="dropdown-item">
                            <input class="form-check-input" type="checkbox" value="A+" id="vihInput" name="infecciones[]">
                            <label class="form-check-label" for="vihInput">VIH/SIDA</label>
                        </div>
                        <div class="dropdown-item">
                            <input class="form-check-input" type="checkbox" value="A-" id="hepatitisBInput" name="infecciones[]">
                            <label class="form-check-label" for="hepatitisBInput">Hepatitis B</label>
                        </div>
                    </form>
                </div>
            </div>
        </li>
        <li>
            <h3>Otras</h3>
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" id="otrasDropdownButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Seleccione enfermedad(es)
                </button>
                <div class="dropdown-menu" aria-labelledby="otrasDropdownButton">
                    <form>
                        <div class="dropdown-item">
                            <input class="form-check-input" type="checkbox" value="A+" id="anemiaInput" name="otras[]">
                            <label class="form-check-label" for="anemiaInput">Anemia</label>
                        </div>
                        <div class="dropdown-item">
                            <input class="form-check-input" type="checkbox" value="A-" id="enfCardiacasInput" name="otras[]">
                            <label class="form-check-label" for="enfCardiacasInput">Enfermedades cardíacas</label>
                        </div>
                        <!-- Add similar div elements for other options -->
                    </form>
                </div>
            </div>
        </li>
        <li>
            <h3>Otra enfermedad (especifique)</h3>
            <input type="text" class="form-control" id="enfermedadInput" name="enfermedad">
        </li>
    </ul>
</div>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
