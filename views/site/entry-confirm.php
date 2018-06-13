<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'FormConfirm';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Представление формы при заполненных полях и пройденой валидации</p>
    <?
    	// что за html или yii это объекты?
		echo Html::encode($model->name);    
		echo Html::encode($model->email);    
    	var_dump($model);
    ?>

</div>
