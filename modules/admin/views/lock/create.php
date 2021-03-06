<?php

use yii\helpers\Html;
use app\components\AdminMenu;

echo AdminMenu::widget();

$this->title = Yii::t('app', 'Create Lock');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Locks'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lock-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
