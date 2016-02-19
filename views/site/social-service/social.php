<?php
/**
 * Created by PhpStorm.
 * User: David Cocom
 * Date: 03/02/2016
 * Time: 04:24 PM
 */
use kartik\tabs\TabsX;
?>

<!-- CallToAction start -->
<?php

$items = [
    [
        'label'=>'Servicio social',
        'content'=>$this->render('community'),
        'active'=>true,
    ],
    [
        'label'=>'Voluntariado Ambiental',
        'content'=>$this->render('volunteer'),
    ],
];
// Above
?>
<section class="calltoaction">
    <div class="container">

        <div class="row">

            <div class="col-md-12 col-lg-12">
                <h2 class="wow slideInRight" data-wow-delay=".1s">¿QUIERES FORMAR PARTE DEL CAMBIO?</h2>
                <div class="calltoaction-decription wow slideInRight" data-wow-delay=".2s">
                    ¡Únete a nuestro equipo de trabajo como parte de la Comunidad Ambiental o Voluntariado!
                </div>
            </div>
        </div><!-- .row -->
    </div><!-- .container -->
</section>
            <?=TabsX::widget([
                'items'=>$items,
                'position'=>TabsX::POS_ABOVE,
                'align'=>TabsX::ALIGN_CENTER,
                'encodeLabels'=>false
            ]);?>
<!-- CallToAction end -->


