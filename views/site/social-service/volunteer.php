<?php
/**
 * Created by PhpStorm.
 * User: David Cocom
 * Date: 05/02/2016
 * Time: 10:41 AM
 */
use yii\helpers\Html;
use yii\helpers\Json;

?>
<div class="row info">
    <div class="col-lg-3 wow fadeInUp" style="margin: 10em 0">
        <?= Html::img('images/voluntariado.png') ?>
    </div>

    <div class="row col-lg-9" style="margin: 2em 0;">
        <div class="col-lg-4">
            <div class="wow slideInUp">
                <div class="iconbox-text">
                    <p class="iconbox-title">
                        ¿QUIÉNES SOMOS?
                    </p>
                    <div class="iconbox-desc">
                        <p class="text-justify">Somos un grupo compuesto por alumnos, profesores y personal
                            administrativo de la Universidad
                            Autónoma De Yucatán y de otras instituciones, de cualquier semestre, edad y profesión con un
                            interés
                            auténtico en hacer activismo ambiental.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="wow slideInUp">
                <div class="iconbox-text">
                    <p class="iconbox-title">
                        ¿QUÉ HACEMOS?
                    </p>
                    <div class="iconbox-desc">
                        <p class="text-justify">
                            Organizamos actividades de concientización ambiental para reducir el impacto negativo que
                            generan
                            las actividades del ser humano y buscamos generar un cambio en la cultura de las personas
                            para
                            revertir el daño que hemos causado a nuestro entorno.
                            Queremos que las personas aprendan a ser consumidores responsables haciendo conciencia y
                            tratando de
                            generar un vínculo con el medio ambiente.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="wow slideInUp">
                <div class="iconbox-text">
                    <p class="iconbox-title">
                        ¿CÓMO TRABAJAMOS?
                    </p>
                    <div class="iconbox-desc">
                        <p class="text-justify">
                            Tenemos un plan de trabajo basado en la agenda ambiental (una agenda hecha estratégicamente
                            para
                            tratar de diagnosticar los problemas identificados en los aspectos ambientales, económicos y
                            sociales).
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    $albumId = '72157664764124176';
    $url = 'https://api.flickr.com/services/rest/?method=flickr.photosets.getPhotos&api_key=2aecb76609c580f665d53b8c7d37d2bb&photoset_id=' . $albumId . '&user_id=140277175%40N03&format=json&nojsoncallback=1';

    $json = file_get_contents($url);
    $obj = Json::decode($json);
    ?>
    <?php if (isset($obj['message'])){
        echo '<p>' . $obj['message'] . '</p>';
    }else{ ?>
    <div id="images_actions_volunteer">
        <?php
        $photos = $obj['photoset']['photo'];
        $randomImages = array_rand($photos, 10);

        foreach ($randomImages as $i) {
            echo '<div>' . Html::img('https://farm' . $photos[$i]['farm'] . '.staticflickr.com/' . $photos[$i]['server'] .
                    '/' . $photos[$i]['id'] . '_' . $photos[$i]['secret'] . '.jpg') . '</div>';
        }
        }
        ?>
    </div>

</div>
