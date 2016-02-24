<?php
/**
 * Created by PhpStorm.
 * User: David Cocom
 * Date: 12/02/2016
 * Time: 12:55 PM
 */
use yii\bootstrap\Html;
use yii\helpers\Json;

?>

<div class="row text-justify" style="margin: 1em 0; padding: 0">
    <h3 class="pfblock-title" style="margin: 2em 0">Participación social</h3>
    <div class="col-lg-3">
        Corresponde a la Participación Social
        y en él se ubican las actividades que desarrolla el
        Voluntariado Ambiental UADY (VA UADY) cuyo objetivo es promover una cultura ambiental,
        tanto en la comunidad universitaria como en la sociedad
        general, y crear una conciencia colectiva de bienestar
        ambiental y buenos hábitos, mediante actividades de concientización.
    </div>

    <div class="col-lg-3">
        Se han realizado actividades varias, entre ellas la Segunda Rodada
        Ambiental, con motivo del Día Mundial del Medio Ambiente,
        y se contó con la participación de diversos grupos
        estudiantiles, entre ellos, SEBBY, Club de Lectura UADY,
        FEDY, NFU y Asociación de Scouts de México (Provincia
        Yucatán).
    </div>

    <div class="col-lg-3">
        Es destacable el proyecto “Ya´ax Balam”, que
        consiste en acudir a alguna población del estado, donde
        exista una necesidad relacionada con la cultura ambiental y
        realizar actividades para crear conciencia en cuanto a la
        protección del ambiente, con la participación directa de la
        comunidad.
    </div>

    <div class="col-lg-3">
        Es importante destacar que el Voluntariado Ambiental UADY fue uno de los ganadores del
        concurso nacional “Rompe con el Cambio Climático 2015”, organizado por la Secretaría de Medio Ambiente
        y Recursos Naturales (Semarnat). Cuyo objetivo fue reconocer y promover la participación de los jóvenes
        mexicanos en acciones que contribuyan a fortalecer una cultura ambiental desde sus entornos socio-culturales.
    </div>
</div>

<?php
$albumId = '72157664242621450';
$url = 'https://api.flickr.com/services/rest/?method=flickr.photosets.getPhotos&api_key=2aecb76609c580f665d53b8c7d37d2bb&photoset_id=' . $albumId . '&user_id=140277175%40N03&format=json&nojsoncallback=1';

$json = file_get_contents($url);
$obj = Json::decode($json);
?>
<?php if (isset($obj['message'])){
    echo '<p>' . $obj['message'] . '</p>';
}else{ ?>
<div id="images_actions_social">
    <?php
    $photos = $obj['photoset']['photo'];
    $randomImages = count($photos) >= 7 ? array_rand($photos, 7) : array_rand($photos, count($photos));

    foreach ($randomImages as $i) {
        echo '<div>' . Html::img('https://farm' . $photos[$i]['farm'] . '.staticflickr.com/' . $photos[$i]['server'] .
                '/' . $photos[$i]['id'] . '_' . $photos[$i]['secret'] . '.jpg') . '</div>';
    }
    }
    ?>
</div>
<div class="row">
    <?= Html::img('images/flickr_logo.png', ['class' => 'col-xs-1']); ?>
    <div class="col-lg-offset-10">
        <a class="btn" href="https://www.flickr.com/photos/96169295@N03/albums/<?= $albumId ?>" target="_blank">
            <span class="fa fa-folder-open-o"></span>
            Ver más
        </a>
    </div>
</div>

