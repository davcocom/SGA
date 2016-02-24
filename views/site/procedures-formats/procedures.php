<?php
/**
 * Created by PhpStorm.
 * User: David Cocom
 * Date: 03/02/2016
 * Time: 04:28 PM
 */
use yii\bootstrap\Modal;

$formatsFirstPart = [
    [
        'name' => 'IDENTIFICACION Y EVALUACION DE ASPECTOS AMBIENTALES',
        'content' => '
        <h3>Procedimiento</h3>
        <a target="_blank"  href="Procedimientos/PROCEDIMIENTOS GENERALES/1. IDENTIFICACION Y EVALUACION DE ASPECTOS AMBIENTALES/P-CIPLADE-GA-01.pdf">P-CIPLADE-GA-01</a>

        <h3>Instrutivo</h3>
        <a target="_blank" href="Procedimientos/PROCEDIMIENTOS GENERALES/1. IDENTIFICACION Y EVALUACION DE ASPECTOS AMBIENTALES/I-CIPLADE-GA-01.pdf">INSTRUCTIVO PARA DETERMINAR LOS ASPECTOS AMBIENTALES SIGNIFICATIVOS</a>
        <h3>Formatos</h3>
        <a  href="Procedimientos/PROCEDIMIENTOS GENERALES/1. IDENTIFICACION Y EVALUACION DE ASPECTOS AMBIENTALES/F-CIPLADE-GA-41.pdf" target="_blank">ÁNALISIS DE ACTIVIDADES O PROCESOS PARA LA IDENTIFICACIÓN DE ASPECTOS AMBIENTALES</a><br>
        <a target="_blank" href="Procedimientos/PROCEDIMIENTOS GENERALES/1. IDENTIFICACION Y EVALUACION DE ASPECTOS AMBIENTALES/F-CIPLADE-GA-42.pdf">MATRIZ DE IDENTIFICACIÓN Y EVALUACIÓN DE ASPECTOS AMBIENTALES </a>'
    ],
    [
        'name' => 'IDENTIFICACION Y COMUNICACION DE REQUERIMIENTOS LEGALES EN MATERIA AMBIENTAL',
        'content' => ''
    ],
    [
        'name' => 'OBJETIVOS METAS Y PROGRAMAS AMBIENTALES',
        'content' => 'hola'
    ],
    [
        'name' => 'COMPETENCIA, ENTRENAMIENTO Y CONCIENCIA',
        'content' => ''
    ],
    [
        'name' => 'COMUNICACIÓN AMBIENTAL',
        'content' => ''
    ],
    [
        'name' => 'CONTROL DE DOCUMENTOS',
        'content' => ''
    ],
    [
        'name' => 'CONTROL DE RESIDUOS PELIGROSOS',
        'content' => ''
    ],
    [
        'name' => 'MANEJO DE RESIDUOS SOLIDOS URBANOS Y DE MANEJO ESPECIAL',
        'content' => ''
    ],
    [
        'name' => 'CONTROL DE APROVECHAMIENTO DE AGUA Y LA DESCARGA DE AGUA RESIDUAL',
        'content' => ''
    ],
    [
        'name' => 'TRAMITOLOGIA DE GESTIÓN AMBIENTAL',
        'content' => ''
    ],
    [
        'name' => 'CONTROL DE CONTRATISTAS',
        'content' => ''
    ],
];
$formatsSecondPart = [
    [
        'name' => 'MANEJO DE SUSTANCIAS QUÍMICAS PELIGROSAS',
        'content' => ''
    ],
    [
        'name' => 'MANTENIMIENTO PREVENTIVO Y CORRECTIVO DE INFRAESTRUCTURA Y EQUIPO',
        'content' => ''
    ],
    [
        'name' => 'CONTROL DE PROYECTOS Y OBRAS DE CONSTRUCCION',
        'content' => ''
    ],
    [
        'name' => 'IDENTIFICACION Y PREVENCION DE POTENCIALES SITUACIONES DE EMERGENCIA AMBIENTAL',
        'content' => ''
    ],
    [
        'name' => 'MONITOREO Y MEDICION',
        'content' => ''
    ],
    [
        'name' => 'EVALUACION DEL CUMPLIMIENTO LEGAL AMBIENTAL Y OTROS REQUERIMIENTOS',
        'content' => ''
    ],
    [
        'name' => 'ACCIONES AMBIENTALES CORRECTIVAS Y ACCIONES AMBIENTALES PREVENTIVAS',
        'content' => ''
    ],
    [
        'name' => 'CONTROL DE REGISTROS',
        'content' => ''
    ],
    [
        'name' => 'AUDITORIAS AMBIENTALES INTERNAS',
        'content' => ''
    ],
    [
        'name' => 'REVISION DE LA DIRECCION',
        'content' => ''
    ],
];
?>

<div class="treeBackground">

    <div class="row">
        <div class="pfblock-header wow fadeInUp">
            <h2 class="pfblock-title white">Prodedimientos Y Formatos</h2>
            <div class="pfblock-line white"></div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-5 col-lg-offset-1 formats">
            <?php
            foreach ($formatsFirstPart as $format) {
                Modal::begin([
                    'header' => '<h2>' . $format['name'] . '</h2>',
                    'toggleButton' => [
                        'label' => '<span class="fa fa-angle-right"></span> ' . $format['name'],
                        'tag' => 'p'
                    ],
                ]);

                echo $format['content'];

                Modal::end();
            }
            ?>
        </div>
        <div class="col-lg-5 formats">
            <?php
            foreach ($formatsSecondPart as $format) {
                Modal::begin([
                    'header' => '<h2>' . $format['name'] . '</h2>',
                    'toggleButton' => [
                        'label' => '<span class="fa fa-angle-right"></span> ' . $format['name'],
                        'tag' => 'p'
                    ],
                ]);

                echo $format['content'];

                Modal::end();
            }
            ?>
        </div>
    </div>


</div>
