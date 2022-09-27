<?php 
    use yii\helpers\Html;
    use yii\widgets\ActiveForm; 
?>

<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data', 'id' => 'formfile']]); ?>
    <h2>Если у вас есть техническое задание, то просто заполните эту форму</h2>
    <p>Наш специалист свяжеться с вами в течениее 5 минут</p>

    <?=$form->field($form_model, 'name')->textInput(['placeholder' => 'Ваше имя'])->label(false); ?>
    <?=$form->field($form_model, 'phone', ['inputOptions' => ['class' => 'mask']])->textInput(['placeholder' => 'Ваш телефон'])->label(false); ?>
    <?=$form->field($form_model, 'data')->hiddenInput(['value' => date('d.m.o H:i:s')])->label(false); ?>
    <div class="input__wrapper">
        <?= $form->field($form_model, 'file', ['inputOptions' => ['class' => 'input input__file']])->fileInput()->label('<span class="input__file-icon-wrapper"><img class="input__file-icon" src="img/callback/load.png" alt="Выбрать файл" width="25"></span><span class="input__file-button-text">Выберите файл</span>', ['class' => 'input__file-button']) ?>
    </div>
    <?=HTML::submitButton('ОТПРАВИТЬ', ['class' => 'btn']) ?>

    <p>Нажимая на кнопку "Отправить", вы даете <a href=""> согласие на обработку персональных данных</a> и соглашаетесь с <a href="">Политикой конфиденциальности</a> </p>
<?php ActiveForm::end() ?>
            