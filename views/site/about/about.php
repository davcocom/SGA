<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use kartik\tabs\TabsX;

?>
<?php

$items = [
    [
        'label' => 'Objetivo',
        'content' => $this->render('goals'),
        'active' => true
    ],
    [
        'label' => 'Historia',
        'content' => $this->render('history'),
    ],
    [
        'label' => 'Estructura',
        'content' => $this->render('structure'),
    ],
    [
        'label' => 'Acciones',
        'items' => [
            [
                'label' => 'Formación Profesional y Ciudadana',
                'content'=>$this->render('actions_professionalTraining')
            ],
            [
                'label' => 'Gestión Social del Conocimiento',
                'content'=>$this->render('actions_socialKnowledgeManagement')
            ],
            [
                'label' => 'Participación Social',
                'content'=>$this->render('actions_socialParticipation')
            ],
            [
                'label' => 'Universidad Responsable',
                'content'=>$this->render('actions_responsibleUniversity')
            ],
        ]
    ],
];
// Above
?>

<!-- about start -->

<div class="container">

    <div class="row">

        <div class="pfblock-header wow fadeInUp">
            <h2 class="pfblock-title">Acerca del Programa</h2>
            <div class="pfblock-line"></div>
        </div>

        <?= TabsX::widget([
            'items' => $items,
            'position' => TabsX::POS_LEFT,
            //'align'=>TabsX::ALIGN_CENTER,
            'encodeLabels' => false
        ]); ?>


    </div><!-- .row -->


</div><!-- .row -->

<!-- about end -->


