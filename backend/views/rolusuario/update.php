<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\rolusuario $model
 */

$this->title = 'Update Rolusuario: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Rolusuarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rolusuario-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
