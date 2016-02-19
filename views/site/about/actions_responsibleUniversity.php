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

<div class="row">
    <div>

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
    $randomImages = count($photos) >= 10 ? array_rand($photos, 10): array_rand($photos, count($photos));

    foreach ($randomImages as $i) {
        echo '<div>' . Html::img('https://farm' . $photos[$i]['farm'] . '.staticflickr.com/' . $photos[$i]['server'] .
                '/' . $photos[$i]['id'] . '_' . $photos[$i]['secret']  . '.jpg') . '</div>';
    }
    }
    ?>
</div>

<div class="col-lg-3 pull-right">
    <a class="btn btn-info" href="https://www.flickr.com/photos/96169295@N03/albums/<?= $albumId ?>">Ver más
        en <?= Html::img('images/Flickr_logo.png', ['class' => 'col-xs-6']); ?>
    </a>
</div>

