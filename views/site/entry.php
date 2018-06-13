<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Form';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Enter your Name and Email</p>

    <?php 
    	$form = ActiveForm::begin();
		echo $form->field($model, 'name');    
		echo $form->field($model, 'email');
		echo "<pre>";    
    	var_dump($form);
		echo "<pre>";    
    ?>
    <div class="form-group">
		<?= Html::submitButton('отправить', ['class' => 'btn btn-primary']) ?>    	
    </div>
	<?php ActiveForm::end();?>
</div>
