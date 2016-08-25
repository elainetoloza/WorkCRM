<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\organizacion $model
 */

$this->title = 'Create Organizacion';
$this->params['breadcrumbs'][] = ['label' => 'Organizacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="organizacion-create">
    <div class="page-header">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
