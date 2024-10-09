<link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css" rel="stylesheet"/>
<link href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.css" rel="stylesheet"/>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.2/moment.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>

    <style>
        body {
            background-color: #fff; 
            color: #fff; 
        }

        .form-container {
            margin-top:40px;
            background-color: #71091E; 
            padding: 20px;
            border-radius: 10px;
        }
    </style>

<div class="container ">
    <div class="row justify-content-center">
        <div class="col-sm-6 form-container">
        <form id="formRegistro" action="#" method="post">
            <div class="mb-3">
                <label for="nombreInput" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombreInput" name="nombre">
            </div>
            <div class="mb-3">
                <label for="apellidoInput" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="apellidoInput" name="apellido">
            </div>
            <div class="mb-3">
              <label for="direccionInput" class="form-label">Direccion</label>
              <input type="text" class="form-control" id="direccionInput" name="direccion">
            </div>
            <div class="mb-3">
                <label for="fechaNacimientoInput" class="form-label">Fecha nacimiento</label>
                <div class="form-group">
                    <div class='input-group date' id='datetimepicker1'>
                        <input type='text' class="form-control" id="fechaNacimientoInput" name="fecha_nacimiento" />
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="telefonoInput" class="form-label">Telefono</label>
                <input type="text" class="form-control" id="telefonoInput" name="telefono">
            </div>
            <div class="mb-3">
                <label for="emailInput" class="form-label">Email</label>
                <input type="email" class="form-control" id="emailInput" name="email">
            </div>
            <div class="mb-3">
                <label for="passwordInput" class="form-label">Password</label>
                <input type="password" class="form-control" id="passwordInput" name="password">
            </div>
            <div class="mb-3">
                <label for="generoInput" class="form-label">Género</label>
                <input type="text" class="form-control" id="generoInput" name="genero">
            </div>
            
            <button type="button" class="btn btn-primary" id="btnRegistro">REGISTRARSE!</button>

           

            </form>
        </div>
    </div>
</div>

<div>
        <?php 
            echo $this->session->flashdata("success");

            echo $this->session->flashdata("error");
        ?>
</div>


<script type="text/javascript">
    $(function () {
        $('#datetimepicker1').datetimepicker({ format: 'YYYY-MM-DD' });
        
        
        $("#btnRegistro").on("click", function (event) {

            var datosFormulario = $("#formRegistro").serializeArray();
            console.log( );

            // .push({ name: "<something>", value: "<somevalue>" });
            datosFormulario.push({ name: "rol_id", value:"2"});
            console.log(datosFormulario);

            var url = "<?php echo base_url().'registroController/validarRegistro'; ?>";
             console.log(url);

            // $.post(url, datosFormulario);
            
            $.ajax({
                url : url,
                type : 'POST',
                data : datosFormulario,
                dataType:'json',
                }).done(function(e) {
                    
                    if(e == TRUE)
                    {
                        header.location("<?php echo base_url();?>admin/dashboard")
                        
                    }else{
                        header.location("<?php echo base_url();?>registroController/vistaregistro")
                        
                    }
                    location.reload();
                });



        });


    });







    


/*function postData(url, datosForm) {
    datosForm.append("rol_id", "2");
    fetch(url, {
        method: "POST",
        body: datosForm
    });
}

$("#btnRegistro").on("click", function (event) {
    event.preventDefault(); 
    var datosForm = new FormData($("form")[0]);

    console.log(datosForm);


postData("<?php echo base_url().'RegistroController/validarRegistro'; ?>", datosForm);
});*/




// document.getElementById("btnRegistro").addEventListener("click", function (event) {

// var datosFormulario = new FormData(document.getElementById("formRegistro"));
// datosFormulario.append("rol_id", "2");

// var url = "<?php echo base_url().'registroController/validarRegistro'; ?>";

// fetch(url, {
//     method: 'POST',
//     body: datosFormulario
// })
// .then(response => response.json())
// .then(data => {
//     if(data === true) {
//         window.location.href = "<?php echo base_url();?>admin/dashboard";
//     } else {
//         // Handle the case when data is not true
//     }
//     location.reload();
// })
// .catch(error => {
//     console.error('Error:', error);
// });

// });




</script>