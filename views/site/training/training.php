<?php
/**
 * Created by PhpStorm.
 * User: David Cocom
 * Date: 03/02/2016
 * Time: 04:26 PM
 */
use yii\bootstrap\Modal;

?>

<div class="container">

    <div class="row">
        <div class="pfblock-header wow fadeInUp">
            <h2 class="pfblock-title">Diplomado</h2>
            <div class="pfblock-line"></div>
        </div>
    </div>

    <div class="row">

        <a class="btn btn-success linkToDownload col-lg-2" href="diplomado/Calendario Diplomado SGA Equipo AGA.pdf"
           target="_BLANK">
            Calendario
        </a>
        <a class="btn btn-success linkToDownload col-lg-2"
           href="diplomado/Responsabilidades del Responsable Ambiental.pdf" target="_BLANK">

            Responsabilidades
        </a>
        <a class="btn btn-success linkToDownload col-lg-2"
           href="diplomado/Diplomado Módulo I Entendiendo los Requerimietnos de la Norma ISO 14001 2004.pdf"
           target="_BLANK">
            Módulo I
        </a>

        <?php
        Modal::begin([
            'header' => '<h2>Identificación de Aspectos Ambientales Criterios de Significancia</h2>',
            'toggleButton' => [
                'label' => 'Módulo II',
                'class' => 'btn btn-success linkToDownload col-lg-2'
            ],
        ]);
        ?>
        <a href="diplomado/Diplomado PDF Sesión II__.pdf">Presentación </a><br><br>
        <a href="diplomado/Diagrama del Porceso Enseñanza-Aprendizaje.docx">Diagrama del Porceso
            Enseñanza-Aprendizaje</a><br><br>
        <a href="diplomado/Identificación Evaluación Aspectos Ambientales UADY.xls">Identificación Evaluación Aspectos
            Ambientales UADY</a><br><br>
        <a href="diplomado/Calificación Criterios Significancia de Aspectos Ambientales Significativos.pdf">Calificación
            "Criterios Significancia de Aspectos Ambientales Significativos"</a><br><br>

        <?php
        Modal::end();
        ?>

        <?php
        Modal::begin([
            'header' => '<h2>Diplomado: Sesión III</h2>',
            'toggleButton' => [
                'label' => 'Módulo III',
                'class' => 'btn btn-success linkToDownload col-lg-2'
            ],
        ]);
        ?>
        <a href="diplomado/Diplomado Sesión III Ejemplos de Indicadores de Desempeño Ambiental.pdf" target="_blank">Ejemplos
            de Indicadores de Desempeño Ambiental</a><br><br>
        <?php Modal::end(); ?>

        <a class="btn btn-success linkToDownload col-lg-2"
           href="diplomado/Modulo IV Control Operacional - Agua, Energía Eléctrica, Residuos.pdf" target="_BLANK">
            Módulo IV
        </a>
        <a class="btn btn-success linkToDownload col-lg-2" href="diplomado/Retro.pdf">
            Retro Módulos 1, 2 y 3
        </a>

        <?php
        Modal::begin([
            'header' => '<h2>Tareas</h2>',
            'toggleButton' => [
                'label' => 'Tareas',
                'class' => 'btn btn-success linkToDownload col-lg-2'
            ],
        ]);
        ?>
        <a href="diplomado/Tarea sesión III.pdf">Tarea sesión III</a><br><br>
        <a href="diplomado/Tarea sesión IV.pdf">Tarea sesión IV</a><br><br>
        <a href="diplomado/Tarea sesión V.pdf">Tarea sesión V</a><br><br>
        <a href="diplomado/Tarea sesión VI.pdf">Tarea sesión VI</a><br><br>
        <a href="diplomado/Programa Objetivo Ambiental.doc">Formato Programa Objetivo Ambiental</a><br><br>
        <?php Modal::end(); ?>

    </div>

</div>
