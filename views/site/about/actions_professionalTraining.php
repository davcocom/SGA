<?php
/**
 * Created by PhpStorm.
 * User: David Cocom
 * Date: 12/02/2016
 * Time: 12:45 PM
 */
use yii\helpers\Html;
use yii\helpers\Json;
?>
<div class="row" style="margin: 1em 0; padding: 0">
    <h3 class="pfblock-title" style="margin: 2em 0">Formación Profesional y Ciudadana</h3>
    <div class="col-lg-4 text-justify">
        Se ubican las actividades desarrolladas en el
        marco de la Semana del Medio Ambiente en la cual se llevaron a cabo los Concursos
        de Cine Ambiental y de Emprendedores Verdes; además,
        se presentaron los resultados de la Encuesta Diagnóstico
        de Resultados Ambientales.
    </div>
    <div class="col-lg-4 text-justify">
        El grupo de Educación Ambiental dio continuidad
        a la Campaña de Sensibilización Ambiental dirigida al
        personal administrativo, manual operativo, profesores y
        estudiantes.
    </div>
    <div class="col-lg-4 text-justify">
        Este 2015 la campaña impactó a 282 alumnos
        y 60 trabajadores entre personal académico, administrativo
        y manual de las facultades de Odontología, Medicina y
        Enfermería, de las Preparatorias 1 y 2, la Unidad Académica
        con Interacción Comunitaria y del Campus de Arquitectura,
        Hábitat, Arte y Diseño.
    </div>
</div>

<?php
$albumId = '72157664120971319';
$url = 'https://api.flickr.com/services/rest/?method=flickr.photosets.getPhotos&api_key=2aecb76609c580f665d53b8c7d37d2bb&photoset_id=' . $albumId . '&user_id=140277175%40N03&format=json&nojsoncallback=1';

$json = file_get_contents($url);
$obj = Json::decode($json);
?>
<?php if (isset($obj['message'])){
    echo '<p>' . $obj['message'] . '</p>';
}else{ ?>
<div id="images_actions_professional">
    <?php
    $photos = $obj['photoset']['photo'];
    $randomImages = count($photos) >= 10 ? array_rand($photos, 10): array_rand($photos, count($photos));

    foreach ($randomImages as $i) {
        echo '<div>' . Html::img('https://farm' . $photos[$i]['farm'] . '.staticflickr.com/' . $photos[$i]['server'] .
                '/' . $photos[$i]['id'] . '_' . $photos[$i]['secret']  . '.jpg') . '</div>';
    }
    }
    ?>
</div>
