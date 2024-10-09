<div class="main p-3">
    <div class="d-flex justify-content-between align-items-center">
        <h2 style="margin-left: 20px;">NOTICIAS</h2>
    
    </div>
    <div class="container"> 
        <div class="row">
        <?php foreach ($news as $item) { ?>
    <div class="col-md-12 mb-4">
        <div class="card">
            <div class="position-relative">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-<?php echo !empty($item['multimedia']) ? '8' : '12'; ?>">
                            <h5 class="card-title"><?php echo $item['name']; ?></h5>
                            <p class="card-text"><?php echo $item['description']; ?></p>
                        </div>
                        <?php if (!empty($item['multimedia'])) { ?>
                            <div class="col-md-4">
                                <img src="<?php echo $item['multimedia']; ?>" alt="Imagen" class="news-image">
                            </div>
                        <?php } ?>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
<?php } ?>


        </div>
    </div>
</div>

<style>
    .btn-danger {
        background-color: #71091E;
    }

    .news-image {
        width: 100%; 
        height: auto;
    }
</style>



<script>
    tinymce.init({
        selector: 'textarea',
        plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage advtemplate ai mentions tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss',
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
        tinycomments_mode: 'embedded',
        tinycomments_author: 'Author name',
        mergetags_list: [
            { value: 'First.Name', title: 'First Name' },
            { value: 'Email', title: 'Email' },
        ],
        ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
    });
</script>

<style>
    .btn-danger{
        background-color: #71091E;
    }
</style>



<style>
    
.btn {
    background-color: #71091E;
    color: white; 
    border-color: #71091E; 
}

.btn:hover {
    background-color: #5b0718; 
    border-color: #5b0718;ç
}

    .col-lg-8 {
        margin-left: auto;
        margin-right: auto;
        float: none; 
    }
.container{
    margin: 0;
}    


</style>