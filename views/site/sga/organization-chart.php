<?php
/**
 * Created by PhpStorm.
 * User: David Cocom
 * Date: 03/02/2016
 * Time: 11:11 AM
 */
use yii\bootstrap\Collapse;
use yii\helpers\Html;

?>
<div class="row" style="margin: 3em 0">
    <div class="wow fadeinright col-lg-4 col-lg-offset-1">
        <?= Collapse::widget([
            'items' => [
                [
                    'label' => 'Jefe del Área de Gestión Ambiental',
                    'content' => 'Liderar, planear, controlar  y dirigir el correcto desempeño del Sistema de Gestión Ambiental,
             así como la búsqueda de recursos, coordinar la comunicación con los sectores externos y la búsqueda de la participación de la comunidad universitaria en todos sus niveles.'
                ],
                [
                    'label' => 'Auditoria Ambiental',
                    'content' => 'Dirigir la planificación y realización de las auditorías internas así como verificar la debida atención de
            las observaciones que se deriven de las mismas.'
                ], [
                    'label' => 'Control de Documentos',
                    'content' => 'Integrar, organizar, difundir y mantener actualizada la documentación del SGA, así como verificar los
            requisitos y uso adecuado de la misma.'
                ], [
                    'label' => 'Monitoreo y Medición',
                    'content' => 'Verificar el correcto planteamiento y redacción de los objetivos y metas ambientales y dar seguimiento a los
            programas de los campus certificados.'
                ], [
                    'label' => 'Seguimiento y Cumplimiento Legal',
                    'content' => 'Actualizar y dar seguimiento a la normativa aplicable del SGA así como verificar el cumplimiento de las
            mismas en los sitios certificados.'
                ], [
                    'label' => 'Seguimiento de Capacitación Ambiental',
                    'content' => 'Evalúa la competencia de las personas involucradas en el SGA, así mismo coordinando cursos para su
            formación.'
                ],
            ]
        ]) ?>
    </div>
    <div class="wow fadeInDown col-lg-6" style="margin: 3em 0">
        <?=Html::img('images/organigrama.png')?>
    </div>
</div>


