<?php
/**
 * Created by PhpStorm.
 * User: David Cocom
 * Date: 02/02/2016
 * Time: 11:40 AM
 */
use kartik\tabs\TabsX;
?>
<?php

$items = [
    [
        'label'=>'Objetivo Del SGA',
        'content'=>$this->render('goals'),
        'active'=>true,
    ],
    [
        'label'=>'Alcance',
        'content'=>$this->render('scope'),
    ],
    [
        'label'=>'Organigrama',
        'content'=>$this->render('organization-chart'),
    ],
    [
        'label'=>'Plan',
        'content'=>$this->render('plan')
    ],
];
// Above
?>

<!-- about start -->

<div class="container">


    <div class="row">

        <div class="pfblock-header wow fadeInUp">
            <h2 class="pfblock-title">Sistema de Gestión Ambiental</h2>
            <div class="pfblock-line"></div>
            <?=TabsX::widget([
                'items'=>$items,
                'position'=>TabsX::POS_ABOVE,
                'align'=>TabsX::ALIGN_CENTER,
                'encodeLabels'=>false
            ]);?>
        </div>



    </div><!-- .row -->


</div><!-- .row -->

<!-- about end -->


