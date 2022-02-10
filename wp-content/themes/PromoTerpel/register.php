<?php
/* Template Name: Register Page
*/

get_header(); ?>

<section id="registerPortal" class="main-section">
    <div class="wrapper">
        <div class="row register">
            <div class="col-sm-6 ganaBack">

            </div>
            <div class="col-sm-6 ganaForm">
                <div class="flexForm">
                    <h3>¡Ya casi terminamos!</h3>
                    <?php echo do_shortcode('[trade-form-register]'); ?>
                </div>
            </div>
        </div>
    </div>
    <?php wp_footer(); ?>
</section>
</body>

</html>