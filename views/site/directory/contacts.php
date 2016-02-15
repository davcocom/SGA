<?php
/**
 * Created by PhpStorm.
 * User: David Cocom
 * Date: 03/02/2016
 * Time: 12:08 PM
 */
?>

<div class="row">
<?php
$counter = 0;
foreach($people as $person):?>
    <div class="col-lg-3">
        <div class="iconbox wow slideInUp" data-wow-delay=".<?=$counter?>s">
            <div class="iconbox-text">
                <h3 class="iconbox-title"><?=$person['name']?></h3>
                <div class="iconbox-desc">
                    <?=$person['role']?>
                    <br>
                    <a href="mailto:<?=$person['email']?>"><?=$person['email']?></a>
                </div>
            </div>
        </div>
    </div>
<?php
$counter++;
endforeach;?>
</div>