<?php

/* @var $this yii\web\View */
/* @var $model \matejch\pageGuide\models\PageGuide */

$this->title = 'Vytvoriť nápovedu';
$this->params['breadcrumbs'][] = ['label' => 'Nápovedy', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="guide-create mt-20 w-full px-4">

    <?= $this->render('@app/views/templates/_title', ['title' => $this->title]) ?>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
