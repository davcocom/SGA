<?php
/**
 * Created by PhpStorm.
 * User: David Cocom
 * Date: 12/02/2016
 * Time: 12:58 PM
 */
use yii\helpers\Html;
use yii\helpers\Json;

?>

<div class="row text-justify" style="margin: 1em 0; padding: 0">
    <h3 class="pfblock-title" style="margin: 2em 0">Universidad Responsable</h3>
    <div class="col-lg-6">
        En este apartado se encuentran los Avances de la
        implementación del Sistema de Gestión Ambiental, basado
        en la <strong>Norma ISO 14001:2004</strong>.
        El Sistema de Gestión Ambiental (SGA) es un proceso de
        autogestión basado en la Norma ISO 14001:2004, el cual
        funciona como un ordenador de actividades y permite
        implementar un ciclo de mejora continua en buenas
        prácticas de gestión ambiental. El Sistema pretende integrar
        a todas las dependencias de la Universidad y para lograrlo
        se han realizado acciones en cada una de las dependencias
        y campus para dar cumplimiento a los puntos de la Norma
        ISO 14001:2004.
        <strong>A la fecha 75% de las dependencias universitarias se
            encuentran dentro del sistema.</strong>
        Cómo parte de las estrategias para reducir el impacto ambiental de las actividades de la Universidad, se realiza
        un
        proyecto integral de gestión de agua, el cual ha iniciado con la <strong>implementación de tres sistemas de
            tratamiento de aguas residuales</strong> en tres campus universitarios;
        Este año se realizó la <strong>siembra de 213 árboles</strong> distribuidos en los Campus de la UADY, y
        aproximadamente se
        produjeron 800 plantas en el invernadero.
    </div>
    <div class="col-lg-6">
        En 2015 la empresa InTrust Global Investments destacó que la <strong>Universidad Autónoma de Yucatán es una de
            las
            tres sedes en México del Primer Programa de Liderazgo Aplicado a las Energías Renovables y Eficiencia
            Energética</strong>, con el fin de profesionalizar a los académicos para desarrollar proyectos del ramo.
        Esta es una de las grandes acciones que en coordinación con el Sistema de Gestión Ambiental se ha llevado
        a cabo para dirigir esfuerzos en busca del equilibrio ambiental, el aprovechamiento de recursos y la
        Responsabilidad Social Universitaria en general.
        Como parte de la clausura de las actividades socio-comunitarias de la Unidad Académica con Interacción
        Comunitaria (UABIC) de la UADY y tomando como eje las acciones que impulsa el MEFI orientadas al aprendizaje
        con responsabilidad y consciencia social y ambiental, 80 estudiantes y profesores de la UABIC realizaron la
        <strong>siembra de 300 árboles en el Parque Ecológico Metropolitano del Sur "Yumtsil"</strong>
        (Guardián del Bien) sede del Programa “Jóvenes y responsabilidad social". Todas las actividades del programa se
        realizaron producto de un <strong>convenio con la SEDUMA</strong>, uniendo esfuerzos y trabajando de manera
        conjunta para el beneficio de la sociedad.
    </div>
</div>

<?php
$albumId = '72157664666116041';
$url = 'https://api.flickr.com/services/rest/?method=flickr.photosets.getPhotos&api_key=2aecb76609c580f665d53b8c7d37d2bb&photoset_id=' . $albumId . '&user_id=140277175%40N03&format=json&nojsoncallback=1';

$json = file_get_contents($url);
$obj = Json::decode($json);
?>

<?php if (isset($obj['message'])){
    echo '<p>' . $obj['message'] . '</p>';
}else{ ?>

<div id="images_actions_university">
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


