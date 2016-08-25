<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\rolempleado $model
 */

$this->title = 'Create Rolempleado';
$this->params['breadcrumbs'][] = ['label' => 'Rolempleados', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rolempleado-create">
    <div class="page-header">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
