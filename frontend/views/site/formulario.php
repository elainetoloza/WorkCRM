<?php
use yii\helpers\Url;
use yii\helpers\Html;
?>
<hl> Formulario</hl>
<h3><?= $mensaje ?></h3>
<?= Html::beginForm(
		Url::toRoute("site/request"), //action
		"get", //metodo
		['class' => 'form-inline']//opciones
	);
?>
<div class="form-group">
	<?= Html::label("Introduce tu nombre", "nombre") ?>
	<?= Html::textInput("nombre", null, ["class" => "form-control"]) ?>
</div>

<?= Html::submitInput("Enviar nombre", ["class" => "btn btn-primary"]) ?>
<?= Html::endForm() ?>