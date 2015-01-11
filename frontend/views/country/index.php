<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>

<h2>Countries</h2>
<ul>
    <?php foreach($countries as $country): ?>
        <li>
            <?= Html::encode("{$country->name} ({$country->code})") ?>
            <?= $country->population ?>
        </li>
    <?php endforeach; ?>
</ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>