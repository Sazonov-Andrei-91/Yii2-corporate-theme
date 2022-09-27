<?php
use app\assets\AppAsset;
use app\assets\AboutAsset;
use yii\helpers\Html;
use yii\helpers\Url;
use app\components\LeftMenuWidget;
use app\components\FooterMenuWidget;
use app\components\ModalFormWidget;

$url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
if($url == 'http://yii.shop2/')
    AppAsset::register($this);
else
    AboutAsset::register($this);
?>



<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
	<base href="/">
	<meta charset="<?= Yii::$app->charset ?>">
	<?php $this->registerCsrfMetaTags() ?>
	<title><?= Html::encode($this->title) ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php $this->head() ?>
    <?php if($url == 'http://yii.shop2/') : ?>
        <style>
            .load__wrapper{position:fixed;width:100%;height:100%;top:0;right:0;bottom:0;left:0;z-index:19999;background-color:#fff}.load{position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);width:100px;height:100px}.load hr{border:0;margin:0;width:40%;height:40%;position:absolute;border-radius:50%;animation:spin 2s ease infinite}.load :first-child{background:#19a68c;animation-delay:-1.5s}.load :nth-child(2){background:#f63d3a;animation-delay:-1s}.load :nth-child(3){background:#fda543;animation-delay:-.5s}.load :last-child{background:#193b48}@keyframes spin{0%,100%{transform:translate(0)}25%{transform:translate(160%)}50%{transform:translate(160%,160%)}75%{transform:translate(0,160%)}}header{padding:10px 0;width:100%;position:fixed;z-index:1200;transition:all ease .5s;color:#fff}header .container{display:flex;justify-content:space-between;align-items:center}.header-logo a{display:flex;align-items:center;text-decoration:none}.header-logo span{margin-left:10px;text-transform:uppercase;font-size:12px;font-weight:600;color:#fff}.header-nav ul{display:flex}.header-nav ul li{margin:0 10px}.header-nav ul li a{font-size:12px;font-weight:600;text-decoration:none;color:#fff}.header-phone{text-align:center}.header-phone__top{margin-bottom:4px}.header-phone__top a{color:#fff;text-decoration:none}.header-phone__bottom span{border:1px solid #fff;padding:5px 20px;border-radius:3px;display:block;cursor:pointer;transition:all ease .5s;text-transform:uppercase;font-size:11px;font-weight:300}.header-phone__bottom span:hover{background-color:var(--color-acc1)}.firstscreen .swiper-slide__img{width:100%;height:100vh;background-size:cover;background-position:center center}.firstscreen .swiper-slide__img::after{content:'';display:block;position:absolute;top:0;right:0;bottom:0;left:0;background-color:rgba(0,0,0,.6)}.firstscreen .swiper-slide:nth-of-type(2) .swiper-slide__img::after{background-color:rgba(0,0,0,.6)}.firstscreen .swiper-slide:nth-of-type(3) .swiper-slide__img::after{background-color:rgba(0,0,0,.7)}.firstscreen .swiper-slide:nth-of-type(4) .swiper-slide__img::after{background-color:rgba(0,0,0,.4)}.swiper-slide__text{position:absolute;top:30%;left:20%;width:60%;color:#fff;border-radius:70px;opacity:0}.swiper-slide__text h2{margin-bottom:10px;font-size:70px;font-weight:100;text-shadow:3px 3px #000}.swiper-slide__text p{margin-bottom:20px}.swiper-slide__btn{border-radius:25px;text-transform:uppercase;display:inline-block;cursor:pointer;transition:all ease .5s;box-shadow:0 0 5px #000;padding:15px 35px;border:2px solid var(--color-acc1);background-color:var(--color-acc1);color:#fff;font-weight:100}.swiper-slide__btn:hover{background-color:#fff;color:#000;box-shadow:0 0 10px #000}.firstscreen .swiper-pagination-bullet{width:20px;height:5px;border-radius:0}.firstscreen .swiper-pagination-bullet-active{background:var(--color-acc1)}.burger{position:absolute;display:flex;flex-direction:column;top:calc(50% - 8px);left:20px;cursor:pointer}.burger div{height:2px;width:24px;background-color:#fff}.burger div:nth-of-type(2){margin:5px 0}.menu{height:100vh;background-color:var(--color-acc1);width:300px;position:fixed;top:0;left:-300px;z-index:11200;transition:all ease .5s}.menu-item{margin-bottom:20px}.menu-item:nth-of-type(2){margin-top:40px}.menu-item h2{margin-bottom:10px;background-color:#fff;padding-left:20px}.menu-item li{margin-bottom:5px;padding-left:20px}.menu-item a{color:#fff;text-decoration:none}.menu-close{position:absolute;right:5px;cursor:pointer;top:17px}.menu-close div{height:2px;width:24px;background-color:#fff}.menu-close div:nth-of-type(1){transform:rotate(45deg);margin-bottom:-2px}.menu-close div:nth-of-type(2){transform:rotate(-45deg)}
        </style>      
    <?php else: ?>
        <style>
            .burger{position:absolute;display:flex;flex-direction:column;top:calc(50% - 8px);left:20px;cursor:pointer}.burger div{height:2px;width:24px;background-color:#fff}.burger div:nth-of-type(2){margin:5px 0}.menu{height:100vh;background-color:var(--color-acc1);width:300px;position:fixed;top:0;left:-300px;z-index:11200;transition:all ease .5s}.menu-item{margin-bottom:20px}.menu-item:nth-of-type(2){margin-top:40px}.menu-item h2{margin-bottom:10px;background-color:#fff;padding-left:20px}.menu-item li{margin-bottom:5px;padding-left:20px}.menu-item a{color:#fff;text-decoration:none}.menu-close{position:absolute;right:5px;cursor:pointer;top:17px}.menu-close div{height:2px;width:24px;background-color:#fff}.menu-close div:nth-of-type(1){transform:rotate(45deg);margin-bottom:-2px}.menu-close div:nth-of-type(2){transform:rotate(-45deg)}
        </style>
    <?php endif; ?>
</head>
<body>
<?php $this->beginBody(); ?>



<header>
    <div class="burger">
        <div></div>
        <div></div>
        <div></div>
    </div>
    <div class="container">
        <div class="header-logo">
            <a href="<?=Url::home()?>">
                <img src="img/logo/logo.png" alt="">
                <span>Управленческие <br> Системы</span>
            </a>
        </div>
        <?php if($url == 'http://yii.shop2/') : ?>
        <div class="header-nav">
            <nav>
                <ul>
                    <li><a href="#service">НАШИ УСЛУГИ</a></li>
                    <li><a href="#about">О КОМПАНИИ</a></li>
                    <li><a href="#work">СХЕМА РАБОТЫ</a></li>
                    <li><a href="#contacts">КОНТАКТЫ</a></li>
                </ul>
            </nav>
        </div>
        <?php endif; ?>
        <div class="header-phone">
            <div class="header-phone__top">
                <a href="tel:+79250086986">+7 (925) 008-69-86</a>
            </div>
            <div class="header-phone__bottom">
                <span class="modal-open-btn btn-modal-header">Обратный звонок</span>
            </div>
        </div>
    </div>
</header>        



<?= LeftMenuWidget::widget() ?>



<?= $content ?>

  

<footer>
    <div class="container">
        <div class="footer-top">
            <div class="footer-top__item">
                <h6>Контакты</h6>
                <p>Московская область, город Мытищи, улица Коминтерна, дом 15а, помещение 11</p>
            </div>
            <?= FooterMenuWidget::widget() ?>
        </div>
        <div class="footer-bottom">
            <div class="footer-bottom__item">
                <h6>Презентация Управленческие Системы</h6>
                <p>Укажите ваш e-mail адрес для получения презентации о нашей компании.</p>
                <form action="">
                    <input type="text" placeholder="Введите ваш e-mail">
                    <button>></button>
                </form>
            </div>
            <div class="footer-bottom__item">
                <img src="img/logo/logo.png" alt="">
                <span>Управленческие Системы</span>
            </div>
        </div>
        <div class="footer-bottom-bottom">
            <p>© Управлеческие системы 2000 - 2021</p>
        </div>
    </div>
</footer>    
    
  
   
<div id="scroll_btn">
  <i class="fas fa-arrow-up"></i>
</div>    
               


<?= ModalFormWidget::widget() ?>
<div class="success-form">
    <p>Ваши данные успешно отправлены. <br> Скоро наш менеджер свяжеться с вами.</p>
</div>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>