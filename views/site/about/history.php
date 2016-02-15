<?php
/**
 * Created by PhpStorm.
 * User: David Cocom
 * Date: 30/01/2016
 * Time: 11:57 AM
 */
use yii\helpers\Html;
?>
<div class="tab-pane" id="history">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <div class="col-lg-4 col-lg-offset-2">
                    <?= Html::img('images/history_1.JPG') ?>
                </div>
                <div class="col-lg-4">
                    <h3 class="subtitle text-justify">En el 2002, la XVI Reunión Ordibaria de Consejo de Universidades Publicas e
                        Instituciones Afines (CUPIA) de la ANUIES, dio a conocer políticas de desarrollo
                        a las cuales la Universidad Autonoma de Yucatan respondió con el Programa
                        Institucional
                        del Medio Ambiente (PIMA)</h3>
                </div>
            </div>

            <div class="item">
                <div class="col-lg-4 col-lg-offset-2">
                    <?= Html::img('images/history_2.JPG') ?>
                </div>
                <div class="col-lg-4">
                    <p>Desde el 2002 hasta el 2010, el Programa Institucional del Medio Ambiente desarrolló
                        diversas actividades de cocientización y educación ambiental</p>
                </div>
            </div>

            <div class="item">
                <div class="col-lg-4 col-lg-offset-2">
                    <?= Html::img('images/history_3.JPG') ?>
                </div>
                <div class="col-lg-4">
                    <p>El Plan de Desarrollo Institucional 2010-2020 le otorga a la temática ambiental el
                        carácter de prioritario e institucionaliza las acciones a favor de la misma,
                        surgiendo así el Programa de Gestión de Medio Ambiente (PGMA) buscando que la UADY
                        se desarrolle en un marco del cuidado del medio ambiente y el desarrollo
                        sustentable</p>
                </div>
            </div>

            <div class="item">
                <div class="col-lg-4 col-lg-offset-2">
                    <?= Html::img('images/history_4.JPG') ?>
                </div>
                <div class="col-lg-4">
                    <p>Como un mecanismo de coordinación de las acciones de prevención, control y
                        disminución de los impactos ambientales de las actividades universitarias nace en el
                        2012 el Sistema de Gestión Ambiental</p>
                </div>
            </div>
        </div>

        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

    </div>
</div>
