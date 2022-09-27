<?php 
    use yii\helpers\Html;
    use yii\widgets\ActiveForm; 
?>
<div class="modal off" id="modal-callback">
    <div class="modal-content">
        <div class="modal-header">
            <span>Заказать звонок</span>
            <div class="modal-close">
                <i class="fas fa-plus"></i>
            </div>
        </div>
        <div class="modal-body">
            <?php $form = ActiveForm::begin(); ?>
                <div class="modal-body__title">Оставьте заявку и наш менеджер <br> свяжеться с вами в течении 5 минут</div>
                <?=$form->field($form_model, 'name')->textInput(['placeholder' => 'Ваше имя'])->label(false); ?>
                <?=$form->field($form_model, 'phone', ['inputOptions' => ['class' => 'phone mask']])->textInput(['placeholder' => 'Ваш телефон'])->label(false); ?>
                <?=$form->field($form_model, 'data')->hiddenInput(['value' => date('d.m.o H:i:s')])->label(false); ?>
                <?=$form->field($form_model, 'form_name')->hiddenInput(['value' => 'Модальное окно'])->label(false); ?>
                <?=$form->field($form_model, 'button_name')->hiddenInput()->label(false); ?>
                <?=HTML::submitButton('Заказать звонок', ['class' => 'btn']) ?>
            <?php ActiveForm::end() ?>
        </div>
    </div>
</div>