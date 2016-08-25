<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\rolempleado $model
 */

$this->title = 'Update Rolempleado: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Rolempleados', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rolempleado-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
