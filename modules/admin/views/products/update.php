<?php

use yii\helpers\Html;
use app\components\AdminMenu;

echo AdminMenu::widget();

$this->title = Yii::t('app', 'Изменение товара: ', [
		'modelClass' => 'Products',
	]) . $model->product_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Products'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->product_id, 'url' => ['view', 'id' => $model->product_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="products-update">

	<h1><?= Html::encode($this->title) ?></h1>

	<?= $this->render('_form', [
		'model'               => $model,
		'properties'          => $properties,
		'properties_product_type' => $properties_product_type,
		'property_value_product' => $property_value_product,
		'property_value_ext_html_product' => $property_value_ext_html_product,
	]) ?>

</div>
