<?php
use yii\helpers\Url;
?>

<div class="company-navbar navbar-collapse load-link ">
    <div>
        <ul class="nav nav-tabs nav-tab nav-text navbark">
            <?php
            foreach($buttons as $key=>$value){ ?>
                <li><a href="<?= Url::toRoute([$key]);?>"><?php echo $value; ?></a></li>
            <?php } ?>
        </ul>
    </div>
</div>
<br/>