<body>
    

<div class="main p-3">
<div class="container">
<title>Inicio Donante</title>

<style>
        header {
            color: white;
            padding: 0rem;
        }
</style>     

<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="row">
            <?php foreach ($news as $item) { ?>
                <div class="col-md-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <?php if (!empty($item['multimedia'])) { ?>
                                    <div class="col-md-8">
                                        <h5 class="card-title"><?php echo $item['name']; ?></h5>
                                        <p class="card-text"><?php echo $item['description']; ?></p>
                                    </div>
                                    <div class="col-md-4">
                                        <img src="<?php echo $item['multimedia']; ?>" alt="Image" class="news-image">
                                    </div>
                                <?php } else { ?>
                                    <div class="col-md-12">
                                        <h5 class="card-title"><?php echo $item['name']; ?></h5>
                                        <p class="card-text"><?php echo $item['description']; ?></p>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card-column-fixed larger-card">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">¿Quieres Donar Sangre?</h5>
                        <ul class="list-group">
                            <li class="list-group-item">REGISTRATE AQUI!</li>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2" width="75" height="75"  style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem; ">
                                <i class="bi bi-person-circle">Registro</i>     
                        </button>
                        </ul>
                        
                    </div>
                </div>
                <div class="card" id="card-red">
                    <div class="card-body">
                        Tipo de sangre más bajo: <?php echo $lowest_blood_type['type']; ?> <?php echo $lowest_blood_type['rh_factor']; ?>
                        <ul class="list-group">
                        <button type="button" class="btn btn border " data-bs-toggle="modal" data-bs-target="#exampleModal2" width="75" height="75"  style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem; background-color: white; ;">
                            <i class="bi bi-drop" id="red">AYUDA AQUÍ </i>    
                        </button>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
</div>




<script type="text/javascript">
    $(function () {
        $('#datetimepicker1').datetimepicker({ format: 'YYYY-MM-DD' });
    
    });
</script>

<style>
    
    .card-column-fixed {
    margin-top: 5.9rem;
    position: fixed;
    top: 20px;
    max-height: 350px;
    
    }

@media (max-width: 767.98px) {
    .card-column-fixed {
        position: relative;
        top: auto; 
    }
}

#card-red{
    background-color: #71091E;
    color: white; 
    border-color: #71091E; 

}


#red{
    color: #71091E; 
     

}
.btn {
    background-color: #71091E;
    color: white; 
    border-color: #71091E; 
}

.btn:hover {
    background-color: #5b0718; 
    border-color: #5b0718;ç
}


</style>
<style>
    .main {
        margin-left: 2rem;
        min-height: 100vh;
        margin: 0;
        background: linear-gradient(to bottom, #ffffff, #71091E);
        color: #333;
        padding-bottom: 100px; 
    }

    
</style>
