<?php
use yii\helpers\Html;
?>

<p>You have entered the following information</p>

<ul>
    <li><label for="name">Name</label><?= Html::encode($model->name) ?></li>
    <li><label for="email">Email</label><?= Html::encode($model->email) ?></li>
    <li><label for="message">Message</label><?= Html::encode($model->message) ?></li>
</ul>