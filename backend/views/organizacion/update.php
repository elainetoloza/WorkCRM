<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\organizacion $model
 */

$this->title = 'Update Organizacion: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Organizacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="organizacion-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
