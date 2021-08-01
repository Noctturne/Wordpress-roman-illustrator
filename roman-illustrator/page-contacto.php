<?php get_header('inverse');?>
<section class="row g-0 p-0 contact" >
    <div class="col-lg-6 d-flex justify-content-center">
        <div class="card" style="width: 30rem; height: 30rem;">
            <div class="card-header">
                <h2> Fusce a lacinia. </h2>
            </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><h5> Sed pretium eleifend fermentum. </h5></li>
            <li class="list-group-item"><p> Pellentesque posuere ante a venenatis pretium. Etiam porttitor egestas vestibulum. 
                Vivamus accumsan nulla urna, et rhoncus eros congue vitae. Morbi bibendum dolor vel ligula commodo mattis. </p></li>
            <li class="list-group-item"><i class="fas fa-paper-plane fa-sm"></i> <small> info@romanrrhh.com </small></li>
        </ul>
        </div>
    </div>

    <div class="col-lg-6 contact-form">
        <?php $contact='[contact-form-7 id="154" title="Formulario de contacto 1"]'?>
        <?php echo do_shortcode($contact);?>
    </div>
</section>  
<?php get_footer();?>