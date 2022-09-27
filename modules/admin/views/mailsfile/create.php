<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Mailsfile */

$this->title = 'Create Mailsfile';
$this->params['breadcrumbs'][] = ['label' => 'Mailsfiles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mailsfile-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
