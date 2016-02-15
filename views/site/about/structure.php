<?php
/**
 * Created by PhpStorm.
 * User: David Cocom
 * Date: 30/01/2016
 * Time: 12:00 PM
 */
use yii\helpers\Html;
use yii\bootstrap\Collapse;

?>
<p><strong>DEFINICIÓN DE ESTRUCTURA Y RESPONSABILIDAD</strong>
<p class="info">
    Se ha formado una estructura de soporte para todo el SGA que trabaja para atender las necesidades de los
    diferentes grupos de interés (como son estudiantes, docentes, administrativos, personal manual y sociedad en
    general), la cual se define a continuación:</p>
<div class="col-lg-7 wow fadeInLeft" style="margin: 4em 0">
    <?= Html::img('images/estructura organica.png') ?>
</div>
<div class="col-lg-5">
    <?php
    echo Collapse::widget([
        'items' => [
            // equivalent to the above
            [
                'label' => 'I.- Junta de Directores',
                'content' => 'Responsabilidades:<br>Verificar el estado de la implementación por medio del procedimiento de “Revisión de la Dirección”.
            Toma de decisiones y autorizaciones en los objetivos, metas y programas ambientales.
            Ser facilitadores para la gestión de recursos para la implementación del proyecto.'
            ],
            // another group item
            [
                'label' => 'II.- Equipo de Administración del SGA',
                'content' => 'Compuesto por un grupo multidisciplinario de profesionales y estudiantes (que realizan su servicio social o
            prácticas profesionales) en constante formación sobre temática ambiental.
            <strong>Responsabilidades:</strong><br>
            Administrar el Sistema de Gestión Ambiental mediante la elaboración de planes, programas y procedimientos
            específicos para el cumplimiento de la norma.',
            ],
            // if you want to swap out .panel-body with .list-group, you may use the following
            [
                'label' => 'III.- Comité de Expertos en Materia Ambiental',
                'content' => [
                    'Compuesto por profesores de las facultades expertos en un área de interés del SGA, mencionados dentro de la
            estructura organizacional del SGA como expertos en materia ambiental.
            <strong>Responsabilidades:</strong><br>
            Aportar el conocimiento técnico para la mejora del desempeño ambiental de la Universidad y apoyo en la toma
            de
            decisiones durante el establecimiento de:
        <ol type="a" class="info">
            <li>Indicadores de desempeño del Sistema de Gestión Ambiental, diseño de proyectos de mejora ambiental,
                análisis
                de procedimientos y propuesta de métodos analíticos.
            </li>
            <li>Ser asesores internos en el desarrollo de los diferentes proyectos que involucren aspectos técnicos
                ambientales.
            </li>
        </ol>'
                ],
            ], [
                'label' => 'IV.- Equipos de Implantación del SGA',
                'content' => [
                    'Este quipo está compuesto por trabajadores de las facultades con diferentes cargos dentro de las mismas,
            conocidos dentro de la estructura organizacional del SGA como Responsables Ambientales y Responsables
            Operativos
            Ambientales.<br>
            <strong>Responsabilidades:</strong><br>
            Controlan las acciones de implementación que se generan dentro del Sistema de Gestión Ambiental en el sitio
            a
            certificar.<br>
            Fungen como el contacto o enlace entre el equipo de administración del SGA y la dependencia.<br>
            A través de la matriz de criterios de significancia, identificar los Aspectos Ambientales Significativos
            contractuales.<br>
            Aplicación de los procedimientos generados por el equipo de administración del SGA.<br>
            Con el apoyo del área de monitoreo, identificar y conocer los requisitos legales ambientales. <br>
            En coordinación con el área de auditorías programar e implementar las auditorías internas del Sistema de
            Gestión
            Ambiental.<br>
            Mantener control en las no conformidades detectadas y sobre el cierre de las acciones correctivas y
            preventivas.<br>
            Recabar información para la revisión con la dirección y dar seguimiento a las propuestas de mejora ahí
            establecidas.'
                ],
            ],
            [
                'label' => 'V.- Grupo de Educación Ambiental',
                'content' => [
                    'Compuesto por profesores de las distintas dependencias de la Universidad, con conocimiento de programas
            ambientales y generadores de material didáctico para la concientización de la Comunidad Universitaria.<br>
            <strong>Responsabilidades:</strong><br>
            Apoyar a la capacitación de estudiantes, docentes, administrativos y personal manual y operativo en temas
            ambientales.<br>
            Instructores de cursos, talleres y conferencias en los temas definidos según las necesidades encontradas.'
                ],
            ],
            [
                'label' => 'VI.- Grupo de Auditores Internos Ambientales',
                'content' => [
                    'Integrantes del equipo de Administración del SGA, profesores y trabajadores universitarios, quienes han sido
            certificados como “Auditor Líder en la ISO 14001:2004”, por la RABQSA.<br>
            <strong>Responsabilidades:</strong><br>
            Llevar a cabo las auditorías ambientales internas así como dar seguimiento al cumplimiento de las acciones
            correctivas.'
                ],
            ],
            [
                'label' => 'VII.- Voluntariado Ambiental',
                'content' => [
                    'Grupo compuesto por estudiantes de las distintas dependencias de la Universidad, interesados y comprometidos
            con promover por medio de acciones educativas una cultura ambiental a la Comunidad Universitaria y sociedad en
            general.'
                ],
            ],
            [
                'label' => 'VIII.- Comunidad Ambiental',
                'content' => [
                    'Está integrado por estudiantes de Servicio Social procedentes de las diversas facultades inscritas al
            programa.
            La actividad principal que realizan es la de apoyar al equipo Gestión Ambiental y a los usuarios del sistema
            en
            acciones de mejora continua a favor del ambiente.'
                ],
            ],
        ]
    ]);
    ?>
</div>

